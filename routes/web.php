<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

// Route::controller(JobController::class)->group(function(){
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}', 'show');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'delete');
// });

Route::resource('jobs', JobController::class);

// Route::resource('jobs', JobController::class, [
//     'except' => ['edit'] //shows all the routes except edit; php artisan route:list --except-vendor command
//     //'only' => ['index', 'show', 'delete']
// ]);

