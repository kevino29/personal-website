<?php

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

// Download routes
Route::get('/download/resume', [App\Http\Controllers\DownloadController::class, 'resume']);

// Info routes
Route::get('/', [App\Http\Controllers\InfoController::class, 'index']);
Route::post('/', [App\Http\Controllers\InfoController::class, 'send']);
Route::get('/contacts', [App\Http\Controllers\InfoController::class, 'contacts']);
Route::get('/resume', [App\Http\Controllers\InfoController::class, 'resume']);
Route::get('/skills', [App\Http\Controllers\InfoController::class, 'skills']);

// Works routes
Route::get('/works', [App\Http\Controllers\WorksController::class, 'index']);
Route::get('/works/work/mp3-player-tagger', [App\Http\Controllers\WorksController::class, 'mp3']);
Route::get('/works/work/flappy-bird-imitation', [App\Http\Controllers\WorksController::class, 'flappy']);
Route::get('/works/work/maze-solver', [App\Http\Controllers\WorksController::class, 'maze']);
Route::get('/works/work/spell-checker', [App\Http\Controllers\WorksController::class, 'spell']);
Route::get('/works/work/personal-website', [App\Http\Controllers\WorksController::class, 'website']);

// Test route
Route::get('/test', function() {
    return view('test');
});

Auth::routes();
