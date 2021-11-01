<template>
    <div>
        <h2 class="font-weight-bold text-primary text-center mb-5">经验丰富的导师，致力于教学</h2>
        <div class="d-flex mb-5 flex-nowrap justify-content-center">
            <div class="col-xl-1 col-lg-2 col-1 d-none d-md-block">
                <div class="swiper-button-prev btn-prev btn-prev-tutor" id="btn_prev">
                    <div class="rounded-circle border-btn-next animate-change-color py-3 px-4">
                        <p class="h2 text-center mx-2">❮</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-10">
                <swiper :options="swiperOptions">
                    <swiper-slide v-for="tutor in tutors" :key="tutor.id">
                        <div class="card-tutor position-relative">
                            <div class="thumb-img-tutor w-100 h-100">
                                <img v-if="tutor.user.avatar" :src="'./file/'+tutor.user.avatar.id">
                            </div>
                            <div class="text-center info-tutor text-white position-absolute py-4">
                                <div class="font-weight-bold">{{tutor.full_name}}</div>
                                <div class="font-weight-bold">Tutor</div>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper>
            </div>

            <div class="col-xl-1 col-lg-2 col-1 d-none d-md-block">
                <div class="swiper-button-next btn-next btn-next-tutor" id="btn_next">
                    <div class="rounded-circle border-btn-next animate-change-color py-2 px-4">
                        <p class="m-0 h2 text-center">❯</p>
                        <p class="text-nowrap text-center m-0">更多</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { swiper, swiperSlide } from 'vue-awesome-swiper';
import 'swiper/swiper-bundle.css'
export default {
    components: {
        swiper,
        swiperSlide
    },
    props:{
        tutors: Array
    },
    data() {
        return {
            swiperOptions: {
                speed: 700,
                pagination: {
                    el: "#tutorPaginate",
                    dynamicBullets: true,
                },
                navigation: {
                    nextEl: '.btn-next-tutor',
                    prevEl: '.btn-prev-tutor'
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1440: {
                        slidesPerView: 3,
                        spaceBetween: 60,
                    }
                },
            }
        }
    }
}
</script>

<style scoped>

</style>
