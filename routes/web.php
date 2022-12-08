<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('template.master');
// });
Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/', [HomeController::class,'store'])->name('home.store');
Route::get('/tamu',[HomeController::class,'tamu'])->name('home.tamu');
