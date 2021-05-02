<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, 'index']);
Route::get('/task/{task}/delete', [TaskController::class, 'destroy']); // honestly, I think working with frontend frameworks and REST APIs deformed me so much that I have no idea how to make a DELETE request without javascript Fetch API, so I'm doing it dirtily via a GET method, smh **goes pet his Vue projects**
Route::get('/task/{task}', [TaskController::class, 'show']);