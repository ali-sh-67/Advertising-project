<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

        return [

            'name' => 'bail|required|unique:categorys|',
            'name_en' => 'bail|nullable|unique:categorys|regex:([a-z]*)',
            'parent_id' => 'bail|regex:(^[0-9]*$)|nullable',
            'icon'=> 'bail|nullable'

        ];
    }
}
