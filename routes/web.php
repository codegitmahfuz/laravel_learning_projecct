<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;


Route ::get('/', [HomepageController::class,"index"])->name('home');
Route ::get('/about', [HomepageController::class,"about"])->name('about');
Route ::get('/contact', [HomepageController::class,"contact"])->name('contact');
Route ::get('/portfolio', [HomepageController::class,"portfolio"])->name('portfolio');
