<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminManagePlaylistRequest extends FormRequest
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
          'name' => 'required',
          'description' => 'required',
          'user_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'user_id.required' => 'Please choose user create playlist in below!'
        ];
    }
}
