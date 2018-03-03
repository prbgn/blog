<?php

namespace Blog\Http\Controllers;

use Blog\Article;
use Blog\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @param Article $model
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Article $model)
    {
        $articles = $model
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('home', [
            'articles' => $articles
        ]);
    }

    /**
     * @param Category $model
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function category(Category $model, $slug)
    {
        $category = $model
            ->where('slug', $slug)
            ->first();

        if (!$category) {
            abort(404);
        }

        $articles = $category
            ->articles()
            ->paginate(5);

        return view('home', [
            'category' => $category,
            'articles' => $articles
        ]);
    }

    /**
     * @param Article $model
     * @param $category
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function article(Article $model, $category, $slug)
    {
        $article = $model
            ->where('slug', $slug)
            ->first();

        if (!$article) {
            abort(404);
        }

        return view('article', [
            'article' => $article
        ]);
    }
}
