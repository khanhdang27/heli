@php
use App\Models\Course;
use App\Models\Post;
use App\Models\UserComment;
use App\Models\UserLike;
use Illuminate\Support\Facades\Auth;

$liked = $likeRef->likeable->where('user_id', Auth::user()->id)->toArray();

@endphp

<button id="like{{$likeRef->id}}" class="mr-5 border-0 bg-white text-primary" v-on:click="clicklike">
    <img class="ic-action"
         id="like_style{{$likeRef->id}}"
         src="{{ empty($liked[1]) ? asset('images/ic/ic_heart.svg') : asset('images/ic/ic_fullHeart.svg')}}">

        @if($likeModule == Post::class || $likeModule== UserComment::class)
            <span id="like_no_{{$likeRef->id}}" >{{$likeRef->like_no}}</span>
        @endif
</button>
@push('likePost')
    <script>
        var like = new Vue({
            el: '#like{{$likeRef->id}}',
            data: {
                return: true
            },
            methods: {
                clicklike: function () {
                    @if(Auth::check())
                        if ({{empty($liked[1]) ? 'true' : 'false' }} ) {
                            axios.post("{{ route('site.user-like.store')}}", {
                                like_ref_id: {{$likeRef->id}},
                                user_id: {{Auth::user()->id}},
                                like_module: String.raw`{{$likeModule}}`
                            }).then(function (response) {
                                    console.info(response);
                                    document.querySelector("#like_style{{$likeRef->id}}").src = "{{asset('images/ic/ic_fullHeart.svg')}}";
                                    document.querySelector("#like_no_{{$likeRef->id}}").textContent = "{{$likeRef->like_no + 1}}";
                                })
                                .catch(function (error) {
                                    console.error(error);
                                });
                        } else {
                            axios.put("{{route('site.user-like.update',$likeRef->id)}}", {
                                like_ref_id: {{$likeRef->id}},
                                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                                like_module: String.raw`{{$likeModule}}`
                            }).then(function (response) {
                                    console.info(response);
                                    document.querySelector("#like_style{{$likeRef->id}}").src = "{{asset('images/ic/ic_heart.svg')}}";
                                    document.querySelector("#like_no_{{$likeRef->id}}").textContent = "{{$likeRef->like_no - 1}}";
                                })
                                .catch(function (error) {
                                    console.error(error);
                                });
                        }
                    @else 
                        console.log("test")
                        alert("need to login to reaction");
                    @endif
                },
            },
        });
    </script>
@endpush
