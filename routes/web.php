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

Route::get('ho',[Controller::class,'newHome']);

Route::get('test',[Controller::class,'testing']);
Route::get('tribute-modal/{id}',[TributeController::class,'tributeFor'])->name('routeToTributeModal');

Route::get('st/{id}',[TributeController::class,'viewTributePage'])->name('routeToTributePage');

Route::get('demo/{id}',[Controller::class,'demo'])->name('pt');

Route::get('post-card/{id}',[TributeController::class,'numberOne'])->name('routeToPostCardPage');
Route::get('post-lighting/{id}',[TributeController::class,'numberTwo'])->name('routeToPostLightingPage');
Route::get('post-wreath/{id}',[TributeController::class,'numberThree'])->name('routeToPostWreathPage');
Route::get('post-letter/{id}',[TributeController::class,'numberFour'])->name('routeToPostLetterPage');
Route::get('post-treasure/{id}',[TributeController::class,'numberFive'])->name('routeToPostTreasurePage');
Route::get('post-message/{id}',[TributeController::class,'numberSix'])->name('routeToPostMessagePage');



Route::post('add-card/{id}',[TributeController::class,'addCard'])->name('routeToSubmitCard');
Route::post('add-lighting/{id}',[TributeController::class,'addLighting'])->name('routeToSubmitLighting');
Route::post('add-wreath/{id}',[TributeController::class,'addWreath'])->name('routeToSubmitWreath');
Route::post('add-letter/{id}',[TributeController::class,'addLetter'])->name('routeToSubmitLetter');
Route::post('add-moment/{id}',[TributeController::class,'addMoment'])->name('routeToSubmitMoment');
Route::post('add-message/{id}',[TributeController::class,'addMessage'])->name('routeToSubmitMessage');



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


