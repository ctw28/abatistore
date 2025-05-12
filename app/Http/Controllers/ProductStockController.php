<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductStock;

class ProductStockController extends Controller
{
    public function index($productId)
    {
        $product = Product::with('stocks.size')->findOrFail($productId);
        return response()->json($product->stocks);
    }

    public function store(Request $request, $productId)
    {
        // Validasi input dari frontend
        $validated = $request->validate([
            'stocks' => 'required|array',
            'stocks.*.size_id' => 'required|exists:sizes,id',
            'stocks.*.stock' => 'required|integer|min:0',
        ]);

        // Hapus stok lama untuk produk ini, agar hanya ada data terbaru
        ProductStock::where('product_id', $productId)->delete();

        // Simpan stok yang baru
        foreach ($validated['stocks'] as $stock) {
            ProductStock::create([
                'product_id' => $productId,
                'size_id' => $stock['size_id'],
                'stock' => $stock['stock'],
            ]);
        }

        return response()->json(['message' => 'Stok berhasil disimpan']);
    }


    public function destroy($id)
    {
        $stock = ProductStock::findOrFail($id);
        $stock->delete();

        return response()->json(['message' => 'Stok berhasil dihapus']);
    }
}