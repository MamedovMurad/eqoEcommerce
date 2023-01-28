<?php

namespace App\Services;

class FIle_download
{
public function  download($data){

    if($data->hasFile('file')){

        $imgExtension = $data->file->getClientOriginalExtension();
        $imageName = time() . "-" . uniqid() . '.' . $imgExtension;
        $data->file->move(public_path('uploads'),$imageName);

      return 'uploads/'.$imageName;
    };
  return   false;
}
}
