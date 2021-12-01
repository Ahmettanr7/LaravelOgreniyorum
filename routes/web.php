<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Deneme;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;

Route::get('/',[ProductController::class,'urunlerView'])->name('urunler');
Route::get('/urunler',[ProductController::class,'urunlerView'])->name('urunler');
Route::get('/arama/{name}',[ProductController::class,'searchView'])->name('search');
Route::delete('/products/delete/{id}',[ProductController::class,'destroy2'])->name('destroy2');
Route::get('/product/{id}',[ProductController::class,'getById'])->name('getById');
