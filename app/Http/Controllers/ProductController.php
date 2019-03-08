<?php 

namespace AppHttpControllers;

use AppProduct;
use IlluminateHttpRequest;

class ProductController extends Controller  {

    public function index(){         
        $products = Product::all();
        return response()->json($products);     
    }     
    
    public function store(Request $request){         
        Product::create($request->all());

        return response()->json(['message' => 'Successfull create new product']);
    }
    
    public function show($id){         
        $product = Product::find($id);

        return response()->json($product);
    }
    
    public function update(Request $request, $id){         
        $product = Product::find($id);         
        $product->update($request->all());         
        
        return response()->json(['message' => 'Successfull update product']);
    }
    
    public function delete($id){
        Product::destroy($id);
        
        return response()->json(['message' => 'Successfull delete product']);     
    } 
} 