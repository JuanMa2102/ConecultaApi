<?php

use App\Http\Controllers\Api\V1;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::prefix('v1')->name('v1.')->group(function() {
        Route::get('checada/{id}',[V1\ChecadasController::class,'show'])->name('checada.show');
        Route::get('faltas/{id}',[V1\ChecadasController::class,'getFaltas'])->name('faltas.getFaltas');
        Route::post('login',[V1\LoginController::class,'login'])->name('login.login');
    });  