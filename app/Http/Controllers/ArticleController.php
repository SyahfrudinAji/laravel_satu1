<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticleController extends Controller
{
    Public function index()
    {
    	$article = Article::orderBy('created_at','desc')->paginate(3);
    	return view('article.index', compact('article'));
    }

    public function insert(Request $request) 
    {
    	$request->validate([
    		'title' => 'required|min:10',
    		'content' => 'required'
    	]);

    	Article::create($request->all());
        return redirect('article');
    }

    public function create()
    {
        return view('article.create');
    }

    public function edit($id)	
    {
        $article = Article::find($id);
        return  view('article.edit', compact('article'));
    }

    public function update(Request $request)
    {
    	$article = Article::find($request->id)->update($request->all());
    	return redirect('article')->with('article', 'Data article berhasil diperbaharui');
    }

    public function hapus($id)
    {
    	Article::find($id)->delete();
    	return redirect('article')->with('article', 'Data article berhasil dihapus');
    }

    public function show($id)
	{
		$article = Article::find($id);
		return view('article.show', compact('article'));
	}
}