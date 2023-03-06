<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([[
                'no_pol' => 'N 4 SI',
                'merk' => 'Honda',
                'jenis' => 'Supra X',
                'tahun_buat' => '2003',
                'warna' => 'Ungu'
            ],
            [
                'no_pol' => 'N 4 DI',
                'merk' => 'Toyota',
                'jenis' => 'GR Supra',
                'tahun_buat' => '2023',
                'warna' => 'Pink'
            ]
        ]);
    }
}
