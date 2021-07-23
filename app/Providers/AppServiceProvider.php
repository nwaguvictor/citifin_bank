<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Set global variables
        Config::set('minimum_withdrawal', 100);
        Config::set('minimum_deposit', 100);

        $data['users'] = \App\Models\User::all();
        $data['transactions'] = \App\Models\Transaction::all();
        view()->share($data);
    }
}
