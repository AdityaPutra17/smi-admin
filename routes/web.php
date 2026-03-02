<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});


Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function (){
    
    Route::get('/test', function () {
        return view('test');
    })->name('test');
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // buat file ini nanti
    })->name('dashboard');

    Route::resource('hr', EmployeeController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('submenus', SubmenuController::class);
});