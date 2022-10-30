<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateCashierRequest extends FormRequest
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
            'address' => 'required|min:5|max:100',
            'gender' => 'required',
            'subsidiary' => 'required',
        ];
    }
    public function messages()

    {
        return [
            'name.required'     => 'Kolom : nama harus diisi',
            'email.required'    => 'Kolom : email harus diisi',
            'birth.required'    => 'kolom : tanggal lahir harus diisi',
            'phone.required'    => 'kolom : telepon harus diisi',
            'address.required'  => 'Kolom : alamat harus diisi',
            'gender.required' => 'Kolom : gender harus diisi',
            'subsidiary.required' => 'kolom : gender harus diisi',
        ];
    }
}
