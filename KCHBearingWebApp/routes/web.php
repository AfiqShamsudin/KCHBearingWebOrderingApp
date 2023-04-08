<?php

use Illuminate\Support\Facades\Route;

///Me put this below 26/03/2023

use App\HTTP\Controllers\AdminController;
use App\HTTP\Controllers\UserController;
use App\HTTP\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/userdashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('user.dashboard');
// Route::get('/admindashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');

Route::get('/', function () {
    return view('welcome');
});

    Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth']], function(){
    Route::get('dashboard', [AdminController::class,'index'])->name ('admin.dashboard');
    Route::get('profile', [AdminController::class,'profile'])->name ('admin.profile');
    Route::get('setting', [AdminController::class,'setting'])->name ('admin.setting');

});

    Route::group(['prefix'=>'user','middleware'=>['isUser','auth']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name ('user.dashboard');
    Route::get('profile', [UserController::class,'profile'])->name ('user.profile');
    Route::get('setting', [UserController::class,'setting'])->name ('user.setting');
    // Route::post('updateProfile', [UserController::class,'updateProfile'])->name ('user.updateProfile');
    

});

// Route::post('updateProfile', [App\Http\Controllers\ProfileController::class,'updateProfile'])->name ('update.Profile');