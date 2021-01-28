<?php

use App\Http\Controllers\ProbaController;
use Illuminate\Support\Facades\Route;

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
Route::get('proba', function(){
    return view('proba');
});
Route::post('proba/save',[ProbaController::class,'crypt'])->name('save');
Route::post('proba/log',[ProbaController::class,'decrypt'])->name('log');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
