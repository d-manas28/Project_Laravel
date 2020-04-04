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
Route::get('/home',function(){
    return view('Homepage');
});
Route::get('account','Pages@account');
Route::get('account2','Pages@account2');
Route::get('dashboard','Pages@dashboard');
Route::get('finaldeletion','Pages@finaldeletion');
Route::get('finalwindow','Pages@finalwindow');
Route::get('Homepage','Pages@Homepage');
Route::get('insertProcess','Pages@insertProcess');
Route::get('processpage','Pages@processpage');
Route::get('registration','Pages@registration');
Route::get('signout','Pages@signout');
Route::get('update','Pages@update');
Route::get('validation','Pages@validation');