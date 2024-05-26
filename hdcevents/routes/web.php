<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController; // definir a pasta para usar os controllers


Route::get('/', [EventController::class, 'index']); // route for Action Index
//include method middleware for access only user logged;
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth'); // route for Action create
Route::get('/events/{id}', [EventController::class, 'show']); // route for Action show
Route::get('/contact', [EventController::class, 'contact']); // route for Action contact
Route::post('events',[EventController::class, 'store']) ; // store convercao de laravel
Route::delete('events/{id}',[EventController::class,'destroy']); // destroy convencao do laravel para delete

Route::get('/dashboard',[EventController::class,'dashboard'])->middleware('auth'); //route for action dashboard with depend auth


