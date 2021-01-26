<?php

use App\Http\Controllers\AdminArea\AdminControllar;
use App\Http\Controllers\MemberArea\MemberControllar;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin parts routes
Route::get('/admin/dashboard', [AdminControllar::class, 'index'])->name('admin-dashboard');

//member parts routes
Route::get('/member/dashboard', [MemberControllar::class, 'index'])->name('member-dashboard');