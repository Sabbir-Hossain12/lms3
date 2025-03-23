<?php

namespace App\Providers;

use App\Models\Basicinfo;
use App\Models\Blog;
use App\Models\CourseClass;
use App\Models\Page;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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

        View()->composer('*', function ($view)
        {
            $pages = Page::where('status',1)->get();
            $basicInfo = BasicInfo::first();
            $view->with(['basicInfo'=> $basicInfo,'pages'=> $pages]);
        });

        View()->composer('frontend.includes.footer', function ($view)
        {
            $classes = CourseClass::where('status',1)->where('is_featured',1)->limit(5)->get();
            $blogs= Blog::where('status',1)->limit(3)->latest()->get();
            $view->with(['classes'=> $classes,'blogs'=> $blogs]);

        });

        View()->composer('frontend.includes.header', function ($view)
        {
            $classes = CourseClass::where('status',1)->limit(3)->with('courses')->get();

            $view->with(['classes'=> $classes]);

        });

    }
}
