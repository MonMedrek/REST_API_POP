<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    Route::get('/medrek/308772/People', [\App\Http\Controllers\PeopleController::class, 'index']);
    Route::get('/medrek/308772/People/{tutajid}', [\App\Http\Controllers\PeopleController::class, 'show']);
    Route::post('/medrek/308772/People', [\App\Http\Controllers\PeopleController::class, 'create']);
    Route::put('/medrek/308772/People', [\App\Http\Controllers\PeopleController::class, 'update']);
    Route::delete('/medrek/308772/People', [\App\Http\Controllers\PeopleController::class, 'delete']);
});
