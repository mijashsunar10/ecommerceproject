<?php
use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Shop;
use App\Livewire\Pages\Auth\Login;
use App\Livewire\Pages\Auth\Register;


Route::get('/', home::class )->name('home');
Route::get('/shop',shop::class )->name('shop');
Route::get('/login',login::class )->name('login');
Route::get('/register',register::class )->name('register');
