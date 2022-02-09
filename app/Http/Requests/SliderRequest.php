<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'title1'=>'required',
            'title2'=>'required',
            'slogan'=>'required',
            'video'=>'required',
            'description'=>'required',
            'image' =>'mimes:jpg,jpeg,png|max:2048',
            'small_image' =>'mimes:jpg,jpeg,png|max:50',
        ];
    }

      public function attributes()
    {
        return [
            'title1'=>'Başlıq',
            'title2'=> 'Alt Başlıq',
            'slogan'=>'Sloqan',
            'video'=>'Video',
            'description' => 'Açıqlama',
            'image'=>'Şəkil',
            'small_image'=>'Kiçik Şəkil',
        ];
    }
}
