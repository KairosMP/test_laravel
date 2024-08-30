<?php

use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\site\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', [HomeController::class, 'action'])->name('home');

Route::resource('users', UserController::class);
