<div class="pb-5 row product-category-row card-small">
    @foreach($courses as $value)
        <x-product.course-item :course=$value typeOfUI="{{$typeOfUI}}" screen="lg">
        </x-product.course-item>
    @endforeach
</div>
<div class="product-category-row swiper-card-small d-none">
    <div class="swiper-container mb-5" id="swiperSmall">
        <div class="swiper-wrapper">
            @foreach($courses as $value)
                <div class="swiper-slide">
                    <x-product.course-item :course=$value typeOfUI="{{$typeOfUI}}" screen="sm">
                    </x-product.course-item>
                </div>
            @endforeach
        </div>
    </div>
</div>
<script>
    var swiperCourse = new Swiper("#swiperSmall", {
        speed: 500,
        width: 280,
    });
</script>

