<?php

use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\NoteController;
use App\Http\Middleware\SetLang;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

    // Route::middleware('setLang')->group(function(){

    //     Route::get('/lang/en', [LangController::class, 'en'])->name('lang.en');
    //     Route::get('/lang/ar', [LangController::class, 'ar'])->name('lang.ar');

            
    // });

//local Route
Route::get("locale/{lang}", [LangController::class,'setLang']);   

//notes Routes
Route::get('/' ,[NoteController::class, 'index'])->name('notes.index');
Route::get('/notes/create' ,[NoteController::class, 'create'])->name('notes.create');
Route::post('/notes/store' ,[NoteController::class, 'store'])->name('notes.store');

