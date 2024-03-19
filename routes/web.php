<?php

use App\Http\Controllers\data_asal_sekolahController;
use App\Http\Controllers\DataAsalSekolahController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('data_asal_sekolah',data_asal_sekolahController::class)->middleware('isLogin');

route::get('/',[SessionController::class,'index'])->middleware('isTamu');
route::get('/kontak',[HalamanController::class,'kontak']);
route::get('/tentang',[HalamanController::class,'tentang']);

route::get('/sesi', [SessionController::class, 'index'])->middleware('isTamu');
route::post('/sesi/login', [SessionController::class, 'login'])->middleware('isTamu');
route::get('/logout',[SessionController::class, 'logout']);
route::get('/register',[SessionController::class, 'register'])->middleware('isTamu');
route::post('/sesi/create',[SessionController::class, 'create'])->middleware('isTamu');