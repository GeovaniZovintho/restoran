<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data sampel untuk tabel Pelanggan
        Pelanggan::create([
            'nama' => 'Angel',
            'nomor_meja' => 1,
            'kontak' => '081200567890',
        ]);

        Pelanggan::create([
            'nama' => 'Budi',
            'nomor_meja' => 2,
            'kontak' => '081987654308',
        ]);

        Pelanggan::create([
            'nama' => 'Bunga',
            'nomor_meja' => 3,
            'kontak' => '081223344078',
        ]);

        Pelanggan::create([
            'nama' => 'Purnama',
            'nomor_meja' => 4,
            'kontak' => null, // Tidak memiliki kontak
        ]);
    }
}
