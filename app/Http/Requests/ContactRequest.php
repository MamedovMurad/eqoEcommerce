<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Language;
use Illuminate\Support\Arr;
class ContactRequest extends FormRequest
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
               
                'address:' . $lang['code'] => ['required', 'max:255'],
              
           
            ];

     
        }

        $return[] = [
            'email'=>['required','max:11'],
            'phone' => ['max:255'],
            'map'=>['min:2'],
            'facebook'=>['max:255'],
            'instagram'=>['max:2024']

        ];


        return Arr::collapse($return);
    }
}
