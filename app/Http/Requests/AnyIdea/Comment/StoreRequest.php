<?php

namespace App\Http\Requests\AnyIdea\Comment;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'message' => 'required | string'
        ];
    }
}
