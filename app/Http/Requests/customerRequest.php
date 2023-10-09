<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class customerRequest extends FormRequest
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
            'name'=> 'required|string|max:255',
             'email'=> 'required|string|max:255',
              'phone'=> 'required|max:255',
            'city'=> 'required|string|max:1024',
                 'nid_no'=> 'nullable|max:1024',
                 'bank_account'=> 'nullable|max:255',
                 'address'=> 'required|string|max:255',
                 'shop_name'=> 'nullable|string|max:255',

        ];
    }
}
