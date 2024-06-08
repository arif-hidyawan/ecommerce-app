<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CartService;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CartService::class, function ($app) {
            return new CartService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.app', function ($view) {
            $cartService = app(CartService::class);
            $cartItemCount = $cartService->getCartItemCount();
            $view->with('cartItemCount', $cartItemCount);
        });
    }
}
