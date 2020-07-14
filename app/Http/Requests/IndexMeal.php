<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class IndexMeal extends FormRequest
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
            'per_page' => 'nullable|integer|min:1',
            'page' => 'nullable|integer|min:1',
            'tags.*' => 'nullable|integer',
            'with.*' => 'nullable|in:ingredients,category,tags',
            'diff_time' => 'nullable|integer|min:1',
            'lang' => 'required|string|min:2|exists:languages,locale'
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */

    //convert comma separated string to array before validation, and remove empty array values
    protected function prepareForValidation()
    {
        $this->merge([
            'with' => !empty($this->with) ? array_filter(explode(',', $this->with)) : [],
            'tags' => !empty($this->tags) ? array_filter(explode(',', $this->tags)) : []
        ]);
    }

    //throw exception if validator fails
    public function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(
            response()->json(['errors' => $errors], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }

}
