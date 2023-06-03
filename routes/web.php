<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Pertemuan 2

// Praktikum 1

// Route::get('/', function () {
//     return "Selamat Datang";
// });

// Route::get('/about', function () {
//     return "NIM : 2141720188, Nama : Moch. Nadi Rafli Maulana";
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Halaman Artikel ID : $id";
// });

// Praktikum 2

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Praktikum 3

// Route::get('/', function () {
//     return "Halaman Home <br>
//             Menampilkan halaman awal website";
// });

// Route::prefix('category')->group(function () {
//     Route::get('/', function () {
//         return 'Halaman Products <br>
//             Menampilkan daftar product ( route prefix) <br>
//             <a href="https://www.educastudio.com/category/marbel-edu-games">https://www.educastudio.com/category/marbel-edu-games</a> <br>
//             <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">https://www.educastudio.com/category/marbel-and-friends-kids-games</a> <br>
//             <a href="https://www.educastudio.com/category/riri-story-books">https://www.educastudio.com/category/riri-story-books</a> <br>
//             <a href="https://www.educastudio.com/category/kolak-kids-songs">https://www.educastudio.com/category/kolak-kids-songs</a>';
//     });
//     Route::get('/marbel-edu-games', function () {
//         return '<a href="https://www.educastudio.com/category/marbel-edu-games">https://www.educastudio.com/category/marbel-edu-games</a>';
//     });
//     Route::get('/marbel-and-friends-kids-games', function () {
//         return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">https://www.educastudio.com/category/marbel-and-friends-kids-games</a>';
//     });
//     Route::get('/riri-story-books', function () {
//         return '<a href="https://www.educastudio.com/category/riri-story-books">https://www.educastudio.com/category/riri-story-books</a>';
//     });
//     Route::get('/kolak-kids-songs', function () {
//         return '<a href="https://www.educastudio.com/category/kolak-kids-songs">https://www.educastudio.com/category/kolak-kids-songs</a>';
//     });
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman News ' . $id .' <br>
//         Menampilkan Daftar berita (route param) <br>
//         <a href="https://www.educastudio.com/news">https://www.educastudio.com/news</a> <br>
//         <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19</a>';
// });

// Route::prefix('program')->group(function () {
//     Route::get('/', function () {
//         return 'Halaman Program <br>
//             Menampilkan Daftar Program (route prefix) <br>
//             <a href="https://www.educastudio.com/program/karir">https://www.educastudio.com/program/karir</a> <br>
//             <a href="https://www.educastudio.com/program/magang">https://www.educastudio.com/program/magang</a> <br>
//             <a href="https://www.educastudio.com/program/kunjungan-industri">https://www.educastudio.com/program/kunjungan-industri</a>';
//     });
//     Route::get('/karir', function () {
//         return '<a href="https://www.educastudio.com/program/karir">https://www.educastudio.com/program/karir</a>';
//     });
//     Route::get('/magang', function () {
//         return '<a href="https://www.educastudio.com/program/magang">https://www.educastudio.com/program/magang</a>';
//     });
//     Route::get('/kunjungan-industri', function () {
//         return '<a href="https://www.educastudio.com/program/kunjungan-industri">https://www.educastudio.com/program/kunjungan-industri</a>';
//     });
// });

// Route::get('/about-us', function () {
//     return 'Halaman About Us <br>
//         Menampilkan About Us (route biasa) <br>
//         <a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>';
// });

// Route::resource('contact-us', ContactUsController::class)->only(['index']);

// Pertemuan 3

// Praktikum 1

// Route::get('/', [HomeController::class, 'index']);

// Route::prefix('category')->group(function () {
//     Route::get('/', [HomeController::class, 'product']);
// });

// Route::get('articles/{id}', [HomeController::class, 'news']);

// Route::prefix('program')->group(function () {
//     Route::get('/', [HomeController::class, 'program']);
// });

// Route::get('/about-us', [HomeController::class, 'aboutUs']);

// Route::resource('contact-us', ContactUsController::class)->only(['index']);

// Praktikum 2

Auth::routes();

Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function() {
    Route::get('/', [BerandaController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/pengalaman-kuliah', [PengalamanKuliahController::class, 'index']);

    Route::get('/kendaraan', [KendaraanController::class, 'index']);
    Route::get('/hobi', [HobiController::class, 'index']);
    Route::get('/keluarga', [KeluargaController::class, 'index']);
    Route::get('/mata-kuliah', [MataKuliahController::class, 'index']);
    
    Route::get('/mahasiswa/cetak_pdf/{id}', [MahasiswaController::class, 'cetak_pdf']);
    Route::resource('/mahasiswa', MahasiswaController::class)->parameter('mahasiswa', 'id');
    Route::post('/mahasiswa/data', [MahasiswaController::class, 'data']);
    Route::post('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy']);
    Route::get('/mahasiswa/{id}/nilai', [MahasiswaController::class, 'nilai']);

    Route::get('/articles/cetak_pdf', [ArticleController::class, 'cetak_pdf']);
    Route::resource('/articles', ArticleController::class)->parameter('articles', 'id');
});
