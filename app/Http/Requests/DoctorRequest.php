<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'RUT' => 'required|string|min:3|max:70',
            'name'=> 'required|string|min:3|max:70',
            'lastname'=> 'required|string|min:3|max:70',
            'email'=> 'string|min:10|max:120',
            'address'=> 'string|min:3|max:70',
            'especialidad'=> 'string|min:3|max:70'
        ];
    }
}
