<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\AccessRight;
use App\Policies\RolePolicy;
use App\Policies\AccessRightPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    // protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    // ];
    protected $policies = [
        Role::class => RolePolicy::class,
        AccessRight::class => AccessRightPolicy::class,
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
