<?php

namespace App\Providers;

//use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'AppOdontologia\Model' => 'AppOdontologia\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('admin', function($user){
            return $user->permissao_usuario == 'admin';
        });


        $gate->define('usuario', function($user){
            return $user->permissao_usuario == 'usuario';
        });


        // $gate->define('admin', function($user){
        //     return $user->permissao_usuario == 'admin';
        // });
    }
}
