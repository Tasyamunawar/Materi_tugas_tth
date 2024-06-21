<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\AdminBaseController;


Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('front.index');
    Route::get('/obatFront', 'obatFront')->name('obat.front'); 
    Route::get('/dashboard', 'indexHome')->name('front.home'); 
});


// Obat
Route::controller(ObatController::class)->group(function () {
    Route::get('/obat', 'indexObat')->name('index.obat');
    Route::get('/dataObat/form', 'dataObatForm')->name('dataObat.form');
    Route::post('/dataObat/form/create', 'dataObatCreate')->name('dataObat.create');
    Route::get('/dataObat/form/edit/{id}', 'dataObatFormEdit')->name('dataObat.form.edit');
    Route::put('/dataObat/form/update/{id}', 'dataObatFormUpdate')->name('dataObat.update');
    Route::delete('/dataObat/form/delete', 'dataObatDelete')->name('dataObat.delete');
    Route::get('/dataObat/search', 'dataObatSearch')->name('dataObat.search');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
