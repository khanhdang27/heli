<?php

use App\Models\Course;
use App\Models\Post;
use App\Models\UserLike;

/** @var UserLike[] $userLike */
/** @var Post $post */
/** @var Course $course */
//add 'or $usLikePost->like_ref_id == $course->id' in condition if
$like = 1;
foreach ($likeRef->userLike as $usLikePost) {
    if ($usLikePost->like_ref_id == $likeRef->id &&
        $usLikePost->like_module == $likeModule &&
        $usLikePost->user_id == \Illuminate\Support\Facades\Auth::check()
        ? \Illuminate\Support\Facades\Auth::user()->id
        : 0
    ) {
        $like = 1;
        break;
    }
}
?>

    <button id="like{{$likeRef->id}}" class="mr-5 border-0 bg-white text-primary" v-on:click="clicklike">
        <img class="ic-action"
             id="like{{$likeRef->id}}"
             class="ic-action"
             src="{{ $like == 0 ? asset('images/ic/ic_heart.svg') : asset('images/ic/ic_fullHeart.svg')}}">
        {{$likeRef->like_no}}
    </button>
@push('likePost')
    <script>
        var like = new Vue({
            el: '#like{{$likeRef->id}}',
            data: {
                return: true
            },
            methods: {
                clicklike: function (){
                    if ({{$like}}  == '0') {
                        axios.post("{{ route('site.user-like.store') }}", {
                            like_ref_id: {{$likeRef->id}},
                            user_id: {{\Illuminate\Support\Facades\Auth::user()->id ?? 0}},
                            like_module: {{$likeModule}}
                        })
                            .then(function (response) {
                                console.info(response);
                                document.querySelector("#like{{$likeRef->id}}").attributes.src = "asset('images/ic/ic_heart.svg')";
                            })
                            .catch(function (error) {
                                console.error(error);
                            });
                    } else  {
                        axios.put("{{route('site.user-like.update',$likeRef->id)}}",{
                            like_ref_id: {{$likeRef->id}},
                            user_id: {{\Illuminate\Support\Facades\Auth::user()->id ?? 0}},
                            like_module: {{$likeModule}}
                        })
                            .then(function (response) {
                                console.info(response);
                                document.querySelector("#like{{$likeRef->id}}").attributes.src = "{{asset('images/ic/ic_fullHeart.svg')}}";
                            })
                            .catch(function (error) {
                                console.error(error);
                            });
                    }

                },

            },

        });
    </script>
@endpush
