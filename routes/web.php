<?php

use App\Http\Controllers\Pencetak;
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

Route::get('cetak-kp-1', function(){
    return view('kp-1');
});
Route::post('kp-1', [Pencetak::class, 'kp1'])->name('kp-1.kp1');

Route::get('cetak-kp-4', function(){
    return view('kp-4');
});
Route::post('kp-4', [Pencetak::class, 'kp4'])->name('kp-4.kp4');

Route::get('cetak-kp-5a', function(){
    return view('kp-5a');
});
Route::post('kp-5a', [Pencetak::class, 'kp5a'])->name('kp-5a.kp5a');