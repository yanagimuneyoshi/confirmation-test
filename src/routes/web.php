<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
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



Route::get('/', [AllController::class, 'index']);

Route::get('/confirm', [AllController::class, 'confirm']);

Route::get('/thanks', [AllController::class, 'thanks']);


Route::get('/admin', [AllController::class, 'admin']);


Route::get('/register', [AllController::class, 'register']);


Route::get('/login', [AllController::class, 'login']);