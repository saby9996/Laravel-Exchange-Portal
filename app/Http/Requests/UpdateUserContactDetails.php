<?php

namespace Swapstr\Http\Requests;

use Swapstr\Http\Requests\Request;

class UpdateUserContactDetails extends Request
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
            'phone' => 'required|integer|digits:10',
            'line1' => 'required',
            'city'  => 'required',
            'region'=> 'required',
            'country'  => 'required',
            'pincode' => 'required|integer|min:6',
        ];
    }
}
