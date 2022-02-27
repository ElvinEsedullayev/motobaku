<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
use Validator;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        
        return view('back.users.index',compact('users'));
    }

    public function store()
    {
        return view('back.users.create');
    }

    public function create(Request $request)
    {
        //return $request->all();
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:3',
            'email'=>'required|email|unique:users',
        ]);
        if($validator->fails()){
            return redirect()->route('admin.user.store')->withErrors($validator)->withInput();
        }
        $data = $request->only(['name','email','usertype']);
        if($request->filled('password')){
            $data['password']=Hash::make($request->post('password'));
        }
        $user = User::create($data);
        /*
        if($request->hasFile('image')){
            Validator::make($request->post(),[
                'image'=>'image|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
            $userimage = $request->file('image');
            $userimage = $request->image;
            $dosyadi=$user->id. '-'. time(). '.'. $userimage->extension();
            if($userimage->isValid()){
                $userimage->move('uploads/users',$dosyadi);
                       UserDetail::updateOrCreate(
                             ['user_id'=>$user->id],
                            ['adress'=>$request->post('adres'),'phone'=>$request->post('phone'),'about'=>$request->post('about'),'birthday'=>$request->post('birthday'),'status'=>$request->post('status'),'specialty'=>$request->post('specialty'),'image'=>$dosyadi]
                        );
            }
        }
        */
        return redirect()->route('admin.user.index')->with('success','İstifadəçi uğurlu şəkildə yaradıldı !');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('back.users.update',compact('user'));
    }


    public function update($id)
    {
        //return request()->all();
        $validator = $this->validate(request(),[
            'name'=>'required|min:5',
            'email'=>'required',
        ]);
      
        $data = request()->only(['name','email','usertype']);
        //$data_detay =request()->only(['about','adress','phone','birthday','specialty','status']);
        if(request()->filled('password')){//eger sifre dolu ise
            $data['password']=Hash::make(request('password'));
        }
        $user = User::where('id',$id)->firstOrFail();
       
        $user->update($data);
        /*
        $user->detail->update($data_detay);
                if(request()->hasFile('image')){
            $validator= $this->validate(request(),[
                'image'=>'image|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
            $userimage = request()->file('image');
            $userimage = request()->image;
            $dosyadi=$user->id. '-'. time(). '.'. $userimage->extension();
            if($userimage->isValid()){
                $userimage->move('uploads/users',$dosyadi);
                
                       UserDetail::updateOrCreate(
                             ['user_id'=>$user->id],
                            ['image'=>$dosyadi]
                        );
            }
        }
        */
        return redirect()->back()->with('success','İstifadəçi məlumatları güncəlləndi !');
    }

     public function delete($id)
    {
        $user= User::find($id);
        //$user->detail()->delete();
        $user->delete();
        return redirect()->route('admin.user.index')->with('success','İstifadəçi uğurlu şəkildə silindi !'); 
    }
}
