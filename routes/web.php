<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::prefix('mahasiswa')->group(function(){
    Route::get('/',[MahasiswaController::class,'index'])->name('mahasiswas.index');
    Route::get('/take/{mahasiswa}',[MahasiswaController::class,'take'])->name('mahasiswas.take');
    Route::post('/take/{mahasiswa}', [MahasiswaController::class, 'takeStore'])->name('mahasiswas.takeStore');
    Route::delete('/delete{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');
    Route::get('/edit{id}', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
    Route::put('/update{id}', [MahasiswaController::class, 'updatemahasiswa'])->name('mahasiswas.updatemahasiswa');
    Route::get('/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');
    Route::get('/createmahasiswa', [MahasiswaController::class, 'createmahasiswa'])->name('mahasiswas.createmahasiswa');
});

// Pivot
Route::get('/kegiatan',[MahasiswaController::class,'kegiatan'])->name('kegiatan');