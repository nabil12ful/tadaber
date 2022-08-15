<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Query\Builder;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Builder::macro('search', function($string){
        //     return $string ? $this->join('country', 'country.id', '=', 'worker.nationality')
        //                             ->select('country.name As nation', 'worker.*')
        //                             ->where('worker.name', 'like', '%'.$string.'%')
        //                             // ->orWhere('worker.id', 'like', '%'.$string.'%')
        //                             : $this;
        // });
    }
}
