<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data sampel untuk tabel Menu
        Menu::create([
            'nama_hidangan' => 'Mie Goreng',
            'kategori' => 'Makanan Utama',
            'harga' => 30000,
            'ketersediaan' => true,
        ]);

        Menu::create([
            'nama_hidangan' => 'Teh Manis',
            'kategori' => 'Minuman',
            'harga' => 5000,
            'ketersediaan' => true,
        ]);

        Menu::create([
            'nama_hidangan' => 'Kentang Goreng',
            'kategori' => 'Makanan Penutup',
            'harga' => 15000,
            'ketersediaan' => true,
        ]);

        Menu::create([
            'nama_hidangan' => 'Mie Pangsit',
            'kategori' => 'Makanan Utama',
            'harga' => 24000,
            'ketersediaan' => false,
        ]);
    }
}
