<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminNewsController;
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

Route::group(['prefix' => 'admin'], function (){
    Route::get('',[AdminController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'news'], function (){
        Route::get('',[AdminNewsController::class, 'index'])->name('admin.news.index');
        Route::get('create', [AdminNewsController::class, 'create'])->name('admin.news.create');
        Route::post('store', [AdminNewsController::class, 'store'])->name('admin.news.create.process');
        Route::get('edit/{id}', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
        Route::post('edit/{id}', [AdminNewsController::class, 'update'])->name('admin.news.edit.process');
    });
});
