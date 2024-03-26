<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;

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
    return view('welcome');
});

// Route::get('/level', [LevelController::class, 'index']);

// Route::get('/kategori', [KategoriController::class, 'index']);

// Route::get('/user', [UserController::class, 'index'])->name('/user');

// Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');

// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');

// Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');

// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');

// Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');

// Route::get('/kategori/create', [KategoriController::class, 'create'])->name('/kategori/create');

// Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('/kategori/edit');

// Route::put('/kategori/simpen/{id}', [KategoriController::class, 'simpen'])->name('/kategori/simpen');

// Route::post('/kategori', [KategoriController::class, 'store'])->name('/kategori');

// Route::get('/kategori/delete/{id}', [KategoriController::class, 'busek'])->name('/kategori/delete');

// Route::get('/kategori/create', [KategoriController::class, 'create']);

// Route::get('/kategori', [KategoriController::class, 'store']);

// // for kategori
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/kategori/create', [KategoriController::class, 'create']);
// Route::post('/kategori', [KategoriController::class, 'store']);
// Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
// Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
// Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

// for kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

// for level
Route::get('/level', [LevelController::class, 'index']);
Route::get('/level/create', [LevelController::class, 'create']);
Route::post('/level', [LevelController::class, 'store']);
Route::put('/level/{id}', [LevelController::class, 'update'])->name('level.update');
Route::get('/level/{id}/edit', [LevelController::class, 'edit'])->name('level.edit');
Route::delete('/level/{id}', [LevelController::class, 'destroy'])->name('level.destroy');

// for user
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

// for level
Route::get('/level', [LevelController::class, 'index']);
Route::get('/level/create', [LevelController::class, 'create']);
Route::post('/level', [LevelController::class, 'store']);
Route::put('/level/{id}', [LevelController::class, 'update'])->name('level.update');
Route::get('/level/{id}/edit', [LevelController::class, 'edit'])->name('level.edit');
Route::delete('/level/{id}', [LevelController::class, 'destroy'])->name('level.destroy');

// for user
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');