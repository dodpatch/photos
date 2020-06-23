<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Repositories\CategoryRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('admin',function(){
            return auth()->check() && auth()->user()->role === 'admin';

        });

         Blade::if('AdminOrOwner',function($id){
            return auth()->check() && auth()->id() === $id || auth()->user()->admin;
        });

        /**
         * rendre la variable categorie accessible dans toutes les vue
         * share permet de partager les categories avec toutes les vue
         * resolve permet demander au conteneur de créer une classe CategoryRepository pour pouvoir
         * charger la variable avec toutes les categories
        */
        if(request()->server("SCRIPT_NAME") !== 'artisan'){
            view()->share('categories',resolve(CategoryRepository::class)->getAll());
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
