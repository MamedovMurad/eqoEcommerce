<?php
use App\Models\Tercume;

$langs = Tercume::all();


$output = array();


foreach($langs as $lang)
{
    $output[$lang->key]=$lang->translate('ru')->text;

}

return $output;
