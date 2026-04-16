<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        // Livewire 4 tự auto-discover components theo namespace
        // Không cần đăng ký thủ công
    }
}
