<?php

use App\Http\Controllers\site\AboutUsController;
use App\Http\Controllers\site\CaseStudiesController;
use App\Http\Controllers\site\ContactUsController;
use App\Http\Controllers\site\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
});
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{href}', [ServicesController::class, 'detail'])->name('services.detail');

Route::get('/case-studies', [CaseStudiesController::class, 'index'])->name('case-studies');
Route::get('/case-studies/{href}', [CaseStudiesController::class, 'detail'])->name('case-studies.detail');

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact');

