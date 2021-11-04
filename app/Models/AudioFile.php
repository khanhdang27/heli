<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class AudioFile extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $fillable = [];
    
    protected $hidden = ['source'];

    public $timestamps = TRUE;
    private static $MEGA_BITE = 1000000;

    public static function storeFile($file)
    {
        $fileInfo = $file->getClientOriginalName();
        $path = Storage::put('audio',$file);
            
        $file = AudioFile::create([
            'audio_code' => dechex(time().''.mt_rand(1000,9999)),
            'source'=>$path, 
            'raw_name'=> $fileInfo, 
            'file_size'=> $file->getSize()/self::$MEGA_BITE, 
        ]);
        return $file->audio_code;
    }
}
