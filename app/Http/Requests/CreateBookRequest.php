<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Book;

class CreateBookRequest extends FormRequest
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
          'title' => 'required|string|max:100',
        'author' => 'required|string|max:100',
        'genre_id' => 'required|integer',
        'published_year' => 'required|date',
        'condition' => 'required|string|max:50',
        'is_available' => 'required|boolean',
    ];
}

}
