
@foreach ($comment->comment as $item)
    @php
        if (Auth::check()){
            $user_liked = $item->likeable
            ->filter(function ($item) {
                return $item->user_id == Auth::user()->id;
            })
            ->first();
        $liked = empty($user_liked) ? 0 : $user_liked->like_style;
        }
    @endphp
    <div class="">
    <div class=" row row-question pt-5 pb-5 border-primary">
        <div class="col-lg-3">
            <div class="d-flex flex-wrap text-primary">
                @if (empty($item->user->avatar))
                    <img class="user-avatar mb-3 mr-3" src="{{ asset('images/photo_default.svg') }}">
                @else
                    <img class="user-avatar mb-3 mr-3" src="{{ asset('/file/' . $item->user->avatar->id) }}">
                @endif
                <div>
                    <p class="text-comment mb-2">{{ $item->user->name }}</p>
                    <p class="m-0">{{ substr($item->created_at, 0, 10) }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="d-flex justify-content-between">
                <div class="mr-3">
                    <p class="h3 text-primary font-weight-bold">{{ $comment->title }}</p>
                    <p class="question h5 text-primary">
                        {{ $item->detail }}
                    </p>
                </div>
                @if ($comment->user_id == Auth::user()->id)
                    <div class="dropdown">
                        <a href="#" class="btn btn-option py-0" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <h2 class="mb-0 text-primary">
                                <i class="fe fe-edit-3"></i>
                            </h2>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-option p-2">
                            <a href="{{ route('site.pinComment', [$comment->id, $item->id]) }}"
                                class="dropdown-item text-primary">
                                Accept the answer
                            </a>
                        </div>
                    </div>
                @endif
            </div>
            <div class="py-3">
                @if ($item->image != null)
                    <img class="img-question border w-100" src="{{ asset('/file/' . $item->image->id) }}">
                @endif
            </div>
            <div class="text-forum d-flex">
                {{-- <x-like.like :likeRef=$item :likeModule=\App\Models\UserComment::class></x-like.like> --}}
                <like-component v-bind:user-id="{{ Auth::user()->id }}" v-bind:like-ref-id="{{ $item->id }}"
                    v-bind:like-module="'App\\Models\\UserComment'" v-bind:like-no="{{$item->like_no}}"
                    v-bind:is-liked="{{ $liked }}">
                </like-component>
            </div>
            <div class="d-flex justify-content-end text-forum pt-2 m-0">
                @if ($comment->pin_comment == $item->id)
                    <span class="mr-2"><img src="{{ asset('images/ic/ic_star.svg') }}" width="40"></span>
                    <span class="h3 text-primary pt-1">@lang('keywords.forum.bestAnswer')</span>
                @endif
            </div>
        </div>
    </div>
    </div>
@endforeach
