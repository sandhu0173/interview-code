<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;
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

Route::get('tasks', [Api::class, 'tasks']);
Route::get('task/detail/{id}',[Api::class, 'taskdetail'] );
Route::post('task/store', [Api::class, 'storetask']);
Route::put('task/update/{id}', [Api::class, 'updatetask']);
Route::delete('task/delete/{id}',[Api::class, 'deletetask']);
Route::get('task/sort', [Api::class, 'sorttask']);

