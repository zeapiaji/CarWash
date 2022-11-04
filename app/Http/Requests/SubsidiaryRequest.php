<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubsidiaryRequest extends FormRequest
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
            'name' => 'required|min:5|max:20|unique:subsidiaries,name,'.$this->id,
            'location' => 'required|min:5|max:50',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama Cabang harus diisi!',
            'name.unique' => 'Nama Cabang telah digunakan!',
            'name.min' => 'Nama Cabang minimal 5 huruf!',
            'name.max' => 'Nama Cabang maksimal 20 huruf!',
            'location.required' => 'Lokasi Cabang harus diisi!',
            'location.min' => 'Lokasi Cabang minimal 5 huruf!',
            'location.max' => 'Lokasi Cabang maksimal 50 huruf!'
        ];
    }
}
