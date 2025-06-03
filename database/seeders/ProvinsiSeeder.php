<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsis = [
            ['nama' => 'Aceh'],
            ['nama' => 'Bali'],
            ['nama' => 'Banten'],
            ['nama' => 'Bengkulu'],
            ['nama' => 'DI Yogyakarta'],
            ['nama' => 'DKI Jakarta'],
            ['nama' => 'Gorontalo'],
            ['nama' => 'Jambi'],
            ['nama' => 'Jawa Barat'],
            ['nama' => 'Jawa Tengah'],
            ['nama' => 'Jawa Timur'],
            ['nama' => 'Kalimantan Barat'],
            ['nama' => 'Kalimantan Selatan'],
            ['nama' => 'Kalimantan Tengah'],
            ['nama' => 'Kalimantan Timur'],
            ['nama' => 'Kalimantan Utara'],
            ['nama' => 'Kepulauan Bangka Belitung'],
            ['nama' => 'Kepulauan Riau'],
            ['nama' => 'Lampung'],
            ['nama' => 'Maluku'],
            ['nama' => 'Maluku Utara'],
            ['nama' => 'Nusa Tenggara Barat'],
            ['nama' => 'Nusa Tenggara Timur'],
            ['nama' => 'Papua'],
            ['nama' => 'Papua Barat'],
            ['nama' => 'Riau'],
            ['nama' => 'Sulawesi Barat'],
            ['nama' => 'Sulawesi Selatan'],
            ['nama' => 'Sulawesi Tengah'],
            ['nama' => 'Sulawesi Tenggara'],
            ['nama' => 'Sulawesi Utara'],
            ['nama' => 'Sumatera Barat'],
            ['nama' => 'Sumatera Selatan'],
            ['nama' => 'Sumatera Utara']
        ];

        foreach ($provinsis as $provinsi) {
            \App\Models\Provinsi::create($provinsi);
        }
    }
}
