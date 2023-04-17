<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Language;
use Illuminate\Support\Arr;
class ProductRequest extends FormRequest
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
               
              'title:' . $lang['code'] => ['required', 'max:255'],
                'sub_title:' . $lang['code'] => ['required', 'max:255'],
                'description:' . $lang['code'] => ['required'],
                
                 'file_name:' . $lang['code'] .'*'=> [ 'max:255'],
            ];

     
        }

        $return[] = [
             'brend_id'=>['required','max:11'],
            'slug' => ['max:255'],
            'price' => ['required','max:255'],
            'discount' => ['max:255'],
            'stock' => ['required','max:255'],
            'status'=>['max:2'],
            'order'=>['max:11'],
            'thumb_image_1'=>['max:2024'],
            'thumb_image_2'=>['max:2024'],
            'images' => '',
            'images.*' => 'mimes:png,gif,jpg,jpeg', 
            'file.*' => 'nullable', 
          
             'categories' => 'nullable',
            'categories.*' => 'exists:categories,id', 

        ];


        return Arr::collapse($return);
    }
}
