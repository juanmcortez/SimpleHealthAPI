<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\V1\Common\Phone;
use App\Models\V1\Common\Social;
use App\Models\V1\Common\Address;
use App\Models\V1\Common\Persona;
use App\Models\V1\Common\Employer;
use App\Models\V1\Common\Guarantor;
use App\Models\V1\Patients\Patient;
use App\Models\V1\Common\PersonaExtra;
use App\Policies\V1\Common\PhonePolicy;
use App\Policies\V1\Common\SocialPolicy;
use App\Policies\V1\Common\AddressPolicy;
use App\Policies\V1\Common\PersonaPolicy;
use App\Policies\V1\Common\EmployerPolicy;
use App\Policies\V1\Common\GuarantorPolicy;
use App\Policies\V1\Patients\PatientPolicy;
use App\Policies\V1\Common\PersonaExtraPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Patient::class              => PatientPolicy::class,
        Persona::class              => PersonaPolicy::class,
        PersonaExtra::class         => PersonaExtraPolicy::class,
        Address::class              => AddressPolicy::class,
        Phone::class                => PhonePolicy::class,
        Social::class               => SocialPolicy::class,
        Guarantor::class            => GuarantorPolicy::class,
        Employer::class             => EmployerPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
