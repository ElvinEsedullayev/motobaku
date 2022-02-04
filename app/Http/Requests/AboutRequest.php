<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'foot_title'=>'required',
            'description'=>'required',
            'image' =>'mimes:jpg,jpeg,png|max:2048',
        ];
    }

     public function attributes()
    {
        return [
            'title'=>'Başlıq',
            'foot_title'=> 'Alt Başlıq',
            'description' => 'Açıqlama',
            'image'=>'Şəkil'
        ];
    }
}
