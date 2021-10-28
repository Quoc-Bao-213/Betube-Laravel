<?php

namespace App\Providers;

use App\Video;
use App\VideoType;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
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
        if(config('app.env') === 'production') {
            URL::forceScheme('https');
        }
        
        View::composer('betube.partials.footer', function ($view) {
            $view->with([
                'categories' => VideoType::all(),
                'latestVideos' => Video::where('percentage', 100)->latest()->take(3)->get()
            ]);
        });
    }
}
