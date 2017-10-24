<?php

namespace App\Providers;

use App\Aboutpage;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    	try
		{
			$profile = User::all()->first()->profile;
			view::share('profile', $profile);
		}
		catch (\Exception $e)
		{
			return $e->getMessage();
		}

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
