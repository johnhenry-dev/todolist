<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('todolist', [TodolistController::class,'APIcreate']);

Route::get('todolist', [TodolistController::class, 'APIshow']);

Route::put('todolistUpdate/{id}', [TodolistController::class, 'APIupdate']);

Route::delete('todolistDelete/{id}', [TodolistController::class, 'APIdelete']);
