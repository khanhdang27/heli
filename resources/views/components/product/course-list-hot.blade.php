@if(!$courses->isEmpty())
    <div class="pb-3 row flex-nowrap">
        <div class="col-1">
            <div class="swiper-button-prev btn-prev btn-prev{{$tab}}" id="btn_prev">
                <div class="rounded-circle border-btn-next animate-change-color py-3 px-4">
                    <p class="h2 text-center mx-2">❮</p>
                </div>
            </div>
        </div>
        <div class="px-0 col-10">
            <div class="swiper-container" id="swiperCourse{{$tab}}">
                <div class="swiper-wrapper pb-3">
                    @foreach($courses as $value)
                        <div class="swiper-slide mb-5">
                            <x-product.course-item :course=$value typeOfUI={{$typeOfUI}}>
                            </x-product.course-item>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination d-block d-lg-none" id="coursePagination"></div>
            </div>

        </div>
        <div class="col-1 d-none d-md-block">
            <div class="swiper-button-next btn-next btn-next{{$tab}}" id="btn_next">
                <div class="rounded-circle border-btn-next animate-change-color py-2 px-4">
                    <p class="m-0 h2 text-center">❯</p>
                    <p class="text-nowrap text-center m-0">更多</p>
                </div>
            </div>
        </div>

    </div>

    <script>
        var swiperCourseHot{{$tab}} = new Swiper("#swiperCourse{{$tab}}", {
            @if(Auth::check())
            slidesPerColumn: 2,
            slidesPerColumnFill: 'row',
            @endif
            speed: 700,
            navigation: {
                nextEl: ".btn-next{{$tab}}",
                prevEl: ".btn-prev{{$tab}}",
            },
            pagination: {
                el: "#coursePagination",
                dynamicBullets: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 5,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 5,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                }
            },
            observer: true,
            observeParents: true
        });
    </script>
@endif
