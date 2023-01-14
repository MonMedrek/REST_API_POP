<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PeopleController;

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
});
    Route::apiResource('/Medrek/308772/People',PeopleController::class);
    Route::get('/Medrek/308772/People', [PeopleController::class, 'index']);
    Route::get('/Medrek/308772/People/{id}', [PeopleController::class, 'show']);
    Route::put('/Medrek/308772/People/{id}', [PeopleController::class, 'store']);
    Route::patch('/Medrek/308772/People/{id}/', [PeopleController::class, 'update']);
    Route::delete('/Medrek/308772/People/{id}', [PeopleController::class, 'destroy']);

