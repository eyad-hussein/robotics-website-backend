<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'video' => [
                'required',
                'file',
                'max:' . (50 * 1024), // 50 MB in kilobytes
            ],
            'image_id' => 'required|integer|exists:images,id',
            'alt' => 'nullable|string|max:255',
            'description' => 'required|string',
        ];
    }
}
