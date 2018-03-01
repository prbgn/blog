<?php

namespace Blog\Http\Middleware;

use Blog\Category;
use Closure;
use Lavary\Menu\Facade as Menu;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $categories = Category::all();
        Menu::make('Menu', function ($menu) use ($categories) {
            $menu->add('Home');
            foreach ($categories as $category) {
                $menu->add($category->title, [
                    'route' => ['category', 'category'=> $category->slug]
                ]);
            }
            $menu->add('About Blog', 'about');
        });
        return $next($request);
    }
}
