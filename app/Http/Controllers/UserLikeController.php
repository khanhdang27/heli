<?php

namespace App\Http\Controllers;

use App\Models\UserLike;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserLikeController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        DB::beginTransaction();
        try {
            $userLike = UserLike::create([
                'user_id' => $input['user_id'],
                'likeable_id' => $input['like_ref_id'],
                'likeable_type' => $input['like_module']
            ]);

            $refer = $input['like_module']::find($userLike->likeable_id);
            $refer->like_no = $refer->like_no + 1;
            $refer->save();
            DB::commit();
            return new JsonResponse([
                'status' => 200,
                'message' => 'succeed'
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return new JsonResponse([
                'status' => 400,
                'message' => $th->getMessage()
            ], 400);
        }
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $modelTable = explode('\\', $input['like_module'])[2];
        $userLike = UserLike::where('user_id', '=', $input['user_id'])
            ->where('likeable_id', '=', $input['like_ref_id'])
            ->where('likeable_type', 'like', '%' . $modelTable . '%')->first();

        DB::beginTransaction();

        try {
            if ($userLike) {
                $userLike->delete();
                $refer = $input['like_module']::find($input['like_ref_id']);
                if ($refer->like_no != 0) {
                    $refer->like_no = $refer->like_no - 1;
                    $refer->save();
                }
            }
            DB::commit();

            return new JsonResponse([
                'status' => 200,
                'message' => 'succeed'
            ]);
        } catch (\Throwable $th) {
            // throw ;
            DB::rollback();
            return new JsonResponse([
                'status' => 400,
                'message' => $th->getMessage()
            ], 400);
        }
    }
}
