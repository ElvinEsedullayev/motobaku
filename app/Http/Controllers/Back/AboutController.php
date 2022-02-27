<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Requests\AboutRequest;
class AboutController extends Controller
{
    
    public function index()
    {
        $about = About::find(2);
        return view('back.about.index',compact('about'));
    }

    public function update(AboutRequest $request,$id)
    {
        $about = About::findOrFail($id);
        $about->title = $request->title;
        $about->foot_title = $request->foot_title;
        $about->description = $request->description;
        if($request->hasFile('image')){
            $imagename = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/about'),$imagename);
            $setting->image='uploads/about/'.$imagename;
        }
        $about->save();
        return redirect()->back('success','Haqqımızda uğurlu şəkildə güncəlləndi !');
    }
}
