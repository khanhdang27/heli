
<div class="">
    <div class="row row-question pt-3 pb-3 border-secondary bg-white">
        <div class="col-xl-2">
            <div class="d-flex text-primary w-100">
                @if(empty(Auth::user()->avatar))
                    <img src="{{asset('images/user_default.png')}}" width="120" height="120">
                @else
                    <img src="{{asset('/file/'.$comment->user->avatar->id)}}" width="120" height="120">
                @endif
            </div>
        </div>
        <div class="col-xl-6 d-flex flex-column justify-content-between">
            <div class="pl-3 pt-2">
                <h4 class="text-primary">{{ Str::limit($comment->user->name, 25)}}</h4>
                <h5 class="text-primary">
                    {{$comment->detail}}
                </h5>

            </div>
            <h5 class="text-primary pl-3">{{$course->course_name}}</h5>
        </div>
        <div class="col-xl-4 pr-0">
            @foreach($course->ratings as $rating)
                @if(!empty($rating->user_id) and $comment->user_id == $rating->user_id)
                    <div class="d-flex align-items-center justify-content-end">
                        <div>
                            @php
                                $rate = (int)floor($rating->rating);
                            @endphp
                            @for ($i = 0; $i < $rate; $i++)
                                <img src="{{ asset('images/ic/ic_star.svg') }}" width="25">
                            @endfor
                            @for ($i = 0; $i < 5-$rate; $i++)
                                <img src="{{ asset('images/ic/ic_star_border.svg') }}" width="25">
                            @endfor
                        </div>
                        <h5 class="mb-0 ml-3 text-primary">{{$rating->rating}}/5</h5>
                    </div>
                @endif
            @endforeach
            <h5 class="text-right text-primary mt-3">{{ substr($comment->created_at, 0, 10) }}</h5>
        </div>
    </div>
</div>
