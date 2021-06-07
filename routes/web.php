<?php

use Illuminate\Foundation\Application;
use App\Http\Controllers\LoginSiswa;
use App\Http\Controllers\Loginuser;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
Route::get('/u/reg',[LoginSiswa::class,'Cliend']);
Route::post('/u/reg',[LoginSiswa::class,'Cliend']);
Route::get('/u/login',[LoginSiswa::class,'CasaveJ']);
Route::get('/a/ajax',[Loginuser::class,'Log_PC']);
Route::get('/a2/ajax',[Loginuser::class,'Base']);