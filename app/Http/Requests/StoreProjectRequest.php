<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|unique:projects,title|min:10|max:100',
            'image' => 'nullable|image|max:500',
            'content' => 'required',
            'slug' => 'unique:projects,slug',
            'content' => 'required',
            'thumb' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Inserisci il titolo!',
            'title.unique' => "Il titolo dev'essere unico!",
            'image.max' => "L'immagine può avere massimo 500kb!",
            'title.min' => "Il titolo deve avere minimo :min caratteri!",
            'title.max' => "Il titolo deve avere massimo :max caratteri!",
            'content.required' => 'Inserisci il Contenuto!',
            'thumb.required' => "Inserisci un'immagine!",
        ];
    }
}
