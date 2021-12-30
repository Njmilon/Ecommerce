<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function list()
    {
//        dd("ok");
        //eager load
        //lazy load

        //$products=Product::with('category')->paginate(5);

        $products=Product::with('category')->orderBy('id','ASC')->get();
        //  dd($products); 
        //$products=Product::all();

        $categories=Category::all();

        return view('backend.product.list',compact('products','categories'));
    }

    public function store(Request $request)
    {
        
        $fileName='';
            if($request->hasFile('product_image'))
            {
                $file=$request->file('product_image');
               //generate file name here
                $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('/uploads',$fileName);
            }
        
        
        
        
        
        //dd($request->all());
        Product::create([
            'categories_id'=>$request->categoryId,
            'name'=>$request->productName,
            'price'=>$request->productPrice,
            'description'=>$request->productDescription,
            'image'=>$fileName,
            'featured'=>$request->featured,
            'recent'=>$request->recent,
        ]);

        return redirect()->back();
    }

    public function ProductEdit($id){
        $productedit = Product::findOrFail($id);
        return view('backend.product.product_edit',compact('productedit'));
    }

    public function ProductUpdate(Request $request,$id){
        

        Product::findOrFail($id)->update([
            
            'name' => $request->product_name,
            'price' => $request->product_price,
            'description' => $request->product_description,
            
    
        ]);
        return Redirect()->route('product.list');
    
       }
    
       public function ProductDelete($id){
    
        Product::findOrFail($id)->delete();
        return redirect()->back()->with('message','Product Deleted successfully.');
    
       }

       
      
   
}
