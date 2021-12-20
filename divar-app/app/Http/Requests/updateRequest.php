<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\categoryController;
class updateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
//        /        $category = category::where('user_id', Auth::user()->id)->where('id', $id)->first();
////
////        return [
////            'parent_id' => 'bail|regex:(^[0-9]*$)|nullable|not_in:' . $category->id
////        ];
        ];
    }
}
