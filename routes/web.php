<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\mobilsController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(mobilsController::class)->prefix('mobils')->group(function () {
        Route::get('', 'index')->name('mobils');
        Route::get('create', 'create')->name('mobils.create');
        Route::post('store', 'store')->name('mobils.store');
        Route::get('show/{id}', 'show')->name('mobils.show');
        Route::get('edit/{id}', 'edit')->name('mobils.edit');
        Route::put('edit/{id}', 'update')->name('mobils.update');
        Route::delete('destroy/{id}', 'destroy')->name('mobils.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});