<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/crear",function () {
    return view('crear');
});

Route::post("/crear",[AnimalController::class,"Insertar"]);

Route::get("/animal",[AnimalController::class,"Listar"]);
Route::get("/eliminar",[AnimalController::class,"Eliminar"]);