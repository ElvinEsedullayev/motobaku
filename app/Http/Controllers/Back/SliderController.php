<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Http\Requests\SliderRequest;
class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('back.sliders.index',compact('sliders'));
    }

    public function store()
    {
        return view('back.sliders.create');
    }

    public function create(SliderRequest $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen. '.' .$img_ext;
        $up_location = 'uploads/sliders/';
        $img = $up_location.$img_name;
        $image->move($up_location,$img_name);
        

        $image2 = $request->file('small_image');
        $name_gen2 = hexdec(uniqid());
        $img_ext2 = strtolower($image2->getClientOriginalExtension());
        $img_name2 = $name_gen2. '.' .$img_ext2;
        $up_location2 = 'uploads/sliders/small/';
        $img2 = $up_location2.$img_name2;
        $image2->move($up_location2,$img_name2);
        Slider::insert([
            'title1' => $request->title1,
            'title2' => $request->title2,
            'video' => $request->video,
            'slogan' => $request->slogan,
            'image' => $img,
            'small_image' => $img2,
            'description' => $request->description
        ]);
        return redirect()->route('admin.slider.index')->with('success','Slider uğurlu şəkildə yaradıldı !');
    }


    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('back.sliders.update',compact('slider'));
    }

    public function update(SliderRequest $request,$id)
    {
        $old_image = $request->old_image;
        
        $image = $request->file('image');
        if($image){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_gen. '.' .$img_ext;
            $up_location = 'uploads/sliders/';
            $img = $up_location.$img_name;
            $image->move($up_location,$img_name);
            unlink($old_image);

            Slider::find($id)->update([
            'title1' => $request->title1,
            'title2' => $request->title2,
            'video' => $request->video,
            'slogan' => $request->slogan,
            'image' => $img,
            'small_image' => $img2,
            'description' => $request->description
         ]);

         return redirect()->back()->with('success','Slider uğurlu şəkildə güncəlləndi !');
        }else{
            Slider::find($id)->update([
             'title1' => $request->title1,
            'title2' => $request->title2,
            'video' => $request->video,
            'slogan' => $request->slogan,
            'description' => $request->description
         ]);
         return redirect()->back()->with('success','Slider uğurlu şəkildə güncəlləndi !');
        }


         $old_smallimage = $request->old_smallimage;
         $image2 = $request->file('small_image');
         if($image2){
            $image2 = $request->file('small_image');
            $name_gen2 = hexdec(uniqid());
            $img_ext2 = strtolower($image2->getClientOriginalExtension());
            $img_name2 = $name_gen2. '.' .$img_ext2;
            $up_location2 = 'uploads/sliders/small/';
            $img2 = $up_location2.$img_name2;
            $image2->move($up_location2,$img_name2);
            unlink($old_smallimage);
            Slider::find($id)->update([
             'title1' => $request->title1,
            'title2' => $request->title2,
            'video' => $request->video,
            'slogan' => $request->slogan,
            'image' => $img,
            'small_image' => $img2,
            'description' => $request->description
         ]);

         return redirect()->back()->with('success','Slider uğurlu şəkildə güncəlləndi !');
         }else{
             Slider::find($id)->update([
             'title1' => $request->title1,
            'title2' => $request->title2,
            'video' => $request->video,
            'slogan' => $request->slogan,
            'description' => $request->description
         ]);

         return redirect()->back()->with('success','Slider uğurlu şəkildə güncəlləndi !');
         }
         
    }

    public function delete($id)
    {
        $slider = Slider::find($id);
        $old_image = $slider->image;
        $old_smallimage = $slider->small_image;
        unlink($old_image);
        unlink($old_smallimage);
        Slider::find($id)->delete();
        return redirect()->back()->with('success','Slider uğurlu şəkildə silindi !');
    }
}
