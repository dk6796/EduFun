<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function home() {
        $newArticle = Article::orderBy('created_at', 'desc')->take(3)->get();
        return view('pages.home')->with('article', $newArticle);
    }
}
