<?php

namespace Suizide\Contact\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
              'required',
              'string',
              'max:255'
            ],
            'email' => [
              'required',
              'string',
              'email',
              'max:255'
            ],
            'message' => [
              'required',
              'string'
            ],
            '_answer' => [
              'required'
            ],
        ];
    }
}
