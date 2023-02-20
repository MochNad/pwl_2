<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return 'Halaman Contact Us <br>
        Menampilkan Contact Us (route resource only) <br>
        <a href="https://www.educastudio.com/contact-us">https://www.educastudio.com/contact-us</a> <br>
        (Bisa Post kontak ke backend)';
    }
}
