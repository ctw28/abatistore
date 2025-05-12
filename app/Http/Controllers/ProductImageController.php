<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\Response;

class ProductImageController extends Controller
{
    public function destroy($id)
    {
        $image = ProductImage::findOrFail($id);

        // Hapus file fisik dari storage jika ada
        if ($image->image && \Storage::disk('public')->exists($image->image)) {
            \Storage::disk('public')->delete($image->image);
        }

        $image->delete();

        return response()->json(['message' => 'Gambar berhasil dihapus.'], Response::HTTP_NO_CONTENT);
    }
}