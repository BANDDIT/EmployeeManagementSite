<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[EmployeeController::class,'home'])->name('home');
Route::get('/add',[EmployeeController::class,'AddPage'])->name('addPage');
Route::post('/add-process',[EmployeeController::class,'AddProcess'])->name('addProcess');
Route::delete('/delete/{id}',[EmployeeController::class,'Delete'])->name('delete');
Route::get('/update/{id}',[EmployeeController::class,'UpdatePage'])->name('updatePage');
Route::patch('/update-process/{id}',[EmployeeController::class,'UpdateProcess'])->name('updateProcess');
Route::post('/search',[EmployeeController::class,'Search'])->name('searchName');
