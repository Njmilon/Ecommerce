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
}
