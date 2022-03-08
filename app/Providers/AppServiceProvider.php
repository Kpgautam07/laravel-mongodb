<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DB;
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
        Schema::defaultStringLength(191);
        $category = DB::table('categories')->where('is_deleted','0')->where('status','1')->orderBy('created_at','DESC')->take(5)->get();
        // echo "<pre>";
        // print_r($category);die;
            View::share('categories', $category);
    }
}
