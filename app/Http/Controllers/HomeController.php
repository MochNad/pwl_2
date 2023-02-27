<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function product()
    {
        return view('product');
    }

    public function news($id)
    {
        return view('news')->with('id', $id);
    }

    public function program()
    {
        return view('program');
    }

    public function aboutUs()
    {
        return view('about-us');
    }
}
