<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('currency', function ( $expression ) {
            return "Rp. <?php echo number_format($expression,0,',','.'); ?>";
        });

        // add 
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');

        Gate::define('isSuperadmin', function ($user) {
            return $user->role == 'superadmin';
        });

        Gate::define('isPaketdua', function ($user) {
            return $user->role == 'paketdua';
        });


    }
}
