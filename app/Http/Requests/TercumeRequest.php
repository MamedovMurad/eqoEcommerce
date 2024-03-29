<?php

namespace App\Http\Requests;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class TercumeRequest extends FormRequest
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
        $return = [];

        $active_langs = Language::get(); 

        foreach ($active_langs as $lang){
      
            $return[] = [
                'text:' . $lang['code'] => ['required'],
           
            ];

     
        }
        $return[] = [
               
            'key' => ['required','max:255'],
          

        ];

        return Arr::collapse($return);
    }
}
