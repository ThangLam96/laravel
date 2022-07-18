<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

 
Route::controller(ProductController::class)->prefix('product/')->name('product.')->group(function () {
    Route::get('', 'index')->name('index');

    Route::get('create', 'create')->name('create');
    Route::post('create', 'store')->name('store');
    
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::post('edit/{id}', 'update')->name('update');

    Route::get('delete/{id}', 'destroy')->name('destroy');
    
});
