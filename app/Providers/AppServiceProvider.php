<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

      View::composer('templates.skeleton', function($view)
      {
        $title_suffix = str_replace('/', ' ', Request::getPathInfo());
        $title_suffix = str_replace('-', ' ', $title_suffix);
        $title_suffix = ucwords($title_suffix);

        if (trim($title_suffix) !== '') {
          $title_suffix =  ' | '. $title_suffix;
        } else {
          $title_suffix = '';
        }
        $view ->with([
          'title'=> env('APP_NAME'),
          'suffix'=> $title_suffix,
        ]);
      });

      View::composer('sections.header', function($view)
      {
        $title_suffix = str_replace('/', ' ', Request::getPathInfo());
        $title_suffix = str_replace('-', ' ', $title_suffix);
        $title_suffix = ucwords($title_suffix);

        if (trim($title_suffix) !== '') {
          $title_suffix =  ' | '. $title_suffix;
        } else {
          $title_suffix = '';
        }
        $view ->with([
          'title'=> env('APP_NAME'),
          'suffix'=> $title_suffix,
        ]);
      });
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
