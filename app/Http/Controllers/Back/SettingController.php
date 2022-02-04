<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Requests\SettingRequest;
class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        return view('back.settings.index', compact('setting'));
    }

    public function update(SettingRequest $request,$id)
    {
        $setting =Setting::find($id);
        $setting->title = $request->title;
        $setting->author = $request->author;
        $setting->keyword = $request->keyword;
        $setting->description = $request->description;
        if($request->hasFile('logo')){
            $imagename = time().'.'.$request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('uploads/settings'),$imagename);
            $setting->logo='uploads/settings/'.$imagename;
        }

        if($request->hasFile('foot_logo')){
            $imagename = time().'.'.$request->foot_logo->getClientOriginalExtension();
            $request->foot_logo->move(public_path('uploads/foot_logos'),$imagename);
            $setting->foot_logo='uploads/foot_logos/'.$imagename;
        }

        if($request->hasFile('favicon')){
            $imagename = time().'.'.$request->favicon->getClientOriginalExtension();
            $request->favicon->move(public_path('uploads/favicons'),$imagename);
            $setting->favicon='uploads/favicons/'.$imagename;
        }
        $setting->save();
        return redirect()->back()->with('success','Ayarlar uğurlu şəkildə güncəlləndi !');
    }
}
