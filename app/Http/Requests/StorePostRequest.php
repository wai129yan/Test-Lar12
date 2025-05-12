<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|max:255',
            'content' =>'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add validation for the image field
            'status' => 'required|in:published,draft',
            'user_id' =>'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
