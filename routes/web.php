<?php
use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Shop;


Route::get('/', home::class )->name('home');
Route::get('/shop',shop::class )->name('shop');
