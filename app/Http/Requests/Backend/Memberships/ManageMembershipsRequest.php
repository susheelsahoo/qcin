<?php

namespace App\Http\Requests\Backend\Memberships;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageMembershipsRequest.
 */
class ManageMembershipsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('view-blog');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
