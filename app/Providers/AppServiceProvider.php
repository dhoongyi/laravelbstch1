<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // view()->composer("*",function($view){
        //     $getyear = date("Y");
        //     $gettoday = date("d/M/Y");
        //     $view->with("getyear",$getyear)->with("gettoday",$gettoday);
        // });


        // For all pages
        View::composer("*",function($view){
            $getyear = date("Y");
            $gettoday = date("d/M/Y");
            $view->with("getyear",$getyear)->with("gettoday",$gettoday);
        });

        // Single (single path | single route)
        View::composer("employees/index",function($view){
            $greeting = "Welcome to Laravel AppServiceProvider";
            $view->with("greeting",$greeting);
        });

        // Multiple (Multi path but not all | multi route but not all)
        View::composer(["staffs/home","employees.index"],function($view){
            $thanks = "Thanks For Using AppServiceProvider";
            $view->with("thanks",$thanks);
        });

        // View::share("variable_name","data_value");
        View::share("demo","Do you want our demo version?"); // single line (short hand) with share method

        view()->composer("*",function($view){
            $getyear = date("Y");
            $view->with("year",$getyear);
        });


    }
}
