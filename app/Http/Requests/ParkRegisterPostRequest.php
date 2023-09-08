<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParkRegisterPostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:128'],
            'address' => ['required','max:65535'],
            'image' => ['image'],
            'play' => ['required', 'numeric'],
        ];
    }
}
