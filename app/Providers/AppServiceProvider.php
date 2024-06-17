<?php

namespace App\Providers;

use Illuminate\Support\HtmlString;
use Illuminate\Support\ServiceProvider;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FilamentFabricator::pushMeta([
            new HtmlString('<link rel="manifest" href="/site.webmanifest" />'),
        ]);

        FilamentFabricator::registerScripts([
            asset('assets/js/jquery-3.6.0.min.js'),
            asset('assets/js/bootstrap.min.js'),
            asset('assets/js/appear.min.js'),
            asset('assets/js/slick.min.js'),
            asset('assets/js/jquery.magnific-popup.min.js'),
            asset('assets/js/jquery.nice-select.min.js'),
            asset('assets/js/imagesloaded.pkgd.min.js'),
            asset('assets/js/circle-progress.min.js'),
            asset('assets/js/isotope.pkgd.min.js'),
            asset('assets/js/wow.min.js'),
            asset('assets/js/script.js'),
        ]);

        FilamentFabricator::registerStyles([
            'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap',
            asset('assets/css/flaticon.min.css'),
            asset('assets/css/fontawesome-5.14.0.min.css'),
            asset('assets/css/bootstrap.min.css'),
            asset('assets/css/magnific-popup.min.css'),
            asset('assets/css/nice-select.min.css'),
            asset('assets/css/animate.min.css'),
            asset('assets/css/slick.min.css'),
            asset('assets/css/style.css'),
        ]);


        FilamentFabricator::favicon(asset('assets/images/favicon.png'));

    }
}
