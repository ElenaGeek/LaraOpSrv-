<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminProfileEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'name' => 'required|string|max:10',
        'email' =>'required|email',
        'password' => 'nullable|string|min:3',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator)
        {
            if(!$this->checkUserPassword())
            {
                $validator->errors()
                ->add('current_password', ('validation.invalid_password'));
            }
        });
    }

    protected function checkUserPassword()
    {
        return \Hash::check(
            $this->post('current_password'),
            \Auth::user()->password);
        );
    }

}
