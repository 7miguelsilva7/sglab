<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Auth;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        Gate::define('edit_escola', function ($user, $escola)

        {  
            return $user->id == $escola->user_id;
        });


        Gate::define('edit_pessoa', function ($user, $pessoa)

        {  
            return $user->id == $pessoa->user_id;
        });
        

        Gate::define('edit_funcionario', function ($user, $funcionario)

        {  
            return $user->id == $funcionario->user_id;
        });
    }

    // public function edit(User $user, Escola $escola)
    // {

    //         return $user->id === $escola->user_id;

    // }
    
}

        

