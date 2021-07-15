<div class="card flex-md-row border-0">
    <div class="popular-articles-item-image d-flex ">

        @if(empty($item->photo))
        <img class="rounded-0 align-items-center" src="{{ asset('images/default-image.jpg')}}"
                alt="Card image cap" height=182 width=182>
        @else
        <img class="rounded-0 align-items-center" src="{{ asset('/file/'.$item->photo->id)}}"
             alt="Card image cap" height=182 width=182>
        @endif
    </div>

    <div class="popular-articles-item-content">
        <div class="card-body p-0 d-flex flex-column justify-content-between h-100">
            <div>
                <a href="{{route('site.view-blog',$item->id)}}">
                    {{$item->title}}
                </a>
                <div class="d-flex card-text align-items-center text-primary">
                    <p class="h4 mr-5">
                        {{ substr($item->created_at,0,10) }}
                    </p>
                    <img class="mb-2 mr-2" src="{{asset("images/ic/ic_eyeBlue.svg")}}" width="26">
                    <h4>{{$item->view_no}}</h4>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                @foreach($item->tags as $tag)
                    <button class="btn-hashtag-small bg-primary text-white">
                        {{$tag->tag_name}}

                    </button>
                @endforeach
            </div>
        </div>
    </div>

</div>
<hr class="border-secondary"/>
