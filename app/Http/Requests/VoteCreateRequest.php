<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoteCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'election' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'election.required' => 'El voto no puede ser en blanco',
        ];
    }
}
