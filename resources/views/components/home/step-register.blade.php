<div class="container-fluid step-for-register pb-5 bg-dark my-5">
    <div class="content-step">
        <div class="row row-step py-5 justify-content-center">
            <div class="col-sm-2 line">
                <div class="circle-step bg-white text-dark rounded-circle ml-auto" id="animate-object1">
                    Step 1
                </div>
            </div>
            <div class="col-sm-3 col-step line" id="listDot1">
                <div class="dot-bar">
                    @for ($i = 0; $i < 8; $i++)
                        <div class='list-dot bg-white'>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-sm-1 line">
                <div class="circle-step bg-white text-dark rounded-circle mx-auto" id="animate-object2">
                    Step 2
                </div>
            </div>
            <div class="col-sm-3 col-step line" id="listDot2">
                <div class="dot-bar">
                    @for ($i = 0; $i < 8; $i++)
                        <div class='list-dot bg-white'>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-sm-2 line">
                <div class="circle-step bg-white text-dark rounded-circle mr-auto" id="animate-object3">
                    Step 3
                </div>
            </div>
        </div>
    </div>
    <div class="content-step">
        <div class="row text-center text-secondary">
            <div class="col-sm-4" id="content1">
                <div class="title-step">@lang('keywords.step-register.onlineRegistration')</div>
                <p class="text-step mx-auto">@lang('keywords.step-register.fillInformation')</p>
            </div>
            <div class="col-sm-4" id="step2">
                <div class="title-step">
                    @lang('keywords.step-register.enjoyNewUserDiscount')
                </div>
                <p class="text-step mx-auto">@lang('keywords.step-register.tryLiveClass')</p>
            </div>
            <div class="col-sm-4" id="content3">
                <div class="title-step">
                    @lang('keywords.step-register.experienceNow')
                </div>
                <p class="text-step mx-auto">@lang('keywords.step-register.brainExperienceCourse')</p>

            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn-register-now btn-dark mt-5 font-weight-bold" id="btn-register-step" data-toggle="modal"
                data-target="#registerModal">
            <span>@lang('keywords.signUpNow')</span>
        </button>
    </div>
</div>
<script src="https://unpkg.com/popmotion/dist/popmotion.global.min.js"></script>
<script src="{{ asset('js/anime.min.js') }}"></script>
<script>
    const rowStep = document.querySelector('.row-step')
    const step1 = document.getElementById('animate-object1');
    const text1 = document.getElementById('content1');
    const step2 = document.getElementById('animate-object2');
    const text2 = document.getElementById('step2');
    const step3 = document.getElementById('animate-object3');
    const text3 = document.getElementById('content3');
    var animeStep1 = anime.timeline({
        scale: {
            value: 1.2,
        },
        direction: 'alternate',
        duration: 500,
        loop: true,
        autoplay: true
    });
    animeStep1
        .add({
            targets: [rowStep, step1],
        })
        .add({
            targets: [rowStep, step2],
        })
        .add({
            targets: [rowStep, step3],
        })
    // const animeStep2 = anime({
    //     targets: [step2, text2],
    //     delay: function(el, i) { return i * 2000; },
    //     scale: {
    //         value: 1.2,
    //     },
    //     direction: 'alternate',
    //     loop: true
    // });
    // const animeStep3 = anime({
    //     targets: [step3, text3],
    //     delay: function(el, i) { return i * 3000; },
    //     scale: {
    //         value: 1.2,
    //     },
    //     direction: 'alternate',
    //     loop: true
    // });

</script>
