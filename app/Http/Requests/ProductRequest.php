<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'small_description'=>'required',
            'description'=>'required',
            'price'=>'required',
            'selling_price'=>'required',
            'qty'=>'required',
            'sku'=>'required',
            'status'=>'required',
            'trending'=>'required',
            'meta_title'=>'required',
            'meta_keyword'=>'required',
            'meta_description'=>'required',
            'image'=>'mimes:jpg,jpeg,png|max:2048',
        ];
    }

     public function attributes()
    {
        return [
            'title'=>'Başlıq',
            'small_description'=> 'Kiçik Açıqlama',
            'description' => 'Açıqlama',
            'price'=>'Qiymət',
            'selling_price'=>'Endirim Qİyməti',
            'qty'=>'Ədəd',
            'sku'=>'Sku',
            'status'=>'Status',
            'trending'=>'Trend',
            'meta_title'=>'Meta Başlıq',
            'meta_keyword'=>'Meta Açar',
            'meta_description'=>'Meta Açıqlama',
            'image'=>'Şəkil'
        ];
    }
}


