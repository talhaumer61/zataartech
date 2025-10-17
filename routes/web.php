<?php

use App\Http\Controllers\site\AboutUsController;
use App\Http\Controllers\site\SuccessStoriesController;
use App\Http\Controllers\site\ContactUsController;
use App\Http\Controllers\site\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
});
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{href}', [ServicesController::class, 'detail'])->name('services.detail');

Route::get('/success-stories', [SuccessStoriesController::class, 'index'])->name('success-stories');
Route::get('/success-stories/{href}', [SuccessStoriesController::class, 'detail'])->name('success-stories.detail');

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact');

