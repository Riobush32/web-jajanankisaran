<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/details', [DetailItemController::class,'index'])->name('details');
