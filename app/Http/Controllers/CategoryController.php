<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;

class CategoryController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() 
    {
        $categories = Category::all()->sortByDesc('name');
        return View('categories.index', ['categories' => $categories ]);
    }


    public function create()
    {
        return View('categories.create');
    }


    public function store(Request $request)
    { 
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('categories');
    }

	
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', ['category'=>$category]);        	
    }


    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        return 'Poprawnie dokonano aktualizacji';
    }

	
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return 'Kategoria usunięta';  
    }

}
