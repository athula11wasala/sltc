<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
{
  /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages() {
        return [
            'name.required' => 'The name is Required.',
            'detail.required' => 'The detail is Required.',
            'price.required' => 'The price is Required.',
        ];
    }

    public function rules() {

        switch ($this->method()) {
            case "POST":

                return [
                    'name' => 'bail|required|max:255',
                    'detail' => 'required|max:255',
                    'price' => 'required|numeric',
                ];
        }
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator) {
        $response = new JsonResponse(['data' => [],
            'meta' => [
                'message' => 'The given data is invalid',
                'errors' => ['name'=>'ss required']
            ]], 422);

        throw new \Illuminate\Validation\ValidationException($validator, $response);
    }

}
