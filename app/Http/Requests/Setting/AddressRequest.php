<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'address_en' => 'required|min:5',
            'address_ar' => 'sometimes|nullable|min:5',
            'phone' => ['sometimes', 'nullable', 'regex:/^[0-9]{4,}$/']
        ];
    }
}
