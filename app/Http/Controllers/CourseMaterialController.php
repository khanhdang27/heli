<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Material\CreateMaterialRequest;
use App\Http\Requests\Material\UpdateMaterialRequest;
use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\File;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $_user = User::find(Auth::user()->id);
        $courseMaterial = CourseMaterial::query()
            ->with('translations', 'course', 'course.tutor', 'course.tutor.user')
            ->latest()
            ->when(request('name') != '', function (Builder $query) {
                $query->whereTranslationLike('course_material_name', '%' . request('name') . '%');
            })
            ->when($_user->hasRole('tutor'), function (Builder $query) use ($_user)
            {
                $query->whereHas('course.tutor.user', function ($_query) use ($_user)
                {
                    $_query->where('user_id', $_user->id);
                });
            })
            ->paginate(15);
        return view('admin.course-material.index', [
            'courseMaterial' => $courseMaterial,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $course = Course::all();
        return view('admin.course-material.create', [
            'course' => $course
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateMaterialRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateMaterialRequest $request)
    {

        $input = $request->validated();

        DB::beginTransaction();
        try {
            $course_material = CourseMaterial::create([
                'course_id' => $input['course_id'],
                'course_material_name:en' => $input['course_material_name:en'],
                'course_material_name:cn' => $input['course_material_name:cn'],
                'course_material_name:sc' => $input['course_material_name:sc'],
                'course_material_description:en' => $input['course_material_description:en'],
                'course_material_description:cn' => $input['course_material_description:cn'],
                'course_material_description:sc' => $input['course_material_description:sc'],
                'course_material_origin:en' => $input['course_material_origin:en'],
                'course_material_origin:cn' => $input['course_material_origin:cn'],
                'course_material_origin:sc' => $input['course_material_origin:sc'],
            ]);

            if (!empty($input['file'])) {
                $file = File::storeFile($input['file'], CourseMaterial::class, $course_material->id);
            }

            DB::commit();
            return back()->with('success', 'Create success');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            return back()->withErrors( 'Create Fails');
        }
    }

    /**
     * @param CourseMaterial $course_material
     * @return \Illuminate\Http\Response
     */
    public function show(CourseMaterial $course_material)
    {
        //
    }

    /**
     * @param CourseMaterial $course_material
     * @return View
     */
    public function edit(CourseMaterial $course_material)
    {
        $course_material->load('translations');
        return view('admin.course-material.edit', [
            'material' => $course_material
        ]);
    }

    /**
     * @param CreateMaterialRequest $request
     * @param CourseMaterial $course_material
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateMaterialRequest $request, CourseMaterial $course_material)
    {

        $input = $request->validated();

        DB::beginTransaction();
        try {
            $course_material = CourseMaterial::updateOrCreate(
                ['id' => $course_material->id],
                [
                    'course_id' => $input['course_id'],
                    'course_material_name:en' => $input['course_material_name:en'],
                    'course_material_name:cn' => $input['course_material_name:cn'],
                    'course_material_name:sc' => $input['course_material_name:sc'],
                    'course_material_description:en' => $input['course_material_description:en'],
                    'course_material_description:cn' => $input['course_material_description:cn'],
                    'course_material_description:sc' => $input['course_material_description:sc'],
                    'course_material_origin:en' => $input['course_material_origin:en'],
                    'course_material_origin:cn' => $input['course_material_origin:cn'],
                    'course_material_origin:sc' => $input['course_material_origin:sc']
                ]
            );

            if (!empty($input['file'])) {
                $file_old = File::query()
                    ->where('fileable_type', CourseMaterial::class)
                    ->where('fileable_id', $course_material->id)->first();
                $file_old->delete();
                $file = File::storeFile($input['file'], CourseMaterial::class, $course_material->id);
            }

            DB::commit();
            return back()->with('success', 'Update success');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            return back()->withErrors( 'Create Fails');
        }
    }


    public function destroy(CourseMaterial $course_material)
    {
        try {
            $course_material->delete();
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
