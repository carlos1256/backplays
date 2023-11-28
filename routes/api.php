<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\RoomController;
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

Route::get('/player',[PlayersController::class, 'index']);
Route::get('/room',[RoomController::class, 'index']);

Route::put('/player/actualizar',[PlayersController::class, 'update']);

Route::post('/player/guardar',[PlayersController::class, 'store']);
Route::post('/room/guardar/',[RoomController::class, 'store']);

Route::delete('/player/borrar/{id}',[PlayersController::class, 'destroy']);
Route::delete('/room/borrar/{room}',[RoomController::class, 'destroy']);

Route::get('/player/buscar/{phone}',[PlayersController::class, 'show']);