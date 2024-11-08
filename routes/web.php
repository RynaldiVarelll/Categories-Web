<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::resource('category', CategoryController::class);

Route::get('/', function () {
    return redirect('/category');

    
});
