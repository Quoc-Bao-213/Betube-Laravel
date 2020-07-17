<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'phone' => 'alpha_num|min:10|max:10',
            'image_avatar' => 'image',
            'image_cover' => 'image',
            'old_password' => 'required',
            'new_password' => 'required',
            'retype_password' => 'required|same:new_password'
        ];
    }
}
