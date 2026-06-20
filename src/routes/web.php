<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('profile');
Route::view('/works', 'works')->name('works');
