<?php
// package_directory/src/CartServiceProvider.php

namespace cartvc\CartService;

use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(CartService::class, function ($app) {
            return new CartService();
        });
    }

    public function boot()
    {
       // Publish configuration file (if applicable)
       $this->publishes([
        __DIR__ . '/../config/cart-service.php' => config_path('cart-service.php'),
    ], 'config');
    }
}
