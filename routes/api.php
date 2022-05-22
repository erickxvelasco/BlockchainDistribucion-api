<?php

use App\Http\Controllers\RazaController;
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
