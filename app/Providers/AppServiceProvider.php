<?php

namespace App\Providers;

use App\Models\ContactInfo;
use App\Models\HomePage;
use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share active services globally to all views (e.g. navbar)
        $services = Service::where('status', 1)->orderBy('id')->get();

        // Share first active contact info globally
        $contact = ContactInfo::where('status', 1)
            ->orderBy('id', 'asc')
            ->first();

        
        $home = HomePage::where('status', 1)
            ->latest()
            ->first();

        // Share both globally
        View::share([
            'global_services' => $services,
            'contact_info'  => $contact,
            'home_info'  => $home,
        ]);
    }
}
