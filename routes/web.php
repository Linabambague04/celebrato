<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\FeedbackController;

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


Route::get('orm',[OrmController::class,'consultas']);
Route::get('/user',[UserController::class,'index']);
Route::get('/service',[ServiceController::class,'index']);
Route::get('/event',[EventController::class,'index']);
Route::get('/notifications', [NotificationController::class, 'index']);
Route::get('/feedbacks', [FeedbackController::class, 'index']);