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
            'phone' => 'required|unique:users,phone|min:11|max:12',
            'birth' => 'required',
            'address' => 'required|min:8|max:100',
            'gender' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'     => 'Nama harus diisi!',
            'email.required'    => 'Email harus diisi!',
            'phone.required'    => 'Telepon harus diisi!',
            'phone.min'    => 'Telepon minimal 11 digit!',
            'phone.max'    => 'Telepon maksimal 12 digit!',
            'birth.required'    => 'Tanggal lahir harus diisi!',
            'address.required'  => 'Alamat harus diisi!',
            'address.min'  => 'Alamat minimal 8 huruf!',
            'address.max'  => 'Alamat maksimal 100 huruf!',
            'gender.required' => 'Gender harus diisi!',
            'email.unique' => 'Email sudah dipakai!',
        ];
    }
}
