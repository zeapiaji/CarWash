<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class doorsmeerRequest extends FormRequest
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
            'name' => 'required|min:5|max:30',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Beri nama doorsmeer!',
            'name.min' => 'Beri nama doorsmeer minimal 5 huruf/angka!',
            'name.max' => 'Beri nama doorsmeer maksimal 30 huruf/angka!',
        ];
    }
}
