<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\IndexImg;
use Illuminate\Http\Request;

class IndexImgController extends Controller
{
    public function imageList(){
        $indexImages=IndexImg::all();
        return view('backend.indeximg.index_img', compact('indexImages'));
    }

    public function imagePost(Request $request)
    {
        
        $fileName='';
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
               //generate file name here
                $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('/uploads',$fileName);
            }
        
        
        
        
        
        //dd($request->all());
        IndexImg::create([
            'title' => $request->title,
            'image'=>$fileName,
            'upperImg'=>$request->upperImg,
            'middleImg'=>$request->middleImg,
        ]);

        return redirect()->back();
    }
}
