<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

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
          'title'=> env('APP_NAME') . $title_suffix
        ]);
      });
        //
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
