<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('adminJogosultsag', function (User $user) {
            return $user->munkakor === "Admin";
        });

        Gate::define('penztarosJogosultsag', function (User $user) {
            return $user->munkakor === "Pénztáros";
        });
    }
}
