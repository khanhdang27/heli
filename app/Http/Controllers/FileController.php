<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{

    private static $MEGA_BITE = 1000000;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $type = $request->query('type');
        $file_type = File::$UNDEFINED;
        $image = $request->file('file');
        $fileInfo = $image->getClientOriginalName();
        $path = Storage::put($type, $image);
        try {
            switch ($type) {
                case 'avatar':
                    $file_type = File::$AVATAR;
                    break;
                
                default:
                    $file_type = File::$UNDEFINED;
            }
            $file = new File(['referer'=> $request->query('ref'), 'source'=>$path, 'file_type'=>$file_type, 'raw_name'=> $fileInfo, 'file_size'=> $image->getSize()/self::$MEGA_BITE, 'uploaded_by'=>Auth()->id(), 'status'=> 1]);
            $file->save();
            return $file->id;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param File $file
     * @return Response
     */
    public function show(File $file)
    {
        $url = Storage::url($file->source);
        
        return response()->file($url);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param File $file
     * @return Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param File $file
     * @return Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param File $file
     * @return Response
     */
    public function destroy(File $file)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function dowload(File $file)
    {
        $url = Storage::url($file->source);
        return Storage::download($file->source, $file->raw_name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function findFileBy($referer)
    {
        $files = File::where('referer',$referer);

        return $files;
    }
}
