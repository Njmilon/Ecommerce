<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function sliderList(){

        $sliders=Slider::all();
        return view('backend.sliders.slider_list',compact('sliders'));
    }

    public function sliderPost(Request $request){

        $fileName='';
            if($request->hasFile('slider_image'))
            {
                $file=$request->file('slider_image');
               //generate file name here
                $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('/uploads',$fileName);
            }
        
        Slider::create([
            'title' => $request->title,
            'button_text' => $request->slider_text,
            'priority' => $request->priority,
            'image'=>$fileName
        ]);
        return redirect()->back();
    }

    
}
