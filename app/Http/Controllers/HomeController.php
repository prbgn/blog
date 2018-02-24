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
        $articles = Article::orderBy('id', 'desc')->get();

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

        $articles = $category->articles;

        return view('home', [
            'category' => $category,
            'articles' => $articles
        ]);
    }

    public function article()
    {

    }
}
