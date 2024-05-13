<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\AuthorController;
use PharIo\Manifest\Author;

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
Route::post('/', [AuthorController::class, 'index']);
Route::post('/find', [AuthorController::class, 'search']);
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);
Route::get('/verror', [AuthorController::class, 'verror']);








// Route::get('/confirm', [AllController::class, 'confirm']);

Route::post('/confirm', [AllController::class, 'confirm']);


// Route::get('/thanks', [AllController::class, 'thanks']);
Route::post('/thanks', [AllController::class, 'thanks']);


Route::get('/admin', [AllController::class, 'admin']);


Route::get('/register', [AuthorController::class, 'index']);


Route::post('/login', [AuthorController::class, 'login']);