<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// GET Routes
Route::get('/info', [InfoController::class, 'index']);
Route::get('/whoami', [InfoController::class, 'whoami']);
Route::get('/age', [InfoController::class, 'age']);
Route::get('/hobby', [InfoController::class, 'hobby']);
Route::get('/funfact', [InfoController::class, 'funfact']);

// POST Route
Route::post('/info', [InfoController::class, 'create']);

// PUT Route
Route::put('/info', [InfoController::class, 'update']);

// DELETE Route
Route::delete('/info', [InfoController::class, 'destroy']);

