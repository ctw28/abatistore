<?php

namespace App\Http\Controllers;

use App\Models\ProductStock;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        return Size::all();
    }
    public function byProduct($id)
    {
        return ProductStock::with('size')
            ->where('product_id', $id)
            ->where('stock', '>', 0)
            ->get()
            ->map(function ($row) {
                return [
                    'id' => $row->size->id,
                    'name' => $row->size->name,
                    'stock' => $row->stock
                ];
            });
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:sizes,name',
        ]);

        $size = Size::create($validated);
        return response()->json(['message' => 'Ukuran berhasil ditambahkan', 'data' => $size]);
    }

    public function destroy($id)
    {
        $size = Size::findOrFail($id);
        $size->delete();

        return response()->json(['message' => 'Ukuran berhasil dihapus']);
    }
}