<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Halaman Landing Page Utama (Home)
Route::get('/', [PageController::class, 'home'])->name('home');

// Halaman Khusus Portofolio Lengkap
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');

// Proses Formulir Kontak (API/AJAX Request)
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
