<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/admin', function () {
    return 'admin page';
})->name('dashboard');