<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('dashboard');