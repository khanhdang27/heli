<?php
namespace App\Utilities;

use Ramsey\Uuid\Type\Integer;

class SelectionByClass{

    /**
     * Handle Upload File
     * @param ClassName $className
     * @param  Str $column name of field to show
     * @param Integer $key id
     * @param Integer $sort default is SORT_ASC PHP sort flag [ Option SORT_DESC | SORT_ASC ]
     * @param Integer $sort_by default is $column [ Option ]
     * @return Set $options
     */
    public static function getValues($className, $column, $key, $sort = SORT_ASC, $sort_by = null)
    {
        $_sortData = null;
        $optionData = $className::all();

        if ($sort_by != null) {
            $sort_by = $column;
        }

        if ($sort === SORT_ASC) {
            $_sortData = $optionData->sortBy($sort_by);
        } else {
            $_sortData = $optionData->sortDesc($sort_by);
        }
        $options = $_sortData->pluck($column, $key)->toArray();
        return $options;
    }

}

?>
