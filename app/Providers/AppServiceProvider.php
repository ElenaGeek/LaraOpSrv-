<?php

namespace App\Providers;

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

        \App::setLocale(session('locale'));

        $menu = [
            [
                'title' => 'Home page',
                'alias' => 'home'
            ],
            [
                'title' => 'Новости',
                'alias' => 'category'
            ],
            [
                'title' => 'Админка новостей',
                'alias' => 'admin::news::index'
            ],
            [
                'title' => 'Админка категорий',
                'alias' => 'admin::categories::index'
            ],
            [
                'title' => 'Профиль',
                'alias' => 'admin::profile::update'
            ],
            [
                'title' => 'Админка пользователей',
                'alias' => 'admin::profile::index'
            ],
            [
                'title' => 'Parser',
                'alias' => 'parser'
            ],
        ];

        \View::share('menu', $menu);
    }
}
