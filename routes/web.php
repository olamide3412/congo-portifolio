<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/locale/{lang}',[LocaleController::class, 'setLocale'])->name('locale');
Route::get('/about-us',[HomeController::class, 'about'])->name('about');
Route::get('/contact-us',[HomeController::class, 'contact'])->name('contact');
Route::get('/services',[HomeController::class, 'service'])->name('service');

Route::post('/message-store', [MessageController::class, 'store'])->name('message.store');

Route::middleware(['auth'])->group(function (){

    Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard.users');
    Route::get('/messages', [MessageController::class, 'index'])->name('message.index');
    Route::get('/message/{message}', [MessageController::class, 'show'])->name('message.show');
    Route::delete('/message/{message}', [MessageController::class, 'destroy'])->name('message.destroy');
});


Route::middleware('guest')->group(function (){

    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);

});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('logout');
