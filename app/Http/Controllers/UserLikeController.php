<?php

namespace App\Http\Controllers;

use App\Post;
use App\UserLike;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserLikeController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        $userLike = new UserLike(
            $input
        );

        if($userLike->save()){
            $post = Post::find($userLike->post_id);
            $post->like_no   =   $post->like_no+1;
            $post->save();
        }
    }
}
