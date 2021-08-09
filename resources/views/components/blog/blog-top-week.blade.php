<div class="popular-item ">
    <div class="thumb-article d-flex flex-column justify-content-end position-relative">
        @if(empty($blog_top->photo))
        <img class="main-photo-top img-thumbnail border-0 p-0 rounded-0"
             src="{{ asset('images/default-image.jpg')}}">
        @else
        <img class="main-photo-top img-thumbnail border-0 p-0 rounded-0"
             src="{{ asset('/file/'.$blog_top->photo->id)}}">
        @endif
        <div class="container-fluid pt-2 info-article d-flex flex-column justify-content-between position-absolute">
            <a href="{{route('site.view-blog',$blog_top->id)}}"
               class="h2 font-weight-bold title-article">
                {{ $blog_top->title }}
            </a>
            <div class="d-flex justify-content-between flex-wrap pb-3">
                <div class="d-flex align-items-center h4 text-white">
                    <p class="h5 mr-5">
                        {{ substr($blog_top->created_at,0,10) }}
                    </p>
                    <img class="mb-2 mr-2" src="{{asset("images/ic/ic_eye.svg")}}" width="26">
                    <h5>{{$blog_top->view_no}}</h5>
                </div>
                <div class="d-flex">
                    @if(!empty($blog_top->tags))
                        @foreach($blog_top->tags as $tag)
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
