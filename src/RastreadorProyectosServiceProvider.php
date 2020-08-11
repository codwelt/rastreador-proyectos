<?php


namespace Codwelt\RastreadorProyectos;

use Illuminate\Support\ServiceProvider;

/**
 * Class RastreadorPackagesServiceProvider
 * @package Codwelt\RastreadorPackages
 * @author Juan Diaz <iam@furiosojack.com>
 */
class RastreadorProyectosServiceProvider extends ServiceProvider
{


    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadRoutesFrom(__DIR__."/routes/api.php");
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function register()
    {

    }
}