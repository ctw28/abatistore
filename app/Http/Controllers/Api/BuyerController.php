<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    // GET /api/buyers
    public function index()
    {
        return Buyer::orderBy('name')->get();
    }

    // POST /api/buyers
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'whatsapp_number' => 'nullable|string|max:20'
        ]);

        $buyer = Buyer::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Pembeli berhasil ditambahkan',
            'data' => $buyer
        ]);
    }

    // GET /api/buyers/{id}
    public function show($id)
    {
        return Buyer::findOrFail($id);
    }

    // PUT /api/buyers/{id}
    public function update(Request $request, $id)
    {
        $buyer = Buyer::findOrFail($id);

        $buyer->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Pembeli berhasil diupdate',
            'data' => $buyer
        ]);
    }

    // DELETE /api/buyers/{id}
    public function destroy($id)
    {
        Buyer::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Pembeli berhasil dihapus'
        ]);
    }

    public function search(Request $request)
    {
        $q = $request->q;

        return Buyer::where('name', 'like', "%$q%")->limit(10)->get();
    }
}