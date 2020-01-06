<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//models
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        
        $data = [
            'articles' => $articles
        ];

        return view('articles', $data);
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();
        
        $data = [
            'article' => $article
        ];

        return view('article-detail', $data);
    }
}
