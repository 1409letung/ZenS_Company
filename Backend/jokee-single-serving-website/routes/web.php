<?php

use App\Http\Controllers\InternviewController;
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

Route::get('/', [InternviewController::class, 'index']);
Route::post('/check_vote', [InternviewController::class, 'check_vote'])->name('check_vote');
