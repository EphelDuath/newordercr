<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
        $id = $this->route('id');

        $rules = [
            'email' => 'required|email',
            'phone' => 'required',
            'country_id' => 'required'
        ];

        if ($this->method() === 'POST') {
            $rules['name'] = 'required|unique:suppliers';
        } elseif ($this->method() === 'PATCH') {
            $rules['name'] = 'required|unique:suppliers,name,'.$id.',id';
        }

        return $rules;
    }

    /**
     * Translate fields with user friendly name.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => trans('supplier.name'),
            'email' => trans('supplier.email'),
            'phone' => trans('supplier.phone'),
            'country_id' => trans('supplier.country'),
        ];
    }
}
