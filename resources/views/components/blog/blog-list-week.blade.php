<div class="card flex-md-row border-0" >
    <div class="popular-articles-item-image d-flex ">
        <img class="img-thumbnail rounded-0 align-items-center" src="{{Storage::url($item->photo)}}" alt="Card image cap">
    </div>

    <div class="popular-articles-item-content">
        <div class="card-body">
            <a href="{{route('site.view-blog',$item->id)}}" class="text-30">
                {{$item->title}}
            </a>
            <p class="card-text">
                <span>{{ substr($item->created_at,0,10) }}</span><img class="ml-5"
                                                                      src={{asset("images/ic/ic_eyeBlue.svg")}}>{{ $item->view_no }}
            </p>
            <p class="d-flex flex-wrap">
                @if(!empty($item->tags))
                    @foreach($item->tags as $tag)
                        <button class="btn-hashtag text-12">
                            {{$tag->tag_name}}

                        </button>
                    @endforeach
                @endif
            </p>
        </div>
    </div>

</div>
<hr class="border-secondary"/>
