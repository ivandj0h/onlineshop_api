<?php 

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    
    public function index(){
        $categories = Category::all();
        
        return response()->json($categories);
    }
    
    public function store(Request $request){
        Category::create($request->all());
        
        return response()->json(['message' => 'Successfull create new category']);
    }
    
    public function show($id){
        $category = Category::find($id);
        
        return response()->json($category);
    }
    
    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->update($request->all());
        
        return response()->json(['message' => 'Successfull update category']);
    }
    
    public function delete($id){
        Category::destroy($id);
        
        return response()->json(['message' => 'Successfull delete category']);
    }
}