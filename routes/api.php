<?php

use App\Http\Controllers\RazaController;
use App\Http\Controllers\OriginController;
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
});

Route::get('raza/{raza}',[RazaController::class,'show'])->name('api.raza.show');
Route::get('raza/',[RazaController::class,'index'])->name('api.raza.index');

Route::post('raza/store',[RazaController::class,'store'])->name('api.raza.store');


Route::get('origin/{origin}',[OriginController::class,'show'])->name('api.origin.show');
Route::get('origin/',[OriginController::class,'index'])->name('api.origin.index');

Route::post('origin/store',[OriginController::class,'store'])->name('api.origin.store');
Route::patch('origin/{origin}',[OriginController::class,'update'])->name('api.origin.update');
