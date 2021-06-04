<?php

use App\Http\Controllers\LoginSiswa;
use App\Http\Controllers\Loginuser;
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

Route::get('/u/reg',[LoginSiswa::class,'Cliend']);
Route::post('/u/reg',[LoginSiswa::class,'Cliend']);
Route::get('/u/login',[LoginSiswa::class,'CasaveJ']);
Route::get('/a/ajax',[Loginuser::class,'Log_PC']);

