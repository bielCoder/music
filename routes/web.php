<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Storecontroller;
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

Route::get('/',[Storecontroller::class,'index']);
Route::get('/logout',[Storecontroller::class,'logout']);
Route::post('/register',[Storecontroller::class,'register']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/meus-anuncios',[Storecontroller::class,'meusAnuncios'])
    ->name('meus-anuncios');
    Route::get('/dados',[Storecontroller::class,'dados'])
    ->name('dados');
    Route::put('/update/{id}',[Storecontroller::class,'update'])
    ->name('update');
        Route::get('/anunciar',[Storecontroller::class,'anunciar'])
    ->name('anunciar');
    Route::post('/store',[Storecontroller::class,'storeAnunciar'])
    ->name('store');
    Route::get('{id}/edit',[Storecontroller::class,'edit']);


});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
