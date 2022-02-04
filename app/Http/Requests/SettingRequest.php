<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'logo'=> 'mimes:jpg,jpeg,png|max:2048',
            'foot_logo'=> 'mimes:jpg,jpeg,png|max:2048',
            'favicon'=> 'mimes:jpg,jpeg,png|max:100'
        ];
    }

    public function attributes()
    {
        return [
            'logo'=>'Logo',
            'foot_logo'=> 'Alt logo',
            'favicon' => 'Favicon'
        ];
    }


}
