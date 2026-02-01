<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        if ($this->app->isProduction()) {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }

        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('settings')) {
                $settings = \App\Models\Setting::all();
                foreach ($settings as $setting) {
                    if ($setting->key === 'RECAPTCHA_SITE_KEY') {
                        config(['recaptcha.api_site_key' => $setting->value]);
                    }
                    if ($setting->key === 'RECAPTCHA_SECRET_KEY') {
                        config(['recaptcha.api_secret_key' => $setting->value]);
                    }
                }
            }
        } catch (\Exception $e) {
            // connection might not be ready during migration
        }
    }
}
