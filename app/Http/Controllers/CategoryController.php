<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class CategoryController extends Controller
{

    public function interactive(){
        $subject = Article::whereHas('subject', function ($q) {
            $q->where('CategoryID', 1);
        })->get();

        return view('pages.category')->with('article', $subject)->with('category', 1);
    }

    public function software(){
        $subject = Article::whereHas('subject', function ($q) {
            $q->where('CategoryID', 2);
        })->get();

        return view('pages.category')->with('article', $subject)->with('category', 2);
    }

    public function getArticle($id){
        $article = Article::find($id);

        if($article){
            return view('pages.detail')->with('article', $article);
        }
        else {
            abort(404, 'Article Not Found');
        }
    }
}
