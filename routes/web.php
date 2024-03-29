<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
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

Route::get('/', function () {
    return view('links.index');
});
Route::get('/generate', [LinkController::class, 'index'])->name('links.generate');
Route::post('/generate', [LinkController::class, 'store']);
Route::get('/{hash}', [LinkController::class, 'show'])->name('links.show');
