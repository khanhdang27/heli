<div class="swiper-container" id="swpTag{{$type}}">
    <div class="swiper-wrapper">
        @foreach($tags as $value)
            <div class="swiper-slide item-slide">
                <a class="btn btn-hashtag text-nowrap mr-4"
                   href="{{$type == 'blog' ? route('site.show-blog-tag', $value) : "#"}}">
                    {{ $type == 'blog' ? $value->tag_name : $value }}
                </a>
            </div>
        @endforeach
    </div>
</div>
<script>
    var swpForumTag{{$type}} = new Swiper("#swpTag{{$type}}", {
        speed: 500,
        spaceBetween: 10,
        slidesPerView: "auto"
    });
</script>
