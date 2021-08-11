<div class="card flex-md-row border-0">
    <div class="popular-articles-item-image d-flex popular-item">
        @if(empty($item->photo))
            <div class="img-thumbnail rounded-0 p-0 img-blog align-items-center"
                 style="background-image: url('{{ asset("images/default-image.jpg")}}')">
                <img class="img-thumbnail border-0 p-0 rounded-0 align-items-center"
                    src="{{ asset('images/default-image.jpg')}}"
                    alt="Card image cap">
            </div>

        @else
            <div class="img-thumbnail rounded-0 p-0 border-0 img-blog align-items-center"
                 style="background-image: url('{{ asset("/file/".$item->photo->id)}}')"></div>
        @endif
    </div>

    <div class="popular-articles-item-content">
        <div class="card-body px-3">
            <a class="h4" href="{{route('site.view-blog',$item->id)}}">
                {{$item->title}}
            </a>
            <p class="card-text h5 text-primary">
                <span>{{ substr($item->created_at,0,10) }}</span>
                <img class="ml-5" src={{asset("images/ic/ic_eyeBlue.svg")}}>{{ $item->view_no }}
            </p>
            <p class="d-flex flex-wrap">
                @foreach($item->tags as $tag)
                    <button class="btn-hashtag-small">
                        {{$tag->tag_name}}
                    </button>
                @endforeach
            </p>
        </div>
    </div>

</div>
