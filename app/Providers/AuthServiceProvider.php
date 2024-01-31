<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('isBU', function ($user){
            return $user->role== 0;
        });
        Gate::define('isManager', function ($user){
            return $user->role == 1;
        });
        Gate::define('isLead', function ($user){
            return $user->role == 2;
        });
        Gate::define('isDeveloper', function ($user){
            return $user->role == 3;
        });

    }
}
