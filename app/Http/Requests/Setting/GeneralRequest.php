<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class GeneralRequest extends FormRequest
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
            "website_name_en" => 'required|min:3',
            "website_name_ar" => 'required|min:3',
            "email" => 'sometimes|nullable|email',
            "logo_url" => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "motto_en" => 'sometimes|nullable|min:10',
            "motto_ar" => 'sometimes|nullable|min:10',
            "info_en" => 'sometimes|nullable|min:10',
            "info_ar" => 'sometimes|nullable|min:10',
            "default_locale" => 'required|in:ar,en',
            "currency" => 'required|in:EGP,USD',
        ];
    }
}
