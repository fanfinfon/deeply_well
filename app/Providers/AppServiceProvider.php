<?php

namespace App\Providers;

use App\Models\posts;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('edit-post', function (User $user, posts $post) {
            return $post->user->is($user) || $user->user_role == 1;
        });

    }
}
