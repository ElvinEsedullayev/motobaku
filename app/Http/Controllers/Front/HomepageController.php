<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
class HomepageController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('front.homepage',compact('sliders'));
    }

    public function about()
    {
        return view('front.about');
    }
}
