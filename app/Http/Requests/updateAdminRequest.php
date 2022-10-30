<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Request\Rules;

class updateAdminRequest extends FormRequest
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
            'name' => 'required|max:25',
            'email' => 'required|unique:users,email',
            'phone' => 'required|unique:users,phone|min:10|max:13',
            'birth' => 'required',
            'gender' => 'required',
            'address' => 'required|min:5|max:100',
            'subsidiary' => 'required',
        ];
    }
    public function messages()
    {


        return [
            'name.required' => 'Nama harus di isi.',
            'email' => 'The :attribute field is required.',
            'phone' => 'The :attribute field is required.',
            'birth' => 'The :attribute field is required.',
            'gender_id' => 'The :attribute field is required.',
            'address' => 'The :attribute field is required.',
        ];
    }
}
