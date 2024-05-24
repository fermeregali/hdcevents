<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController; // definir a pasta para usar os controllers


Route::get('/', [EventController::class, 'index']); // route for Action Index
Route::get('/events/create', [EventController::class, 'create']); // route for Action create
Route::get('/contact', [EventController::class, 'contact']); // route for Action contact
Route::post('events',[EventController::class, 'store']) ; // store convercao de laravel

