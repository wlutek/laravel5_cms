<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;

class ArticleController extends Controller
{
  
    public function index() 
    {
        $articles = Article::all()->sortByDesc('created_at');
        return View('articles.index', ['articles' => $articles ]);
    }
    
    
    public function store(Request $request)
    { 
        $article = new Article();
        $article->title = $request->title;
        $article->shortDesc = $request->shortDesc;
        $article->fullDesc = $request->fullDesc;
        $article->category_id = $request->category_id;
        $article->save();
        return redirect('articles');
    }
    
    
    public function create()
    {
	return View('articles.create');
    }
    
    
    public function edit($id)
    {
	$article = Article::findOrFail($id);
	return view('articles.edit', ['article'=>$article]);        	
    }
    
    
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->shortDesc = $request->shortDesc;
        $article->fullDesc = $request->fullDesc;
        $article->save();
        return redirect('articles')->with('status', 'Poprawnie dokonano aktualizacji!');
    }
    
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('articles')->with('status', 'Artykuł usunięty!');
    }
    
}
