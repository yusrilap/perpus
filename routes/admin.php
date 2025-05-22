<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\DataController;


Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::get('/author', [AuthorController::class, 'index'])->name('author.index');

Route::get('/author/data', [DataController::class, 'authors'])->name('author.data');