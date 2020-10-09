<?php

namespace App\Providers;

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
        //
        $username = 'Duy';
        $menus = [
            'Danh sach',
            'Trang chi'
        ];
        View::share('menus', $menus);
        View::share('username', $username);
    }
}
