@php
use App\Models\Course;
use App\Models\Post;
use App\Models\UserComment;
use App\Models\UserLike;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

$id_random = Str::random(2);

$liked = $likeRef->likeable;
$user_liked = $liked
    ->filter(function ($item) {
        return $item->user_id == Auth::user()->id;
    })
    ->first();

$liked = empty($user_liked) ? 0 : $user_liked->like_style;
$component = explode('\\', $likeModule)[2];

@endphp
<button id="like_{{ $component }}_{{ $likeRef->id }}_{{ $id_random }}"
    class="ml-1 border-0 bg-white text-primary h4
mb-0" v-on:click="clicklike">
    <img class="ic-action" id="like_style_{{ $component }}_{{ $likeRef->id }}_{{ $id_random }}"
        src="{{ $liked == 0 ? asset('images/ic/ic_heart.svg') : asset('images/ic/ic_fullHeart.svg') }} ">

    @if ($likeModule == Post::class || $likeModule == UserComment::class)
        {{ $likeRef->like_no }}
    @endif
</button>

<script>
    var like_{{ $id_random }} = new Vue({
        el: '#like_{{ $component }}_{{ $likeRef->id }}_{{ $id_random }}',
        data() {
            return {
                likeable: {{ $liked }}
            }
        },
        methods: {
            clicklike: function() {
                @if (Auth::check())
                    if (like_{{ $id_random }}.likeable == 0) {
                    axios.post("{{ route('site.user-like.store') }}", {
                    like_ref_id: {{ $likeRef->id }},
                    user_id: {{ Auth::user()->id }},
                    like_module: String.raw `{{ $likeModule }}`
                    }).then(function(response) {
                    document.querySelector("#like_style_{{ $component }}_{{ $likeRef->id }}_{{ $id_random }}").src =
                    "{{ asset('images/ic/ic_fullHeart.svg') }}";
                    if (document.querySelector("#{{ $component }}_like_no_{{ $likeRef->id }}")) {
                    document.querySelector("#{{ $component }}_like_no_{{ $likeRef->id }}").textContent =
                    "{{ $likeRef->like_no + 1 }}";
                    }
                    like_{{ id_random }}.likeable = 1;
                    })
                    .catch(function(error) {
                    console.error(error);
                    });
                    } else {
                    axios.put("{{ route('site.user-like.update', $likeRef->id) }}", {
                    like_ref_id: {{ $likeRef->id }},
                    user_id: {{ \Illuminate\Support\Facades\Auth::user()->id }},
                    like_module: String.raw `{{ $likeModule }}`
                    }).then(function(response) {
                    console.info(response);
                    document.querySelector("#like_style_{{ $component }}_{{ $likeRef->id }}_{{ $id_random }}").src =
                    "{{ asset('images/ic/ic_heart.svg') }}";
                    if (document.querySelector("#{{ $component }}_like_no_{{ $likeRef->id }}")) {
                    document.querySelector("#{{ $component }}_like_no_{{ $likeRef->id }}").textContent =
                    "{{ $likeRef->like_no - 1 }}";
                    }
                    like_{{ $id_random }}.likeable = 0;
                    })
                    .catch(function(error) {
                    console.error(error);
                    });
                    }
                @else
                    alert("need to login to reaction");
                @endif
            },
        },
    });
</script>
