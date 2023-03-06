<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([[
                'nama' => 'Suwandi',
                'status' => 'Bapak',
                'agama' => 'Islam',
                'jenis_kelamin' => 'L'
            ],
            [
                'nama' => 'Sumiarsih',
                'status' => 'Ibuk',
                'agama' => 'Islam',
                'jenis_kelamin' => 'P'
            ],
            [
                'nama' => 'Moch. Nadi Rafli Maulana',
                'status' => 'Anak',
                'agama' => 'Islam',
                'jenis_kelamin' => 'L'
            ]
        ]);
    }
}
