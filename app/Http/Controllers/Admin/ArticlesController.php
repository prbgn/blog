<?php

namespace Blog\Http\Controllers\Admin;

use Blog\Article;
use Blog\Category;
use Illuminate\Http\Request;
use Blog\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * @param Request $request
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function compose(Request $request, Article $article)
    {
        $categories = Category::all();

        $request
            ->session()
            ->flashInput($article->toArray());

        return view('admin.article.add', [
            'categories' => $categories
        ]);
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $category = $request->input('category_id');
        $brief = $request->input('brief');
        $content = $request->input('content');

        $id = $request->input('id');

        if (empty($title) || empty($brief) ||  empty($content)) {
            flash('Please fill out all required fields')->error();
            return redirect()->back()->withInput();
        }

        Article::updateOrCreate([
            'id' => $id
        ],[
            'user_id' => Auth::id(),
            'category_id' => $category,
            'slug' => str_slug($title),
            'title' => $title,
            'brief' => $brief,
            'content' => $content
        ]);

        flash('Post has been saved')->success();

        return redirect()->route('home');
    }

    /**
     * @param Article $article
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Article $article)
    {
        $article->delete();

        flash('Post has been deleted') ->success();
        return redirect()->back();
    }
}
