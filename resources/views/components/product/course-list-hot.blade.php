{{--<div class="pb-5 row">--}}
{{--    @if (false)--}}
{{--     neu la page 1 thi hidden--}}
{{--        <div class="col-1 align-self-center">--}}
{{--            <button class="btn btn-outline-primary rounded-circle border-2 border-primary animate-change-color py-auto">--}}
{{--                <h1 class="text-center p-3 font-weight-bold my-auto"> ﹤ </h1>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    <div class="col-10 row product-category-row">--}}
{{--        @foreach($courses as $value)--}}
{{--        <x-product.course-item :course=$value typeOfUI={{$typeOfUI}}>--}}
{{--        </x-product.course-item>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--    @if (true)--}}
{{--     neu la page 1 thi show to padding--}}
{{--    <div class="col-1"></div>--}}
{{--    @endif--}}
{{--    <div class="col-1 align-self-center">--}}
{{--        <button class="btn btn-outline-primary rounded-circle border-2 border-primary animate-change-color py-auto">--}}
{{--            <h1 class="text-center p-3 font-weight-bold my-auto"> ﹥ </h1>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</div>--}}
@if(!$courses->isEmpty())
    <div class="pb-3 row flex-nowrap">
        <div class="col-1">
            <div class="swiper-button-prev btn-prev" id="btn_prev">
                <div class="rounded-circle border-btn-next animate-change-color py-3 px-4">
                    <p class="h2 text-center mx-2">❮</p>
                </div>
            </div>
        </div>
        <div class="px-0 col-10">
            <div class="swiper-container" id="swiperCourse">
                <div class="swiper-wrapper pb-3">
                    @foreach($courses as $value)
                        <div class="swiper-slide mb-5">
                            <x-product.course-item :course=$value typeOfUI={{$typeOfUI}}>
                            </x-product.course-item>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="col-1">
            <div class="swiper-button-next btn-next" id="btn_next">
                <div class="rounded-circle border-btn-next animate-change-color py-2 px-4">
                    <p class="m-0 h2 text-center">❯</p>
                    <p class="text-nowrap text-center m-0">更多</p>
                </div>
            </div>
        </div>

    </div>

    <script>
        var swiper = new Swiper("#swiperCourse", {
            @if(Auth::check())
            slidesPerColumn: 2,
            slidesPerColumnFill: 'row',
            @endif
            speed: 1000,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
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
        });
    </script>
@endif
