<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;


Route::get('/', [WebsiteController::class, 'index']);

Route::get('/about', [WebsiteController::class, 'about'])->name('about');

Route::get('/banner', [WebsiteController::class, 'banner'])->name('banner');

Route::get('/ManufacringFacility', [WebsiteController::class, 'ManufacringFacility'])->name('ManufacringFacility');


Route::get('/industry', [WebsiteController::class, 'industry'])->name('industry');
// Route::get('/product', [WebsiteController::class, 'product'])->name('product');
Route::get('/installation', [WebsiteController::class, 'installation'])->name('installation');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/projectsDetails/{id}', [WebsiteController::class, 'projectsDetails'])->name('projectsDetails');
// Route::get('/product/{id}', [WebsiteController::class, 'productDetails'])->name('product.details');

// category wise products
Route::get('/products/{id}', [WebsiteController::class, 'product']);

