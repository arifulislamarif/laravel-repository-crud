<?php

namespace App\Repositories;

use App\Repositories\Doctor\DoctorInterface;
use App\Repositories\Doctor\DoctorRepositories;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind(
            'App\Repositories\StudentInterface',
            'App\Repositories\StudentRepositories',
        );

        $this->app->bind(DoctorInterface::class, DoctorRepositories::class);
    }
}
