<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        \App\User::class  => \App\Policies\UserPolicy::class,
        \App\Role::class  => \App\Policies\RolePolicy::class,
        \App\Metric::class  => \App\Policies\MetricPolicy::class,
        \App\Company::class  => \App\Policies\CompanyPolicy::class,
        \App\MetricRoleInstance::class  => \App\Policies\MetricRoleInstancePolicy::class,
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
