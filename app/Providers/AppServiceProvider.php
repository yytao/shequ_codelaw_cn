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
        //增加变量共享到模板的加载方法
        view()->composer(
            'index',        //模板名称，*号代表全部
            'App\Http\Controllers\IndexController@layoutData'   //指向的控制器方法
        );
    }
}
