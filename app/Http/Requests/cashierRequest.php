<?php

namespace App\Http\Requests;

use App\Models\Subsidiary;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class cashierRequest extends FormRequest
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
            'password' => 'required',
            'phone' => 'required|unique:users,phone|min:10|max:13',
            'birth' => 'required',
            'address' => 'required|min:5|max:100',
            'gender' => 'required',
            'subsidiary' => 'required',
            // 'role' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'     => 'Kolom : nama harus diisi',
            'email.required'    => 'Kolom : email harus diisi',
            'password.required' => 'Kolom : password harus diisi',
            'phone.required'    => 'kolom : telepon harus diisi',
            'birth.required'    => 'kolom : tanggal lahir harus diisi',
            'address.required'  => 'Kolom : alamat harus diisi',
            'gender.required' => 'Kolom : gender harus diisi',
        ];
    }
}
