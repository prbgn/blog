<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        /**
         * The Search logic here
         */
        return view('search');
    }
}
