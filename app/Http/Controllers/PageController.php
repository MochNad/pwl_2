<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return "NIM : 2141720188, Nama : Moch. Nadi Rafli Maulana";
    }

    public function articles($id) {
        return "Halaman Artikel ID : $id";
    }
}
