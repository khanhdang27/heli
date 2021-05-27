<?php

namespace App\Providers;

use App\Models\Material;
use App\Models\Tutor;
use App\Policies\MaterialPolicy;
use App\Policies\TutorPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Material::class => MaterialPolicy::class,
        Tutor::class => TutorPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
