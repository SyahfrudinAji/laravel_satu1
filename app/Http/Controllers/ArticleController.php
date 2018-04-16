<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticleController extends Controller
{
    Public function index()
    {
    	$article = Article::orderBy('created_at','desc')->get();
    	return view('article.index', compact('article'));
    }
}
