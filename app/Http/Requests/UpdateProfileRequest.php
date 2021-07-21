<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'ssn' => 'required|numeric',
            'phone' => 'required',
            'dob' => 'required|date',
            'id_front' => 'required|file|max:10000|mimes:jpeg,jpg,png,pdf',
            'id_back' => 'required|file|max:10000|mimes:jpeg,jpg,png,pdf',
            'passport' => 'required|file|max:10000|mimes:jpeg,jpg,png,pdf'
        ];
    }

    /**
     * Validation messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'ssn.required' => 'SSN is required',
            'ssn.numeric' => 'Valid SSN must be numeric',
            'phone.required' => 'Phone number is required',
            'dob.required' => 'Date of birth is required',
            'dob.date' => 'Date of birth must be a valid date',
            'id_front.required' => 'Document front view is required',
            'id_front.mimetypes' => 'Document must be in formats: jpeg,jpg,png or pdf',
            'id_back.required' => 'Document back view is required',
            'id_back.mimetypes' => 'Document must be in formats: jpeg,jpg,png or pdf',
            'passport.required' => 'Passport is required',
            'passport.mimetypes' => 'Passport must be in formats: jpeg,jpg,png or pdf',
        ];
    }
}
