<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\ObituaryController;
use App\Http\Controllers\DropdownController;
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

// Route::get('/',[DropdownController::class,'country']);
// Route::post('fetch-states',[DropdownController::class,'fetchState'])->name('states');
// Route::post('fetch-cities',[DropdownController::class,'fetchCity'])->name('cities');

Route::get('/', function () {
    return view('obituary-form');
});

// Route::get('/',[Controller::class,'loadFirst']);

Route::post('adding-ob',[ObituaryController::class,'store'])->name('routeToSubmitObituary');
Route::get('showing-data',[ObituaryController::class,'allData'])->name('routeToViewObituaries');
Route::delete('deleting/{id}',[ObituaryController::class,'delete'])->name('routeToDeleteObituary');
Route::get('editObit/{id}',[ObituaryController::class,'toBeEdited'])->name('toBeEdited');

Route::post('edit/{id}',[ObituaryController::class,'editObituary'])->name('routeToEditObituary');