<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;
<<<<<<< HEAD
use Iluminate\Support\Facedes\Gate;
=======
>>>>>>> a0160971ad3349c8e9cfe85bfce350e0b0d283b8

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
<<<<<<< HEAD
        // Passport::routes();
=======
>>>>>>> a0160971ad3349c8e9cfe85bfce350e0b0d283b8
    }
}
