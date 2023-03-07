<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\V1\Patients\Patient'                => 'App\Policies\V1\Patients\PatientPolicy',
        'App\Models\V1\Common\Persona'                  => 'App\Policies\V1\Common\PersonaPolicy',
        'App\Models\V1\Common\Address'                  => 'App\Policies\V1\Common\AddressPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
