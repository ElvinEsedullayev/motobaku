<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('back.sliders.index',compact('sliders'));
    }
}
