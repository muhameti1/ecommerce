<?php

use App\Livewire\Home;
use App\Livewire\Products;
use App\Livewire\ProductSinglePage;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/products', Products::class);
Route::get('/products/{slug}', ProductSinglePage::class);
