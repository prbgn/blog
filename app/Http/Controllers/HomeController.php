<?php

namespace Blog\Http\Controllers;

use Blog\Article;
use Blog\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->paginate(5);

        return view('home', [
            'articles' => $articles
        ]);
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();

        if (!$category) {
            abort(404);
        }

        $articles = $category->articles()->paginate(5);

        return view('home', [
            'category' => $category,
            'articles' => $articles
        ]);
    }

    public function article($category, $slug)
    {
        $article = Article::where('slug', $slug)->first();

        if (!$article) {
            abort(404);
        }

        return view('article', [
            'article' => $article
        ]);
    }
}
