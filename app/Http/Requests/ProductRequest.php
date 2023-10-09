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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|string',
            'title'=>'required|string',
            'mtitle'=>'required|string',
            'description'=>'required|string',
            'mdescription'=>'required|string',

            'model'=>'required|string',
            'brand'=>'required|string',

            'category'=>'required|string',
            'slug'=>'required|string',
            'image'=>'nullable|string',
            'discount'=>'required|string',
        ];
    }
}
