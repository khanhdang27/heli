<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Material\CreateMaterialRequest;
use App\Models\CourseMaterial;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;

class CourseMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $courseMaterial = CourseMaterial::query()
            ->with('translations')
            ->latest()
            ->when(request('name') != '', function (Builder $query) {
                $query->whereTranslationLike('material_name', '%' . request('name') . '%');
            })
            ->paginate(20);
        return view('admin.course-material.index', [
            'courseMaterial' => $courseMaterial
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.course-material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateMaterialRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateMaterialRequest $request)
    {
        $material = new CourseMaterial(
            $request->validated()
        );
        $material->material_image = $request->file('material_image')->store('photo');
        $material->material_file = $request->file('material_file')->store('file');
        $material->save();
        return back()->with('success', 'Delete success');
    }

    /**
     * @param CourseMaterial $material
     * @return \Illuminate\Http\Response
     */
    public function show(CourseMaterial $material)
    {
        //
    }

    /**
     * @param CourseMaterial $material
     * @return View
     */
    public function edit(CourseMaterial $material)
    {
        $material->load('translations');
        return view('admin.course-material.edit', [
            'material' => $material
        ]);
    }

    /**
     * @param CreateMaterialRequest $request
     * @param Material $material
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CreateMaterialRequest $request, CourseMaterial $material)
    {
        $material->update(
            $request->validated()
        );
        $material->material_image = $request->file('material_image')->store('photo');
        $material->material_file = $request->file('material_file')->store('file');
        $material->save();
        return back()->with('success', 'Update success!');
    }


    public function destroy(CourseMaterial $material)
    {
        try {
            $material->delete();
            return response([
                'message' => 'Delete success!'
            ]);
        } catch (\Exception $exception) {
            return response([
                'message' => 'Cannot delete course'
            ], 400);
        }
    }
}
