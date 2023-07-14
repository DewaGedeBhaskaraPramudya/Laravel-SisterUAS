<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Student;
use App\Models\Kelas;
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

Route::get('/ImportV', [HomeController::class,'ImportV']);
Route::get('/SData', [HomeController::class,'index']);
Route::post('/SData',[HomeController::class,'store']);
Route::get('/create',[HomeController::class,'create']);
Route::get('/edit/{id}',[HomeController::class,'edit']);
Route::patch('/SData/{id}',[HomeController::class,'update']);
Route::delete('/SData/{id}',[HomeController::class,'destroy']);
Route::get('/Export', [HomeController::class,'studentExport']);
Route::post('/StudentImport', [HomeController::class,'studentImportExcel']);
