<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Sector\controller\SectorController;
use App\Http\Controllers\Occupation\controller\OccupationController;
use App\Http\Controllers\User\controller\UserController;
use App\Http\Controllers\Admin\controller\AdminController;
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

Route::get('sectors',[SectorController::class, 'index']);
Route::get('occupations',[OccupationController::class,'index']);
Route::get('users',[UserController::class,'index']);
Route::get('admins',[AdminController::class, 'index']);
