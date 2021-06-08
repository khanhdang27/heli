<div class="col-lg-4 he">
    <div class="mt-2 popular-item" id="latest">
        <div class="thumb-article d-flex flex-column justify-content-end position-relative">
            <img class="main-photo img-thumbnail border-0 p-0 rounded-0" src="{{Storage::url($blog->photo)}}">
            <div class="container-fluid pt-2 info-article d-flex flex-column justify-content-between position-absolute">
                <a href="{{route('site.view-blog',$blog->id)}}" class="title-article text-truncate">
                    {{ $blog->title }}
                </a>
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex">
                        <p class="text-20 mr-5">
                            {{ substr($blog->created_at,0,10) }}
                        </p>
                        <span class="text-20"><img src={{asset("images/ic/ic_eye.svg")}}>{{$blog->view_no}}</span>
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
</div>
