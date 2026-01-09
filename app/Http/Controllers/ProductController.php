<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function images($id)
    {
        $product = Product::with('images')->findOrFail($id);
        return response()->json($product->images);
    }

    public function index(Request $request)
    {
        $products = Product::with('category', 'images', 'stocks.size');

        // STATUS
        if ($request->status === 'habis') {
            $products->where('is_habis', 1);
        } else {
            $products->where('is_habis', 0);
        }

        // SIZE
        if ($request->filled('size_id')) {
            $products->whereHas('stocks', function ($q) use ($request) {
                $q->where('size_id', $request->size_id)
                    ->where('stock', '>', 0);
            });
        }

        // KATEGORI
        if ($request->filled('category_id')) {
            $products->where('category_id', $request->category_id);
        }
        $products->orderBy('name', 'ASC');
        return response()->json($products->get());
    }





    public function destroy($id)
    {
        $product = Product::with('images')->findOrFail($id);

        // Hapus gambar utama jika ada
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        // Hapus gambar-gambar pendukung
        foreach ($product->images as $img) {
            Storage::disk('public')->delete($img->image);
            $img->delete(); // hapus record dari tabel product_images
        }

        // Hapus produk
        $product->delete();

        return response()->json(['message' => 'Produk berhasil dihapus']);
    }
    public function show($id)
    {
        $product = Product::with('images', 'category', 'stocks.size')->findOrFail($id);


        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable',
            'link_shopee' => 'nullable|string',
            'image' => 'nullable|image',
            'images.*' => 'nullable|image',
        ]);

        // Hapus gambar utama lama jika ada gambar baru
        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        // Update produk dengan data baru (termasuk image baru jika ada)
        $product->update($validated);

        // Tambah gambar pendukung baru
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $product->images()->create([
                    'image' => $file->store('products', 'public'),
                ]);
            }
        }

        return response()->json(['message' => 'Produk berhasil diperbarui']);
    }


    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'link_shopee' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // gambar utama
            'images.*' => 'nullable|image|max:2048', // gambar pendukung
        ]);

        // Simpan gambar utama (jika ada)
        $mainImagePath = null;
        if ($request->hasFile('image')) {
            $mainImagePath = $request->file('image')->store('products', 'public');
        }

        // Simpan produk
        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'description' => $request->description,
            'link_shopee' => $request->link_shopee,
            'image' => $mainImagePath,
        ]);

        // Simpan gambar pendukung (jika ada)
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $path
                ]);
            }
        }

        return response()->json([
            'message' => 'Produk berhasil disimpan',
            'product' => $product->load('images'),
        ]);
    }
    public function featured()
    {
        $products = Product::where('is_featured', true)
            ->latest()
            ->take(3)
            ->with('images') // kalau pakai relasi gambar pendukung
            ->get();

        return response()->json($products);
    }

    public function toggleFeatured($id)
    {
        $product = Product::findOrFail($id);
        $product->is_featured = !$product->is_featured;
        $product->save();

        return response()->json([
            'message' => 'Produk diperbarui',
            'is_featured' => $product->is_featured
        ]);
    }
    public function toggleHabis($id)
    {
        $product = Product::findOrFail($id);
        $product->is_habis = !$product->is_habis;
        $product->save();

        return response()->json([
            'message' => 'Produk diperbarui',
            'is_habis' => $product->is_habis
        ]);
    }
}