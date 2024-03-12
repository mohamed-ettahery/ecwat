<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::share([
            'site_name' => 'Ecwat',
            'site_fb' => '#',
            'site_linkedin' => '#',
            'site_twitter' => '#',
            'site_instagram' => '#',
            'site_youtube' => '#',
            'site_link' => '',
            'site_mail' => ["contact@ecwat.com", "abidjan@ecwat.com"],
            'site_phone' => ["+212 5 23 30 83 29", "+225 (0) 7 57 77 55 94"],
            'site_address' => ["Lot 282 , 3éme étage , zone ind. Sud-Quest ,28 800 Mohammedia.
            ", "Abidjan - Cocody ,II Plateaux
            Cité Emeraude 2A,Villa 48 - Côte d'Ivoir"],
        ]);
    }
}
