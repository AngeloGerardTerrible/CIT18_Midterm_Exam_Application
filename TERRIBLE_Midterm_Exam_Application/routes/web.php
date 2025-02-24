<?php

use Illuminate\Support\Facades\Route;

Route::get('/anime', [ProductController::class, 'index']);

