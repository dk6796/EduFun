<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;
use App\Models\Article;

class WritersController extends Controller
{
    public function writer(){
        $writerList = Writer::all();
        $allArticle = Article::all();
        return view('pages.writers')->with('writers', $writerList)->with('articles', $allArticle);
    }
}
