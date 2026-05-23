<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Models\ClickEvent;
use Illuminate\Http\Request;

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

// Click tracking API
Route::post('/track-click', function (Request $request) {
    if ($request->cookie('cookie_consent') === 'accepted') {
        ClickEvent::create([
            'session_id' => session()->getId(),
            'element_name' => $request->element_name,
            'page_url' => $request->page_url,
        ]);
    }
    return response()->json(['status' => 'success']);
})->name('track.click');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Admin Portfolio CRUD
    Route::resource('admin/portfolio', PortfolioController::class)->names('admin.portfolio');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
