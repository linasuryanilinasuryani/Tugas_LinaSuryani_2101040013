<?php

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
//     return view('welcome');
// });

//php artisan make:controller namacontroller (-r) Opsional

//route about (hyperlink), [(controller yang di tuju), (function yang di tuju)]
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/',[App\Http\Controllers\SoalController::class, 'index'])->name('soal');

//Route::get('/mahasiswa/{id}/edit', [mahasiswaController ::class])->name('mahasiswa.edit');


//Route::get('/mahasiswa/{id}/delete', [mahasiswaController ::class, 'destroy'])->name('mahasiswa.delete');
//Route::get('/kelas/{id}/edit', [KelasController ::class])->name('kelas.edit');


//Route::get('/kelas/{id}/delete', [KelasController ::class, 'destroy'])->name('kelas.delete');
Route::get('/soal/{id}/edit', [SoalController ::class])->name('soal.edit');

Route::get('/soal/{id}/delete', [SoalController ::class, 'destroy'])->name('soal.delete');


// Route::view('/', 'coba');

Route::get('/buku/taon/{berapa}', [AboutController::class, 'tahun']);
