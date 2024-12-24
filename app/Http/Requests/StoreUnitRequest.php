<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUnitRequest extends FormRequest
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
            'course_id'=>'required|integer|exists:courses,id',
            'lesson_id'=>'required|integer|exists:lessons,id',
            'semester_id'=>'required|integer|exists:semesters,id',
            'professor_id'=>'required|integer|exists:professors,id',
            'capacity'=>'required|integer|between:5,40',
        ];
    }
}
