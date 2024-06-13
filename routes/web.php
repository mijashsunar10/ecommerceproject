<?php
use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Shop;
use App\Livewire\Pages\Checkout;
use App\Livewire\Pages\Auth\Login;
use App\Livewire\Pages\Auth\Register;
use App\Livewire\Pages\PaymentOption;


// require_once __DIR__ ."/admin.php";

Route::get('/', home::class )->name('home');
Route::get('/shop',shop::class )->name('shop');
Route::get('/checkout',checkout::class )->name('checkout');
Route::get('/login',login::class )->name('login');
Route::get('/register',register::class )->name('register');
Route::get('/PaymentOption',paymentOption::class)->name('payment');
