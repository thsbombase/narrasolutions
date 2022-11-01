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


Auth::routes();

Route::view('/', 'welcome')->name('home');
Route::view('/about-us', 'about_us')->name('about-us');
Route::view('/contact-us', 'contact_us')->name('contact-us');
Route::get('services/{service}', function () {
    return view('services');
})->name('services');
Route::view('/careers', 'careers')->name('careers');
