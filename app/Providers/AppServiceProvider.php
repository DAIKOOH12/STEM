<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Composers\HeaderComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Đăng ký HeaderComposer cho view header
        View::composer('layout.header', HeaderComposer::class);
    }
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
