<?php

namespace App\Providers;

use App\Models\RoleUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
        Paginator::defaultView(view:'pagination::tailwind');

        Gate::define('admin' , function(User $user){
            return $user->role_id === 1;
        });

        // Gate::define('pegawai' , function(User $user){
        //     return $user->role_id === 3;
        // });

    }
}
