<?php

use App\Http\Controllers\AdminArea\AdminController;
use App\Http\Controllers\MemberArea\MemberController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin parts routes
Route::prefix('/admin')->namespace('AdminArea')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/show-user', [AdminController::class, 'showUsers'])->name('admin-show-user');
    Route::get('/add-user', [AdminController::class, 'addUsers'])->name('admin-add-user');
    Route::post('/save-user', [AdminController::class, 'saveUsers'])->name('save-user');
    Route::get('/validate-email', [AdminController::class, 'validateEmail'])->name('validate-email');
    Route::get('/update-user/{id}',[AdminController::class,'updateUser'])->name('update-user');
    Route::post('/update-user-part', [AdminController::class, 'updateUserData'])->name('update-user-part');
    Route::get('/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('delete-user');
 });


//member parts routes
Route::prefix('/member')->namespace('MemberArea')->group(function () {
Route::get('/dashboard', [MemberController::class, 'index'])->name('member-dashboard');
});