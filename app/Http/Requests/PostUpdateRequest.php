<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Http\FormRequest;


class PostUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'user' => ['required', 'int', 'max:255'],
            'content' => ['required', 'string', 'max:10000'],
            'category' => ['required', 'int', 'max:255'],
            'imageLink' => ['nullable', 'string', 'max:500'],
        ];
    }

}
