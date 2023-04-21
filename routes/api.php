<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//https://qiita.com/minato-naka/items/0e709cb0e6628c82c1c5#%E3%82%BF%E3%82%B9%E3%82%AF%E4%B8%80%E8%A6%A7%E5%8F%96%E5%BE%97api%E5%AE%9F%E8%A3%85
Route::get('/tasks', [App\Http\Controllers\TaskController::class,'index']);
Route::post('/tasks', [App\Http\Controllers\TaskController::class,'store']);
Route::get('/tasks{task}', [App\Http\Controllers\TaskController::class,'show']);
Route::put('/tasks{task}', [App\Http\Controllers\TaskController::class,'update']);
Route::delete('/tasks/{task}', [App\Http\Controllers\TaskController::class,'delete']);