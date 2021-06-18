<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\UserLike;
use Illuminate\Http\Request;

class UserLikeController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        $userLike = new UserLike(
            $input
        );
        if ($userLike->save())
            if ($input['like_module'] == 1) {
                $post = Post::find($userLike->like_ref_id);
                $post->like_no = $post->like_no + 1;
                $post->save();
            }
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $userLike = UserLike::where([
            ['user_id','=',$input['user_id']],
            ['like_ref_id','=',$input['like_ref_id']],
            ['like_module','=',$input['like_module']],
        ])->first();
        $userLike->like_ref_type = 0;
        $userLike->save();
        $post = Post::find($input['like_ref_id']);
        $post->like_no = $post->like_no - 1;
        $post->save();
    }
}
