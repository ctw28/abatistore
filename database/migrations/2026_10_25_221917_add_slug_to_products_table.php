<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });

        $usedSlugs = [];

        DB::table('products')
            ->orderBy('id')
            ->get(['id', 'name'])
            ->each(function ($product) use (&$usedSlugs) {
                $base = Str::slug($product->name) ?: 'produk';
                $slug = $base;

                // Pastikan slug unik, termasuk jika ada nama produk yang sama.
                if (isset($usedSlugs[$slug])) {
                    $slug = $base . '-' . $product->id;
                }

                while (isset($usedSlugs[$slug])) {
                    $slug .= '-' . $product->id;
                }

                $usedSlugs[$slug] = true;

                DB::table('products')
                    ->where('id', $product->id)
                    ->update(['slug' => $slug]);
            });

        Schema::table('products', function (Blueprint $table) {
            $table->unique('slug');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn('slug');
        });
    }
};
