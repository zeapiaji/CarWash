<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminRequest extends FormRequest
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
            'password' => 'required',
            'subsidiary' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Kolom : Nama wajib diisi.',
            'email.required' => 'Kolom : Email wajib diisi.',
            'phone.required' => 'Kolom : Telepon wajib diisi.',
            'birth.required' => 'Kolom : Tanggal lahir wajib diisi.',
            'gender.required' => 'Kolom : Gender wajib diisi.',
            'address.required' => 'Kolom : Alamat wajib diisi.',
            'password.required' => 'Kolom : Password wajib diisi.',
            'subsidiary.required' => 'Kolom : Cabang wajib diisi.',


            // 'custom' => [
            //     'name' => [
            //         'required' => 'We need to know your email address!',
            //         'max' => 'Your email address is too long!'
            //     ],
            // ],

        ];
    }
}
