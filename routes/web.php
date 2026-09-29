<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('home');


// Route::livewire(['/dashboard', 'pages::dashboard'])->name('dashboard');
Route::livewire('/dashboard', 'pages::dashboard')->name('dashboard');
