<?php

namespace Database\Seeders;

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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('abati28')
        ]);
        DB::table('categories')->insert([
            ['name' => 'Koko', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jacket', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kurta', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kopiah', 'created_at' => now(), 'updated_at' => now()],
        ]);
        DB::table('sizes')->insert([
            ['name' => 'S'],
            ['name' => 'M'],
            ['name' => 'L'],
            ['name' => 'XL'],
            ['name' => 'XXL'],
            ['name' => 'XXXL'],
            ['name' => 'All Size'],
        ]);
    }
}
