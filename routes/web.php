<!-- nama : abdulhayyi
    nim : 2210131210015
-->
<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BandaraController;
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
Route::get('/home', function () {
    return view('home',[
    'nama' => 'budi',
    'email' => 'www.gmail.com'    
    ]);
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/post', function () {
    return view('post');
})->name('post');

// Route::get('/about',[AboutController::class, 'index'])->name('about');


// Route::resource('mahasiswa', MahasiswaController::class)->name('index', 'mahasiswa');

Route::resource('databandara', BandaraController::class)->name('index', 'databandara');