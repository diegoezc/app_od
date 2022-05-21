<?php

namespace App\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class FormRequestApi extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['popup' => true, 'popupType' => 'danger', 'message' => $validator->errors()->all()], 400));
    }//end failedValidation()
}
