<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Deneme;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;

Route::get('/',[ProductController::class,'urunlerView'])->name('urunler');
Route::get('/urunler',[ProductController::class,'urunlerView'])->name('urunler');

Route::get('/arama/{name}',[ProductController::class,'searchView'])->name('search');

Route::delete('/products/delete/{id}',[ProductController::class,'destroy2'])->name('destroy2');
Route::get('/urun/{id}',[ProductController::class,'getById'])->name('getById');
Route::get('/urun/duzenle/{id}',[ProductController::class,'getByIdUpdate'])->name('getByIdUpdate');
Route::put('/urun/duzenle/{id}',[ProductController::class,'updateView'])->name('updateView2');
Route::put('/product/update',[ProductController::class,'updateView'])->name('updateView');

Route::get('/yeni-urun',[ProductController::class,'yeniUrunView'])->name('yeniUrunView');
Route::post('/yeni-urun',[ProductController::class,'store'])->name('store2');
Route::post('/yeni-urun-ekle',[ProductController::class,'store'])->name('store');
