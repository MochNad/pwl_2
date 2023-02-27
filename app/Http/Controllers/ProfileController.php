<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view ('profile')
            ->with('name', 'Moch. Nadi Rafli Maulana')
            ->with('nama', 'Nadi')
            ->with('nim', '2141720188')
            ->with('kelas', 'TI-2B')
            ->with('absen', '15')
            ->with('prodi', 'D-IV Teknik Informatika')
            ->with('jurusan', 'Teknologi Informasi')
            ->with('univ', 'Politeknik Negeri Malang');
    }
}
