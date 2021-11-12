<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TwitterSearchRequest extends FormRequest
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
            'q' => [
                'required',
            ],
            'max_id' => [
                'nullable',
            ],
            'include_entities' => [
                'nullable',
            ],
            'result_type' => [
                'required',
            ],
        ];
    }

    public function all($keys = null)
    {
        $data = parent::all();
        
        return array_merge(['result_type' => 'mixed','q' => '#metaverse'], $data);
    }
}
