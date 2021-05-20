<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\CreateBannerRequest;
use App\Models\Banner;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $banner = Banner::query()->latest()->get();
        return view('admin.banner.index', [
            'banner' => $banner
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.banner.create');
    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param CreateBannerRequest $request
//     * @return \Illuminate\Http\RedirectResponse
//     */
    /**
     * Store a newly created resource in storage
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $image = $request->file('file');
        $fileInfo = $image->getClientOriginalName();
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
        $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
        $file_name = $filename . '-' . time() . '.' . $extension;
        //$image->move(public_path('photo'),$file_name);

        $image = Storage::put('photo', $image);
        $banner = new Banner();
        $banner->banner_photo = $image;
        $banner->save();
        return back()->with('success', 'Delete success');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Banner $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     *
     * @param \App\Models\Banner $banner
     * @return View
     */
    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', [
            'banner' => $banner
        ]);
    }

    /**
     * @param CreateBannerRequest $request
     * @param \App\Models\Banner $banner
     * @return \Illuminate\Http\RedirectResponse
     */

    public function update(CreateBannerRequest $request, Banner $banner)
    {
        $banner->fill(
            $request->validated()
        );
        $imageDelete = null;
        if ($request->hasFile('banner_photo')) {
            $imageDelete = $banner->banner_photo;
            $banner->banner_photo = $request->file('banner_photo')->store('photo');
        }
        $banner->save();
        if ($imageDelete) {
            Storage::delete($imageDelete);
        }
        return back()->with('success', 'Update success!');
    }

    /**
     * @param \App\Models\Banner $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        try {
            $banner->delete();
            Storage::delete($banner->banner_photo);
            return response([
                'message' => 'Delete success!'
            ]);
        } catch (\Exception $exception) {
            return response([
                'message' => 'Cannot delete',
            ], 400);
        }
    }

}
