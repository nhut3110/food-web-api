<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string',
            'image' => 'required|string',
            'unit_price' => 'required|string',
            'promotion_price' => 'nullable',
            'description' => 'nullable',
            'type_id' => 'required|numeric',
        ];
    }

    public function messages() {
        return [
            'name.required'=>'please input product name',
            'name.string'=>'please input right name',
            'image.required'=>'please input product image url',
            'unit_price.required'=>'please input product price',
            'unit_price.numeric'=>'please input price as a number',
            'promotion_price.numeric'=>'please input promotion price as a number',
            'type_id.required'=>'please input product catogory id',
            'type_id.numeric'=>'please input category as a number',
        ];
    }
}
