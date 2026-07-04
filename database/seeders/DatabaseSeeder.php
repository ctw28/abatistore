<?php

namespace Database\Seeders;

use App\Models\Tags;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'abatistore28@gmail.com',
        //     'password' => Hash::make('abati28')
        // ]);
        // DB::table('categories')->insert([
        //     ['name' => 'Koko', 'created_at' => now(), 'updated_at' => now()],
        //     ['name' => 'Jacket', 'created_at' => now(), 'updated_at' => now()],
        //     ['name' => 'Kurta', 'created_at' => now(), 'updated_at' => now()],
        //     ['name' => 'Kopiah', 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // DB::table('sizes')->insert([
        //     ['name' => 'S'],
        //     ['name' => 'M'],
        //     ['name' => 'L'],
        //     ['name' => 'XL'],
        //     ['name' => 'XXL'],
        //     ['name' => 'XXXL'],
        //     ['name' => 'All Size'],
        // ]);
        $tags = [

            // =========================
            // WARNA
            // =========================

            ['group' => 'Warna', 'name' => 'Hitam', 'color' => 'dark'],
            ['group' => 'Warna', 'name' => 'Putih', 'color' => 'light'],
            ['group' => 'Warna', 'name' => 'Navy', 'color' => 'primary'],
            ['group' => 'Warna', 'name' => 'Biru', 'color' => 'primary'],
            ['group' => 'Warna', 'name' => 'Olive', 'color' => 'success'],
            ['group' => 'Warna', 'name' => 'Army', 'color' => 'success'],
            ['group' => 'Warna', 'name' => 'Hijau', 'color' => 'success'],
            ['group' => 'Warna', 'name' => 'Abu', 'color' => 'secondary'],
            ['group' => 'Warna', 'name' => 'Cream', 'color' => 'warning'],
            ['group' => 'Warna', 'name' => 'Coklat', 'color' => 'warning'],
            ['group' => 'Warna', 'name' => 'Mocca', 'color' => 'warning'],
            ['group' => 'Warna', 'name' => 'Maroon', 'color' => 'danger'],
            ['group' => 'Warna', 'name' => 'Kombinasi', 'color' => 'info'],

            // =========================
            // MODEL
            // =========================

            ['group' => 'Model', 'name' => 'Lengan Panjang', 'color' => 'primary'],
            ['group' => 'Model', 'name' => 'Lengan Pendek', 'color' => 'info'],

            // KOLEKSI
            // =========================

            ['group' => 'Koleksi', 'name' => 'Best Seller', 'color' => 'warning'],
            ['group' => 'Koleksi', 'name' => 'New Arrival', 'color' => 'success'],

        ];

        foreach ($tags as $tag) {

            Tags::firstOrCreate(
                [
                    'group' => $tag['group'],
                    'name' => $tag['name']
                ],
                [
                    'color' => $tag['color']
                ]
            );
        }
    }
}