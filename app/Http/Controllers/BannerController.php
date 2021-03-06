<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\CreateBannerRequest;
use App\Models\Banner;
use App\Models\File;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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

    /**
     * Store a newly created resource in storage
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $input = $request->validate([
            'banner_title' => 'required',
            'file' => 'file|required',
        ]);

        DB::beginTransaction();

        try {
            $old_banner = Banner::all()->first();
            if (!empty($old_banner)) {
                $old_banner->delete();
            }
            $banner = Banner::create([
                'banner_title' => $request->input('banner_title'),
            ]);

            if (!empty($input['file'])) {
                $file = File::storeFile($input['file'], Banner::class, $banner->id);
            }

            DB::commit();
            return back()->with('success', 'Save success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Banner $banner
     * @return View
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
        $input = $request->validate([
            'banner_title' => 'required',
            'file' => 'file',
        ]);

        DB::beginTransaction();

        try {

            $banner->update([
                'banner_title' => $request->input('banner_title'),
            ]);

            if (!empty($input['file'])) {
                $banner->image->delete();
                $file = File::storeFile($input['file'], Banner::class, $banner->id);
            }

            DB::commit();
            return redirect()->route('admin.banner.index')->with('success', 'Save success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors($th->getMessage());
        }
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
            ], 200);
        } catch (\Exception $exception) {
            return response([
                'message' => 'Cannot delete',
            ], 400);
        }
    }
}
