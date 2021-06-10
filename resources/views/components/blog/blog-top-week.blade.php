<div class="popular-item ">
    <div class="thumb-article d-flex flex-column justify-content-end position-relative">
        <img class="main-photo img-thumbnail border-0 p-0 rounded-0"
             src="{{Storage::url($blog_top->photo)}}">
        <div class="container-fluid pt-2 info-article d-flex flex-column justify-content-between position-absolute">
            <a href="{{route('site.view-blog',$blog_top->id)}}" class="title-article text-truncate">
                {{ $blog_top->title }}
            </a>
            <div class="d-flex justify-content-between flex-wrap pb-3">
                <div class="d-flex">
                    <p class="text-20 mr-5">
                        {{ substr($blog_top->created_at,0,10) }}
                    </p>
                    <span class="text-20"><img src="{{asset("images/ic/ic_eye.svg")}}" width="26">{{ $blog_top->view_no }}</span>
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
