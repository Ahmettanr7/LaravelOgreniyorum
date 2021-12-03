<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use Illuminate\Http\Request;

Route::get('/',[ProductController::class,'urunlerView'])->name('home');
Route::get('/urunler',[ProductController::class,'urunlerView'])->name('urunler');
Route::get('/urun/{id}',[ProductController::class,'getById'])->name('getById');

Route::get('/arama/{name}',[ProductController::class,'searchView'])->name('search');

Route::get('/register', [AuthController::class, 'registerView'])->name('registerView');
Route::post('/registerr', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
Route::post('/loginn', [AuthController::class, 'login'])->name('login');



Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::delete('/products/delete/{id}',[ProductController::class,'destroy2'])->name('destroy2');

    Route::get('/urun/duzenle/{id}',[ProductController::class,'getByIdUpdate'])->name('getByIdUpdate');
    Route::put('/urun/duzenle/{id}',[ProductController::class,'updateView'])->name('updateView2');
    Route::put('/product/update',[ProductController::class,'updateView'])->name('updateView');
    
    Route::get('/yeni-urun',[ProductController::class,'yeniUrunView'])->name('yeniUrunView');
    Route::post('/yeni-urun',[ProductController::class,'store'])->name('store2');
    Route::post('/yeni-urun-ekle',[ProductController::class,'store'])->name('store');

    Route::get('/hesabim',[AccountController::class,'AccountView'])->name('AccountView');

    Route::get('/hesap-ayarlari',[AccountController::class,'EditAccountView'])->name('EditAccountView');
    Route::put('/hesap-duzenle',[AccountController::class,'EditAccount'])->name('EditAccount');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});



//     Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
