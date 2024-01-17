<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\ObituaryController;

use App\Http\Controllers\TributeController;
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

Route::get('demo/{id}',[Controller::class,'demo'])->name('pt');
Route::post('add_tribute/{id}',[TributeController::class,'postTribute'])->name('routeToAddTribute');

Route::get('clicked/{id}',[ObituaryController::class,'clickedObituary'])->name('routeToClickedObituary');

Auth::routes();

Route::get('/',[Controller::class,'homePage'])->name('home');



Route::middleware(['auth','admin'])->group(function(){
    Route::get('adminDash', [App\Http\Controllers\HomeController::class, 'index'])->name('adminHome');
    Route::get('obituary-form',[Controller::class,'obForm'])->name('routeToObituaryForm');
    Route::post('adding-ob',[ObituaryController::class,'store'])->name('routeToSubmitObituary');
    Route::get('showing-data',[ObituaryController::class,'allData'])->name('routeToViewObituaries');
    Route::delete('deleting/{id}',[ObituaryController::class,'delete'])->name('routeToDeleteObituary');
    Route::get('editObit/{id}',[ObituaryController::class,'toBeEdited'])->name('toBeEdited');
    Route::post('edit/{id}',[ObituaryController::class,'editObituary'])->name('routeToEditObituary');
});


