<?php

namespace Blog\Http\Controllers\Admin;

use Blog\Category;
use Blog\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories', [
            'categories' => $categories
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if (!empty($title = $request->input('title'))) {
            if (Category::where('title', $title)->exists()) {
                flash('Category "'.$title.'" already exists')->error();
            } else {
                Category::create(['title' => $title, 'slug' => str_slug($title)]);
                flash('Category "'.$title.'" has been created')->success();
            }
        }

        return redirect()->route('admin.categories');
    }

    /**
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Category $category)
    {
        flash('Category "'.$category->title.'" has been removed')->warning();
        $category->delete();
        return redirect()->route('admin.categories');
    }
}
