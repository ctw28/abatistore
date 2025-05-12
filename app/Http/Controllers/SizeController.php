<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        return Size::all();
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