<?php
namespace App\Utilities;

class SelectionByClass{

    /**
     * Handle Upload File
     * @param ClassName $className 
     * @param  Str $colume name of field to show
     * @param Integer $key id 
     * @return Set $options
     */
    public static function getValues($className, $colume, $key)
    {
        $optionData = $className::all();
        $options = $optionData->pluck($colume, $key)->toArray();
        return $options;
    }
}

?>