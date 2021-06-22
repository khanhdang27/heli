@php
use App\Models\Course;
use App\Models\Post;
use App\Models\UserComment;
use App\Models\UserLike;
use Illuminate\Support\Facades\Auth;


$liked = $likeRef->likeable->firstWhere('user_id', Auth::user()->id);
$component = explode('\\',$likeModule)[2];

@endphp

<button id="like_{{$component}}_{{$likeRef->id}}" class="mr-5 border-0 bg-white text-primary" v-on:click="clicklike">
    <img class="ic-action"
         id="like_style_{{$component}}_{{$likeRef->id}}"
         src="{{ empty($liked) ? asset('images/ic/ic_heart.svg') : asset('images/ic/ic_fullHeart.svg')}}">

        @if($likeModule == Post::class || $likeModule== UserComment::class)
            <span id="{{$component}}_like_no_{{$likeRef->id}}" >{{$likeRef->like_no}}</span>
        @endif
</button>
@push('likePost')
    <script>
        var like = new Vue({
            el: '#like_{{$component}}_{{$likeRef->id}}',
            data: {
                return: true
            },
            methods: {
                clicklike: function () {
                    @if(Auth::check())
                        if ({{empty($liked) ? 'true' : 'false' }} ) {
                            axios.post("{{ route('site.user-like.store')}}", {
                                like_ref_id: {{$likeRef->id}},
                                user_id: {{Auth::user()->id}},
                                like_module: String.raw`{{$likeModule}}`
                            }).then(function (response) {
                                    console.info(response);
                                    document.querySelector("#like_style_{{$component}}_{{$likeRef->id}}").src = "{{asset('images/ic/ic_fullHeart.svg')}}";
                                    document.querySelector("#{{$component}}_like_no_{{$likeRef->id}}").textContent = "{{$likeRef->like_no + 1}}";
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
                                    document.querySelector("#like_style_{{$component}}_{{$likeRef->id}}").src = "{{asset('images/ic/ic_heart.svg')}}";
                                    document.querySelector("#{{$component}}_like_no_{{$likeRef->id}}").textContent = "{{$likeRef->like_no - 1}}";
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
