<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
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



// Route::get('/hi/{id}/{as}', [PhotoController::class, 'blz']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/photo/list', [PhotoController::class, 'index']);
Route::get('/photo/{photo}', [PhotoController::class, 'show'])->whereNumber('photo');
Route::post('/photo/add', [PhotoController::class, 'store']);
Route::post('/photo/{photo}/update', [PhotoController::class, 'update']);
Route::post('/photo/{photo}/delete', [PhotoController::class, 'destroy']);


Route::get('/album/list', [AlbumController::class, 'index']);
Route::get('/album/{album}', [AlbumController::class, 'show'])->whereNumber('album');
Route::post('/album/add', [AlbumController::class, 'store']);
Route::post('/album/{album}/update', [AlbumController::class, 'update']);
Route::post('/album/{album}/delete', [AlbumController::class, 'destroy']);
