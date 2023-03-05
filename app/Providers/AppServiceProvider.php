<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
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
        $this->loadMenu();
    }

    public function loadMenu(){
        View::composer('layouts.index', function ($view){
                $view->with('menu', Menu::query()->orderBy('sort')->where('sort' ,'<',9)->take(8)->get());
        });
    }
}
