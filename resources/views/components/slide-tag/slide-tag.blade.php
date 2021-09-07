<div class="swiper-container" id="swpTag{{$type}}">
    <div class="swiper-wrapper mb-3">
        @foreach($tags as $value)
            <div class="swiper-slide item-slide">
                <a class="btn btn-hashtag text-nowrap"
                   href="{{$type == 'blog' ? route('site.show-blog-tag', $value) : route('site.show-post-tag', $value)}}">
                    {{$value->tag_name}}
                </a>
            </div>
        @endforeach
    </div>
    <div class="swiper-scrollbar" id="{{$type}}Scrollbar"></div>
</div>
<script>
    var swpForumTag{{$type}} = new Swiper("#swpTag{{$type}}", {
        speed: 500,
        spaceBetween: 15,
        slidesPerView: "auto",
        scrollbar: {
            el: "#{{$type}}Scrollbar",
        },
    });
</script>
