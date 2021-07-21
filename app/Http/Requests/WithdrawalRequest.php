<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WithdrawalRequest extends FormRequest
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
            'account_name' => 'required',
            'account_number' => 'required',
            'bank_name' => 'required',
            'bank_address' => 'required',
            'amount' => 'required',
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
            'account_name.required' => 'Account name is required',
            'account_number.required' => 'Account number is required',
            'bank_name.required' => 'Bank name is required',
            'bank_address.required' => 'Bank address is required',
            'amount.required' => 'Amount is required',
        ];
    }
}
