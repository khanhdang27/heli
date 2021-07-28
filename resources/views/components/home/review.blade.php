<?php
$praiseList = [
    'item_1' => [
        'content' => '“The consultants from Helios help refine my personal statement for UCAS and JUPAS.
                           I would not have admitted to such a reputable academy without their assistance.
                           Life in London is beautiful but challenging, yet the mentors arranged by Helios
                           are really helpful in different means.”',
        'name' => 'J.C',
        'school' => 'Oxford'
    ],
    'item_2' => [
        'content' => '“The consultants from Helios help refine my personal statement for UCAS and JUPAS.
                           I would not have admitted to such a reputable academy without their assistance.
                           Life in London is beautiful but challenging, yet the mentors arranged by Helios
                           are really helpful in different means.”',
        'name' => 'J.C',
        'school' => 'Oxford'
    ],
    'item_3' => [
        'content' => '“The consultants from Helios help refine my personal statement for UCAS and JUPAS.
                           I would not have admitted to such a reputable academy without their assistance.
                           Life in London is beautiful but challenging, yet the mentors arranged by Helios
                           are really helpful in different means.”',
        'name' => 'J.C',
        'school' => 'Oxford'
    ],
]
?>
<div class="justify-content-center">
    <h2 class="title-card text-primary">客戶的表揚</h2>
    <div class="container">
        <!-- Slider main container -->
        <div class="swiper-container mb-5" id="mySwiper">
            <div class="swiper-wrapper" style="padding-top: 9rem">
                @foreach($praiseList as $item)
                    <div class="swiper-slide">
                        <div class="praise-box ml-4 mr-4 mx-auto">
                            <x-home.praise
                                content="{{$item['content']}}"
                                name="{{$item['name']}}"
                                school="{{$item['school']}}"
                            >

                            </x-home.praise>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<script>
    var swiper = new Swiper("#mySwiper", {
        loop: true,
        speed: 1000,
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        autoplay: {
            delay: 5000,
        },
    });
</script>

