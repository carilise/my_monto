<?php

use Illuminate\Support\Facades\Route;




Route::view('/', 'index')->name('index');
Route::view('/module', 'module')->name('module');
Route::view('/module/exemple', 'sections.module.exemple')->name('module.exemple');

