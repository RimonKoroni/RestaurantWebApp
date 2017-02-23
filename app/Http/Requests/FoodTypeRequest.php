<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FoodTypeRequest extends Request
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
            'arabicName' => 'bail|required|min:2',
            'englishName' => 'bail|required|min:2',
            'turkishName' => 'bail|required|min:2',
            'foodTypeImage' => 'bail|image|mimes:jpeg,png,jpg,JPG|max:2048'
        ];
    }


    public function forbiddenResponse()
    {
        return response()->view('errors.503'); 
    }
}
