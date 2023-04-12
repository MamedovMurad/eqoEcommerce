<?php
use App\Models\Tercume;
$langs = Tercume::all();
 $langs= $langs->translate('en'); /* $langs->load('translations'); */

$output = array();


foreach($langs as $lang)
{
    $output[$lang->key]=$lang->text;

}

return $output;
