<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\API\NoticiaApiController;
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

// Rutas para métodos de NoticiaController
Route::get('/', [NoticiaController::class, 'listaNoticias'])->name('index');
Route::get('/noticia/{id}', [NoticiaController::class, 'detalleNoticia'])->name('detalleNoticia');

// Rutas para métodos de NoticiaApiController
Route::get('/api/noticias/{page}', [NoticiaApiController::class, 'getNoticias'])->name('apiNoticias');
Route::get('/api/noticia/{id}', [NoticiaApiController::class, 'getNoticia'])->name('apiNoticia');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
