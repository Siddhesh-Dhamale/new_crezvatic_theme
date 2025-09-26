<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogsController;
use App\Http\Controllers\Frontend\CaseStudiesController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\PartnershipController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/services/single', [ServicesController::class, 'singleService']);
Route::get('/blog', [BlogsController::class, 'index']);
Route::get('/blog/single', [BlogsController::class, 'singleBlog']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/case-studies', [PagesController::class, 'index']);
Route::get('/team', [PagesController::class, 'index']);
Route::get('/partnership', [PagesController::class, 'index']);
Route::get('/pricing', [PagesController::class, 'index']);
