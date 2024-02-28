<?php

namespace Database\Seeders;

use App\Models\KategoriBuku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'NamaKategori' => 'Horror'
            ],
            [
                'NamaKategori' => 'Romance'
            ],
            ];

            foreach ($kategori as $key => $value) {
                KategoriBuku::create($value);
            }
    }
}
