<?php

namespace Swapstr\Http\Requests;

use Swapstr\Http\Requests\Request;

class AddItemsRequest extends Request
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
            'title' => 'required|max:40',
            'description' => 'required|max:300',
            'category_id' => 'required'
        ];
    }
}
