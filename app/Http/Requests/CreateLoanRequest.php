<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Loan;

class CreateLoanRequest extends FormRequest
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
        'book_id' => 'required|integer|exists:books,id',
        'member_id' => 'required|integer|exists:members,id',
        'borrow_date' => 'required|date',
        'return_date' => 'nullable|date|after_or_equal:borrow_date',
    ];
}

}
