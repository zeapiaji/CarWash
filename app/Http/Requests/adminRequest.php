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
            'name' => 'required|max:25|min:5|unique:users,name,'.$this->id,
            'email' => 'required|unique:users,email,'.$this->id.'|email:rfc,dns|min:5|max:20',
            'phone' => 'required|unique:users,phone,'.$this->id.'|min:11|max:13',
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
            'name.required' => 'Nama harus diisi!',
            'name.unique' => 'Nama telah digunakan!',
            'name.max' => 'Nama maksimal 25 huruf!',
            'name.min' => 'Nama minimal 5 huruf!',
            'email.required' => 'Email harus diisi!',
            'email.min' => 'Email minimal 5 huruf!',
            'email.max' => 'Email maksimal 20 huruf!',
            'email.unique' => 'Email telah digunakan!',
            'email.email' => 'Format email salah!',
            'phone.required' => 'Telepon harus diisi.',
            'phone.min' => 'Telepon minimal 11 digit.',
            'phone.max' => 'Telepon maksimal 13 digit.',
            'birth.required' => 'Tanggal lahir harus diisi.',
            'gender.required' => 'Gender harus diisi.',
            'address.required' => 'Alamat harus diisi.',
            'password.required' => 'Password harus diisi.',
            'subsidiary.required' => 'Cabang harus diisi.',
        ];
    }
}
