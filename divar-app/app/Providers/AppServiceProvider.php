<?php

namespace App\Providers;

use App\Models\category;
use App\Models\User;
use App\Models\ad;
use Illuminate\Http\Request;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        View::share('categories', category::root()->get());
        // View::share('favs', User::find(Auth::user()->id)->ads()->wherePivot('favorite','favorite')->get());
    }
}
