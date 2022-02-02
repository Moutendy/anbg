<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ActualiterController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/formationlibre', [HomeController::class, 'formationlibre'])->name('formationlibre');
Route::get('/suivreformationlibre', [HomeController::class, 'suivreformationlibre'])->name('suivreformationlibre');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/vuformation', [AdminController::class, 'vuformation'])->name('vuformation');
Route::get('/actualite', [ActualiterController::class, 'actualite'])->name('actualite');
