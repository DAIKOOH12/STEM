<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Composers\HeaderComposer;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Đăng ký HeaderComposer cho view header
        View::composer('layout.header', HeaderComposer::class);
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
