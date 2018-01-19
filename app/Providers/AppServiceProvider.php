<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $models = [
            'CinemaHall',
            'Movie',
            'Seat',
            'Seance'
        ];

        foreach ($models as $model) {
            $this->app->bind(
                "App\\Repositories\\{$model}\\Interfaces\\{$model}Interface",
                "App\\Repositories\\{$model}\\Services\\{$model}Service"
            );
        }
    }
}
