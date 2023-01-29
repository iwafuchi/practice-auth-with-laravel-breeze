<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoutingController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(RoutingController::class)->prefix('routing')->group(function () {
    Route::get('/', 'index')->name('routing.index');
    Route::get('index', 'index')->name('routing.index');
    Route::get('create', 'create')->name('routing.create');
    Route::post('create', 'createConfirm')->name('routing.createConfirm');
});

require __DIR__ . '/auth.php';
