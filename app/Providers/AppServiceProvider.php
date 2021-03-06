<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);

        view()->composer('inc.archives.archives-layer', function ($view) {

            $archives = \App\Post::archives();
            // $tags = \App\Tag::has('posts')->pluck('name');
            
            $view->with(compact('archives'));
    
        });

    }
}
