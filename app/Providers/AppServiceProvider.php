<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Post;
use App\Policies\PostPolicy;
use App\Models\Comentario;
use App\Policies\ComentarioPolicy;
use App\Models\Category;
use Illuminate\Support\Facades\View;

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
        View::composer('layouts/base', function ($view) {
        $view->with('categorias', Category::get());
        });
    }

    protected $policies = [
        Post::class => PostPolicy::class,Comentario::class => ComentarioPolicy::class,
    ];
}
