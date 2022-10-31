<?php

namespace App\Http\Requests;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;


class memberRequest extends FormRequest
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
            'phone' => 'required|unique:users, phone|min:10|max:12',
            'birth' => 'required',
            'address' => 'required|min:5|max:100',
            'gender' => 'required',

            'car' => 'required',
            'type' => 'required',
            'number_plate' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nama harus di isi.',
            'email.required' => 'The :attribute field is required.',
            'phone.required' => 'The :attribute field is required.',
            'birth.required' => 'The :attribute field is required.',
            'address.required' => 'The :attribute field is required.',
            'gender.required' => 'The :attribute field is required.',

        ];
    }
}
