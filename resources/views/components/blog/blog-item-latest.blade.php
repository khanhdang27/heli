{{--<div class="col-lg-4 p-4 blog-item-latest-display">--}}
<div class="mt-2 popular-item shadow animate-up" id="latest">
    <div class="thumb-article d-flex flex-column justify-content-end position-relative">

        @if(empty($blog->photo))
        <img class="main-photo img-thumbnail border-0 p-0 rounded-0" src="{{ asset('images/default-image.jpg')}}">
        @else
        <img class="main-photo img-thumbnail border-0 p-0 rounded-0" src="{{ asset('/file/'.$blog->photo->id)}}">
        @endif
        <div class="container-fluid pt-2 info-article d-flex flex-column justify-content-between position-absolute">
            <a href="{{route('site.view-blog',$blog->id)}}" class="h4 font-weight-bold title-article">
                {{ $blog->title }}
            </a>
            <div class="">
                <div class="d-flex align-items-center text-white">
                    <p class="h5 mr-5">
                        {{ substr($blog->created_at,0,10) }}
                    </p>
                    <img class="mb-2 mr-2" src="{{asset("images/ic/ic_eye.svg")}}" width="26">
                    <h5>{{$blog->view_no}}</h5>
                </div>
                <div class="d-flex flex-wrap pb-3">
                    @if(!empty($blog->tags))
                    @foreach($blog->tags as $tag)
                    <button class="btn-hashtag-small">
                        {{$tag->tag_name}}

                    </button>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
{{--</div>--}}