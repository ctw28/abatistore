<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\SaleItem;
use App\Models\ProductStock;
use App\Models\Size;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->year ?? now()->year;
        $month = $request->month;
        $category = $request->category_id;
        $sort = $request->sort ?? 'name_asc';

        $sales = Sale::query()
            ->whereYear('sale_date', $year);

        if ($month) {
            $sales->whereMonth('sale_date', $month);
        }
        $totalStock = ProductStock::join(
            'products',
            'products.id',
            '=',
            'product_stocks.product_id'
        )
            ->when($category, function ($q) use ($category) {

                $q->where('products.category_id', $category);
            })
            ->sum('stock');
        $summary = [
            'income' => (clone $sales)->sum('total_paid'),
            'transactions' => (clone $sales)->count(),
            'items' => SaleItem::whereHas('sale', function ($q) use ($year, $month) {

                $q->whereYear('sale_date', $year);

                if ($month) {
                    $q->whereMonth('sale_date', $month);
                }
            })->sum('quantity'),

            'total_stock' => $totalStock
        ];

        $sizes = Size::orderBy('id')->get();

        $products = Product::with('stocks.size')
            ->when($category, function ($q) use ($category) {
                $q->where('category_id', $category);
            })
            ->get()
            ->map(function ($product) {

                $total = $product->stocks->sum('stock');

                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'total' => $total,
                    'stocks' => $product->stocks->map(function ($stock) {
                        return [
                            'size' => $stock->size->name,
                            'stock' => $stock->stock
                        ];
                    })
                ];
            })
            ->filter(function ($product) {
                return $product['total'] > 0;
            })
            ->values();

        switch ($sort) {

            case 'name_desc':
                $products = $products->sortByDesc('name')->values();
                break;

            case 'stock_desc':
                $products = $products->sortByDesc('total')->values();
                break;

            case 'stock_asc':
                $products = $products->sortBy('total')->values();
                break;

            default:
                $products = $products->sortBy('name')->values();
        }

        $stockBySize = [];

        foreach ($sizes as $size) {

            $stockBySize[] = [

                'name' => $size->name,

                'total' => $products->sum(function ($product) use ($size) {

                    foreach ($product['stocks'] as $stock) {

                        if ($stock['size'] == $size->name) {

                            return $stock['stock'];
                        }
                    }

                    return 0;
                })

            ];
        }

        return response()->json([

            'summary' => $summary,

            'sizes' => $sizes,

            'products' => $products,

            'stockBySize' => $stockBySize

        ]);
    }
}