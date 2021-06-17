<?php
use App\Models\Post;
use App\Models\UserLike;

/** @var UserLike[] $userLike */
/** @var Post $post */

$like = 0;

foreach ($userLike as $usLikePost) {
    if ($usLikePost->post_id == $post->id) {
        $like = 1;
        break;
    }
}
?>
@if($like==0)
    <button id="likePost{{$post->id}}" class="mr-5 border-0 bg-white text-primary" v-on:click="myClickHandler">
        <img class="ic-action" id="like" class="ic-action" src="{{asset("images/ic/ic_heart.svg")}}">
        <img class="ic-action" id="liked" style="display: none" class="ic-action" src="{{asset("images/ic/ic_fullHeart.svg")}}">
        {{$post->like_no}}
    </button>
@else
    <button id="unlike" class="mr-5 border-0 bg-white text-primary">
        <img class="ic-action" src="{{asset("images/ic/ic_fullHeart.svg")}}">
        {{$post->like_no}}
    </button>
@endif
@push('likePost')
    <script>
        var like = new Vue({
            el: '#likePost{{$post->id}}',
            data: {
                return : true
            },
            methods: {
                myClickHandler: function () {
                    axios.post("{{ route('site.user-like.store') }}", {
                        like_ref: {{$post->id}},
                        user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                        like_module: {{$likeModule}}
                    })
                    .then(function (response) {
                        console.info(response);
                        document.querySelector("#liked").style.display = "inline-block";
                        document.querySelector("#like").style.display = "none";
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
                }
            },

        })

    </script>
@endpush
