<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/details', [DetailItemController::class,'index'])->name('details');

Route::get('/profile/info', function () {
    return view('pages.profile.profile-info');
});