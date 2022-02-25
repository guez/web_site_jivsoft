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
Route::view('/briefcase', 'pages.briefcase')->name('briefcase');
Route::view('/services', 'pages.services')->name('services');
Route::view('/team', 'pages.team')->name('team');


Route::view('/objetives', 'pages.objetives')->name('objetives');
Route::view('/mission', 'pages.mission')->name('mission');
Route::view('/vision', 'pages.vision')->name('vision');


Route::view('/briefcase/optica-israel', 'pages.briefcase.optica_israel')->name('briefcase.optica-israel');
Route::view('/briefcase/rayodent', 'pages.briefcase.rayodent')->name('briefcase.rayodent');
Route::view('/briefcase/optica-israel', 'pages.briefcase.optica_israel')->name('briefcase.optica-israel');
Route::view('/briefcase/finca-el-oro', 'pages.briefcase.finca_el_oro')->name('briefcase.finca-el-oro');
Route::view('/briefcase/kevin-luna', 'pages.briefcase.kevin_luna')->name('briefcase.kevin-luna');
Route::view('/briefcase/curiosity', 'pages.briefcase.curiosity')->name('briefcase.curiosity');


