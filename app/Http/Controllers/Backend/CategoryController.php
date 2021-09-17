<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller 
{
   

    public function CategoryList(){

        $categories = Category::all();
        return view('backend.category.category_list',compact('categories'));
    }

    public function CategoryStore(Request $request){
        // dd($request->all());
        
         Category::create([
             'name' => $request->categoryName,
             'description' => $request->categoryDescription,
         ]);
 
         return Redirect()->back();
         
     }




   public function allProduct($id)
   {
     $products=Product::where('categories_id',$id)->get();
       //$category=Category::with('products')->find($id);//using relationshop
       //dd($products);

       return view('backend.category.product_list',compact('products'));
   }

   public function CategoryEdit($id){
       $catedit = Category::findOrFail($id);
       return view('backend.category.category_edit',compact('catedit'));
   }


   public function CategoryUpdate(Request $request,$id){

    Category::findOrFail($id)->update([
        'name' => $request->category_name,
        'description' => $request->category_description,
        

    ]);
    return Redirect()->route('category.list');

   }

   public function CategoryDelete($id){

    Category::findOrFail($id)->delete();
    return Redirect()->route('category.list');

   }



}
