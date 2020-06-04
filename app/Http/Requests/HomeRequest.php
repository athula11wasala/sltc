<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest {

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
            'InputUrl.required' => 'The Url is Required.',
            'InputImg.required' => 'The Image is Required.',
            'InputContact.required' => 'The Description is Required.',
        ];
    }

    public function rules() {

        switch ($this->method()) {
            case "POST":

                if ($this->input('HndType') == 'img') {

                    $rules['InputUrl'] = 'required';
                    if (!empty($this->file('InputImg'))) {
                        $rules['InputImg'] = 'mimes:jpeg,bmp,png,jpg|max:2048';
                    }
                    return $rules;
                }

                return [
                    'InputContact' => 'required',
                ];
        }
    }

}
