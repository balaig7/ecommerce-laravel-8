<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//--------------Admin Routes---------------------//
Route::group(['namespace' => 'Admin','prefix' => 'admin'],function(){

Route::get('/products','ProductController@index')->name('view products');
Route::get('/products/create','ProductController@create')->name('view products');

});
//-----------------------------------------------//





Route::get('/content', function () {
    return view('admin.content');
});
Route::get('/front', function () {
    return view('front-page.content');
});
