<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'date' => 'required|date|after:today', // Event date must be in the future
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The event title is required.',
            'date.required' => 'The event date is required.',
            'date.after' => 'The event date must be a future date.',
        ];
    }
}
