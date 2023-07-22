<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateColorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'value' => ['required', 'string', 'size:7', 'regex:/^#[a-fA-F0-9]{6}$/'],
            'store_id' => ['required', 'uuid', 'exists:stores,id'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'store_id' => $this->storeId,
        ]);
    }
}