<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use App\Models\Sale;
use App\Models\SaleItem;
use App\Models\ProductSizeStock;
use App\Models\ProductStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function index()
    {
        return Sale::with('items.product', 'items.size')->latest()->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'sale_date' => 'required|date',
            'payment_method' => 'nullable|string',
            'total_paid' => 'required|numeric',
            'buyer.id' => 'nullable|exists:buyers,id',
            'buyer.name' => 'nullable|string',
            'buyer.whatsapp_number' => 'nullable|string',
            'items' => 'required|array|min:1',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.size_id' => 'nullable|exists:sizes,id',
            'items.*.original_price' => 'required|numeric',
            'items.*.final_price' => 'required|numeric',
            'items.*.discount_per_item' => 'required|numeric',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.subtotal' => 'required|numeric',
        ]);

        DB::beginTransaction();

        try {
            // Simpan pembeli (jika ada)
            $buyer = null;

            if (!empty($data['buyer']['id'])) {

                // PAKAI PEMBELI LAMA
                $buyer = Buyer::find($data['buyer']['id']);
            } else {

                // BUAT PEMBELI BARU
                if (!empty($data['buyer']['name'])) {
                    $buyer = Buyer::create([
                        'name' => $data['buyer']['name'],
                        'whatsapp_number' => $data['buyer']['whatsapp_number'],
                    ]);
                }
            }


            // Hitung total diskon
            $totalDiscount = collect($data['items'])->sum(function ($item) {
                return ($item['discount_per_item'] ?? 0) * $item['quantity'];
            });

            // Simpan sale
            $sale = Sale::create([
                'sale_date' => $data['sale_date'],
                'payment_method' => $data['payment_method'],
                'buyer_id' => $buyer->id ?? null,
                'total_discount' => $totalDiscount,
                'total_paid' => $data['total_paid']
            ]);

            // Simpan item penjualan
            foreach ($data['items'] as $item) {
                // Simpan item penjualan
                SaleItem::create([
                    'sale_id' => $sale->id,
                    'product_id' => $item['product_id'],
                    'size_id' => $item['size_id'],
                    'quantity' => $item['quantity'],
                    'original_price' => $item['original_price'],
                    'final_price' => $item['final_price'],
                    'discount_per_item' => $item['discount_per_item'],
                    'subtotal' => $item['subtotal']
                ]);

                // Kurangi stok
                $stock = \App\Models\ProductStock::where('product_id', $item['product_id'])
                    ->where('size_id', $item['size_id'])
                    ->lockForUpdate()
                    ->first();

                if (!$stock) {
                    throw new \Exception("Stok untuk produk ID {$item['product_id']} ukuran ID {$item['size_id']} tidak ditemukan.");
                }

                if ($stock->stock < $item['quantity']) {
                    throw new \Exception("Stok tidak cukup untuk produk ID {$item['product_id']} ukuran ID {$item['size_id']}.");
                }

                $stock->stock -= $item['quantity'];
                $stock->save();
            }


            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Penjualan berhasil disimpan',
                'sale_id' => $sale->id
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan penjualan',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $sale = Sale::with('items', 'buyer')->findOrFail($id);

            // Tambahkan kembali stok dari setiap item
            foreach ($sale->items as $item) {
                $stock = \App\Models\ProductStock::where('product_id', $item->product_id)
                    ->where('size_id', $item->size_id)
                    ->lockForUpdate()
                    ->first();

                if ($stock) {
                    $stock->stock += $item->quantity;
                    $stock->save();
                }
            }

            // Hapus item dan penjualan
            $sale->items()->delete();
            $sale->buyer()->delete();
            $sale->delete();

            DB::commit();

            return response()->json(['success' => true, 'message' => 'Penjualan berhasil dihapus']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Gagal menghapus', 'error' => $e->getMessage()], 500);
        }
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();

        DB::beginTransaction();
        try {
            $sale = Sale::with('items', 'buyer')->findOrFail($id);

            // Langkah 1: Kembalikan stok item sebelumnya
            foreach ($sale->items as $oldItem) {
                $stock = \App\Models\ProductStock::where('product_id', $oldItem->product_id)
                    ->where('size_id', $oldItem->size_id)
                    ->lockForUpdate()
                    ->first();

                if ($stock) {
                    $stock->stock += $oldItem->quantity;
                    $stock->save();
                }
            }

            // Hapus item lama
            $sale->items()->delete();

            // Hitung total diskon
            $totalDiscount = collect($data['items'])->sum(function ($item) {
                return ($item['discount_per_item'] ?? 0) * $item['quantity'];
            });

            // Update data utama
            $sale->update([
                'sale_date' => $data['sale_date'],
                'payment_method' => $data['payment_method'],
                'total_paid' => $data['total_paid'],
                'total_discount' => $totalDiscount,
            ]);
            // Jika pilih buyer lain
            if ($request->buyer_id) {
                $sale->update([
                    'buyer_id' => $request->buyer_id
                ]);
            }
            // Jika pilih buyer lain
            if ($request->buyer_id) {
                $sale->update([
                    'buyer_id' => $request->buyer_id
                ]);
            }

            // if ($sale->buyer) {
            //     $sale->buyer->update([
            //         'name' => $request->input('buyer.name'),
            //         'whatsapp_number' => $request->input('buyer.whatsapp_number'),
            //     ]);
            // }
            // Simpan ulang item baru dan update stok
            foreach ($data['items'] as $item) {
                \App\Models\SaleItem::create([
                    'sale_id' => $sale->id,
                    'product_id' => $item['product_id'],
                    'size_id' => $item['size_id'],
                    'quantity' => $item['quantity'],
                    'original_price' => $item['original_price'],
                    'final_price' => $item['final_price'],
                    'discount_per_item' => $item['discount_per_item'],
                    'subtotal' => $item['subtotal']
                ]);

                // Kurangi stok baru
                $stock = \App\Models\ProductStock::where('product_id', $item['product_id'])
                    ->where('size_id', $item['size_id'])
                    ->lockForUpdate()
                    ->first();

                if (!$stock) {
                    throw new \Exception("Stok untuk produk ID {$item['product_id']} ukuran ID {$item['size_id']} tidak ditemukan.");
                }

                if ($stock->stock < $item['quantity']) {
                    throw new \Exception("Stok tidak cukup untuk produk ID {$item['product_id']} ukuran ID {$item['size_id']}.");
                }

                $stock->stock -= $item['quantity'];
                $stock->save();
            }

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Penjualan berhasil diperbarui', 'data' => $request->all()]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Gagal update', 'error' => $e->getMessage()], 500);
        }
    }
}