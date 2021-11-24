<?php

namespace App\Http\Controllers;

use App\Http\Requests\Moderator\CreateModeratorRequest;
use App\Http\Requests\Moderator\UpdateModeratorRequest;
use App\Models\File;
use App\Models\Moderator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ModeratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $moderator = Moderator::with('user')->paginate(15);
        return view('admin.moderator.index', [
            'moderator' => $moderator
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.moderator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateModeratorRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateModeratorRequest $request)
    {
        DB::beginTransaction();
        try {
            if ($_request = $request->validated()) {
                $_user = new User([
                    "name" => $_request["name"],
                    "email" => $_request["email"],
                    "password" => $_request["password"]
                ]);
                $_user->save();

                $moderator = new Moderator([
                    "user_id" => $_user->id,
                    "full_name" => $_request["full_name"],
                    "phone" => $_request["phone"]
                ]);

                $_user->assignRole('moderator');
                $moderator->save();
            };
            DB::commit();
            return back()->with('success', 'Create success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Moderator $moderator
     * @return \Illuminate\Http\Response
     */
    public function show(Moderator $moderator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Moderator $moderator
     * @return View
     */
    public function edit(Moderator $moderator)
    {
        $moderator = $moderator->load('user');
        return view('admin.moderator.edit', [
            'moderator' => $moderator
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateModeratorRequest $request
     * @param \App\Models\Moderator $moderator
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateModeratorRequest $request, Moderator $moderator)
    {
        $requestModerator = $request->all();
        DB::beginTransaction();
        try {
            if ($request->validated()) {
                $user = User::where('id', $moderator->user_id)->first();
                $user->update([
                    'name' => $requestModerator['name'],
                ]);
                $moderator->update([
                    'full_name' => $requestModerator['full_name'],
                    'phone' => $requestModerator['phone'],
                ]);
                if (!empty($request['photo'])) {
                    $file = File::storeFile(
                        $request['photo'],
                        User::class,
                        $user->id,
                    );
                }
                DB::commit();
                return back()->with('success', 'Save success');
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Moderator $moderator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moderator $moderator)
    {
        try {
            if ($moderator->delete()) {
                $user = User::where('id', $moderator->user_id)->first();
                $user->delete();
            }
            return response([
                'message' => 'Delete success!'
            ]);
        } catch (\Exception $exception) {
            return response([
                'message' => 'Cannot delete',
                'detail' => $exception->getMessage()
            ], 400);
        }
    }
}
