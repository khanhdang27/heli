<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    use SoftDeletes;

    public static $AVATAR = 1;
    public static $UNDEFINED = 0;

    private static $MEGA_BITE = 1000000;


    protected $table = 'file';

    public $timestamps = TRUE;

    protected $guarded = [];

    protected $hidden = ['source'];

    public function fileable()
    {
        return $this->morphTo();
    }

    public static function storeFile($file, $relation_table, $relation_id)
    {
        $fileInfo = $file->getClientOriginalName();
        $path = Storage::put('files',$file);
            
        $file = File::create([
            'fileable_id' => $relation_id, 
            'fileable_type'=> $relation_table, 
            'source'=>$path, 
            'raw_name'=> $fileInfo, 
            'file_size'=> $file->getSize()/self::$MEGA_BITE, 
            'uploaded_by'=>Auth()->id(),
        ]);
        return $file->id;
    }
}
