<?php
namespace App\Utilities;

use Ramsey\Uuid\Type\Integer;

class SelectionByClass{

    /**
     * Handle Upload File
     * @param ClassName $className
     * @param  Str $column name of field to show
     * @param Integer $key id
     * @return Set $options
     */
    public static function getValues($className, $column, $key)
    {
        $optionData = $className::all();
        $options = $optionData->pluck($column, $key)->toArray();
        return $options;
    }

//    public static function getValues($className, $column, $key, $conditions=null)
//    {
//        $optionData = $className::query();
//        if(empty($conditions)){
//            $optionData = $optionData->get();
//
//        }
//        else{
//            foreach ($conditions as $key => $val){
//                $optionData = $optionData->where($key, $val);
//            }
//        }
//        $options = $optionData->pluck($column, $key)->toArray();
//
//        return $options;
//    }

}

?>
