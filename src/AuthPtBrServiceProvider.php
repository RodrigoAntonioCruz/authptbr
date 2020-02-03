<?php
namespace Rodrigocruz\AuthPtBr;

use File;
use Illuminate\Support\ServiceProvider;

class AuthPtBrServiceProvider extends ServiceProvider
{
    /**
    * Publishes translation files.
    *
    * @return  void
    */

    public function boot()
    {
        //publica toda a pasta resources
        $this->loadViewsFrom(__DIR__.'/resources', 'resources/');

        $this->publishes([
            __DIR__.'/resources' => base_path('resources/'),
        ],'authptbr');

        //publica toda a pasta routes
        $this->loadViewsFrom(__DIR__.'/routes', 'routes/');

        $this->publishes([
            __DIR__.'/routes' => base_path('routes/'),
        ],'authptbr');

        //publica toda a pasta public
        $this->loadViewsFrom(__DIR__.'/public', 'public/');

        $this->publishes([
            __DIR__.'/public' => base_path('public/'),
        ],'authptbr');

        //publica na pasta config 
        $this->loadViewsFrom(__DIR__.'/config', 'config/');

        $this->publishes([
            __DIR__.'/config' => base_path('config/'),
        ],'authptbr');

        //publica todos os Providers
        $this->loadViewsFrom(__DIR__.'/Providers', 'app/Providers/');

        $this->publishes([
            __DIR__.'/Providers' => base_path('app/Providers/'),
        ],'authptbr');

        //publica todos as Notifications 
        $this->loadViewsFrom(__DIR__.'/Notifications', 'app/Notifications/');

        $this->publishes([
            __DIR__.'/Notifications' => base_path('app/Notifications/'),
        ],'authptbr');

        //Deleta o Model User.php
        File::delete(base_path('app/User.php'));
        
        //publica todos a Model Usuario
        $this->loadViewsFrom(__DIR__.'/Model', 'app/');

        $this->publishes([
            __DIR__.'/Model' => base_path('app/'),
        ],'authptbr');

        //publica todos os Controllers
        $this->loadViewsFrom(__DIR__.'/Controllers', 'app/Http/Controllers/');

        $this->publishes([
            __DIR__.'/Controllers' => base_path('app/Http/Controllers/'),
        ],'authptbr');

        //Deleta a pasta migrations
        //File::deleteDirectory(base_path('database/migrations'));
        
        File::delete(base_path('database/migrations/2014_10_12_000000_create_users_table.php'));
        File::delete(base_path('database/migrations/2014_10_12_100000_create_password_resets_table.php'));
        File::delete(base_path('database/migrations/2019_08_19_000000_create_failed_jobs_table.php'));

        //publica todos as Migrations
        $this->loadViewsFrom(__DIR__.'/migrations', 'database/migrations/');

        $this->publishes([
            __DIR__.'/migrations' => base_path('database/migrations/'),
        ],'authptbr');

        

    }


    //OBSERVAÇÃO O NOME 'authptbr' É DA PASTA ONDE ESTÁ O PACOTE, src composer.json e readme

}

