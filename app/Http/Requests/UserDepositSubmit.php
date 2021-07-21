<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserDepositSubmit extends FormRequest
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
            'amount' => 'required',
            'pop' => 'required|file|max:10000|mimes:jpeg,jpg,webp,png,pdf',
        ];
    }

    /**
     * Validation messages
     * @return array
     */
    public function messages()
    {
        return [
            'amount.required' => 'Amount is required',
            'pop.file' => 'Prof of payment must be a valid file type',
            'pop.max' => 'Prof of payment file size too large'
        ];
    }
}
