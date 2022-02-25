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

Route::view('/', 'pages.home')->name('home');
Route::view('/contactos', 'pages.contact')->name('contact');
Route::view('/portafolio', 'pages.portafolio')->name('portafolio');
Route::view('/services', 'pages.services')->name('services');
Route::view('/objetives', 'pages.objetives')->name('objetives');
Route::view('/mission', 'pages.mission')->name('mission');
Route::view('/vision', 'pages.vision')->name('vision');



