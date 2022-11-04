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
            'name' => 'required|max:25|min:5|unique:users,name,'.$this->id,
            'email' => 'required|unique:users,email,'.$this->id.'|email:rfc,dns|min:5|max:20',
            'phone' => 'required|unique:users,phone,'.$this->id.'|min:11|max:13',
            'birth' => 'required',
            'gender' => 'required',
            'address' => 'required|min:5|max:100',
            'car' => 'required|min:5|max:20',
            'type' => 'required',
            'number_plate' => 'required|min:4|max:10',
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
            'phone.required' => 'Telepon harus diisi!',
            'phone.unique' => 'Nomor telepon sudah digunakan!',
            'phone.min' => 'Telepon minimal 11 digit!',
            'phone.max' => 'Telepon maksimal 13 digit!',
            'birth.required' => 'Tanggal lahir harus diisi!',
            'gender.required' => 'Gender harus diisi!',
            'address.required' => 'Alamat harus diisi!',
            'car.required' => 'Nama kendaraan harus diisi!',
            'car.min' => 'Nama kendaraan minimal 5 huruf!',
            'car.max' => 'Nama kendaraan maksimal 20 huruf!',
            'type.required' => 'Tipe kendaraan harus dipilih!',
            'number_plate.required' => 'Nomor plat harus diisi!',
            'number_plate.min' => 'Nomor minimal 4 karakter(Terdiri dari angka dan huruf)!',
            'number_plate.max' => 'Nomor plat maksimal 10 karakter(Terdiri dari angka dan huruf)!',
        ];
    }
}
