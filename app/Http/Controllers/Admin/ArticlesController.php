<?php

namespace Blog\Http\Controllers\Admin;

use Blog\Article;
use Blog\Category;
use Illuminate\Http\Request;
use Blog\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function compose(Request $request)
    {
        $categories = Category::all()
            ->pluck('title', 'id')
            ->all();

        return view('admin.article.add', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $category = $request->input('category');
        $brief = $request->input('brief');
        $content = $request->input('content');

        if (empty($title) || empty($brief) ||  empty($content)) {
            flash('Please fill out all required fields')->error();
            return redirect()->route('admin.articles.compose')->withInput();
        }

        Article::create([
            'user_id' => Auth::id(),
            'category_id' => $category,
            'slug' => str_slug($title),
            'title' => $title,
            'brief' => $brief,
            'content' => $content
        ]);

        flash('Post has been added')->success();

        return redirect()->route('home');
    }
}
