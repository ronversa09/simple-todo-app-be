<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/todos', [TodosController::class, 'index']);
Route::get('/todos/add', [TodosController::class, 'add']);
Route::get('/todos/edit', [TodosController::class, 'edit']);
Route::get('/todos/remove', [TodosController::class, 'remove']);