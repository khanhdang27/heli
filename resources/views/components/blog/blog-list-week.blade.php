<div class="card flex-md-row border-0">
    <div class="popular-articles-item-image d-flex ">
        <img class="img-thumbnail rounded-0 align-items-center" src="{{Storage::url($item->photo)}}"
             alt="Card image cap">
    </div>

    <div class="popular-articles-item-content">
        <div class="card-body">
            <a class="h1" href="{{route('site.view-blog',$item->id)}}">
                {{$item->title}}
            </a>
            <p class="card-text h4 text-primary">
                <span>{{ substr($item->created_at,0,10) }}</span>
                <img class="ml-5" src={{asset("images/ic/ic_eyeBlue.svg")}}>{{ $item->view_no }}
            </p>
            <p class="d-flex flex-wrap">
                @if(!empty($item->tags))
                    @foreach($item->tags as $tag)
                        <button class="btn-hashtag-small bg-primary text-white">
                            {{$tag->tag_name}}

                        </button>
                    @endforeach
                @endif
            </p>
        </div>
    </div>

</div>
<hr class="border-secondary"/>
