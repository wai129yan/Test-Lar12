<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|string|max:255', // Name should be a string and is required
            'email' => 'required|email|unique:users,email', // Email is required and must be unique in the users table
            'password' => 'required|string|min:8', // Password must be at least 8 characters
            'phone' => 'nullable', // Phone is optional, but if present, must be a valid number
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Profile photo is optional, but must be a valid image if provided
            'job' => 'nullable|string|max:255', // Job is optional but must be a string if provided
            'date_of_birth' => 'nullable|date|before:today', // Date of birth is optional but must be a valid date and in the past
            'email_verified_at' => 'nullable|date',
        ];
    }
}
