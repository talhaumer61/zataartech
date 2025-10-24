<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\AdminAboutUsController;
use App\Http\Controllers\admin\AdminContactInfoController;
use App\Http\Controllers\admin\AdminServicesController;
use App\Http\Controllers\admin\AdminSuccessStoriesController;
use App\Http\Controllers\admin\AdminTeamsController;
use App\Http\Controllers\admin\AdminTestimonialsController;
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminContactQueryController;
use App\Http\Controllers\site\AboutUsController;
use App\Http\Controllers\site\SuccessStoriesController;
use App\Http\Controllers\site\ContactUsController;
use App\Http\Controllers\site\HomeController;
use App\Http\Controllers\site\ServicesController;
use App\Http\Middleware\AdminAuth;

// ---------------- SITE ROUTES ---------------- //
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{href}', [ServicesController::class, 'detail'])->name('services.detail');
Route::get('/success-stories', [SuccessStoriesController::class, 'index'])->name('success-stories');
Route::get('/success-stories/{href}', [SuccessStoriesController::class, 'detail'])->name('success-stories.detail');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact');
Route::post('/contact-us/submit', [ContactUsController::class, 'store'])->name('contact.store');


// ---------------- ADMIN AUTH ---------------- //
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// ---------------- ADMIN ROUTES (Protected) ---------------- //
Route::middleware([AdminAuth::class])->group(function () {
    
    // Dashboard
    Route::get('/portal', fn() => view('admin.dashboard'))->name('admin.dashboard');

    // ✅ Services
    Route::get('/portal/services/{action?}/{href?}', [AdminServicesController::class, 'index'])->name('admin.services');
    Route::post('/portal/services/store', [AdminServicesController::class, 'store'])->name('admin.services.store');
    Route::post('/portal/services/update/{id}', [AdminServicesController::class, 'update'])->name('admin.services.update');
    Route::delete('/portal/services/delete/{id}', [AdminServicesController::class, 'destroy'])->name('admin.services.delete');

    // ✅ Success Stories
    Route::get('/portal/success-stories/{action?}/{href?}', [AdminSuccessStoriesController::class, 'index'])->name('admin.success-stories');
    Route::post('/portal/success-stories/store', [AdminSuccessStoriesController::class, 'store'])->name('admin.success-stories.store');
    Route::post('/portal/success-stories/update/{id}', [AdminSuccessStoriesController::class, 'update'])->name('admin.success-stories.update');
    Route::delete('/portal/success-stories/delete/{id}', [AdminSuccessStoriesController::class, 'destroy'])->name('admin.success-stories.delete');

    // ✅ Testimonials
    Route::get('/portal/testimonials/{action?}/{href?}', [AdminTestimonialsController::class, 'index'])->name('admin.testimonials');
    Route::post('/portal/testimonials/store', [AdminTestimonialsController::class, 'store'])->name('admin.testimonials.store');
    Route::post('/portal/testimonials/update/{id}', [AdminTestimonialsController::class, 'update'])->name('admin.testimonials.update');
    Route::delete('/portal/testimonials/delete/{id}', [AdminTestimonialsController::class, 'destroy'])->name('admin.testimonials.delete');

    // ✅ Teams
    Route::get('/portal/teams/{action?}/{href?}', [AdminTeamsController::class, 'index'])->name('admin.teams');
    Route::post('/portal/teams/store', [AdminTeamsController::class, 'store'])->name('admin.teams.store');
    Route::post('/portal/teams/update/{id}', [AdminTeamsController::class, 'update'])->name('admin.teams.update');
    Route::delete('/portal/teams/delete/{id}', [AdminTeamsController::class, 'destroy'])->name('admin.teams.delete');

    // ✅ About Us
    Route::get('/portal/about-us/{action?}/{id?}', [AdminAboutUsController::class, 'index'])->name('admin.aboutus');
    Route::post('/portal/about-us/store', [AdminAboutUsController::class, 'store'])->name('admin.aboutus.store');
    Route::post('/portal/about-us/update/{id}', [AdminAboutUsController::class, 'update'])->name('admin.aboutus.update');
    Route::delete('/portal/about-us/delete/{id}', [AdminAboutUsController::class, 'destroy'])->name('admin.aboutus.delete');

    // ✅ Contact Info
    Route::get('/portal/contact-info/{action?}/{id?}', [AdminContactInfoController::class, 'index'])->name('admin.contactinfo');
    Route::post('/portal/contact-info/store', [AdminContactInfoController::class, 'store'])->name('admin.contactinfo.store');
    Route::post('/portal/contact-info/update/{id}', [AdminContactInfoController::class, 'update'])->name('admin.contactinfo.update');
    Route::delete('/portal/contact-info/delete/{id}', [AdminContactInfoController::class, 'destroy'])->name('admin.contactinfo.delete');

    // ✅ Contact Queries
    Route::get('/portal/contact-queries', [AdminContactQueryController::class, 'index'])->name('contact.queries');
    Route::delete('/portal/contact-queries/{id}', [AdminContactQueryController::class, 'destroy'])->name('contact.queries.delete');
});
