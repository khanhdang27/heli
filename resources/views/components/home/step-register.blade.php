<div class="container-fluid step-for-register pb-5 bg-dark">
    <div class="content-step">
        <div class="row row-step py-5 justify-content-center">
            <div class="circle-step bg-white text-dark" id="animate-object1">
                Step 1
            </div>
            <div class="col-sm-3 col-step" id="listDot1">
                @include('dot-bar')
            </div>
            <div class="circle-step bg-white text-dark" id="animate-object2">
                Step 2
            </div>
            <div class="col-sm-3 col-step" id="listDot2">
                @include('dot-bar')
            </div>
            <div class="circle-step bg-white text-dark" id="animate-object3">
                Step 3
            </div>
        </div>
    </div>
    <div class="content-step">
        <div class="row text-center text-secondary">
            <div class="col-xl col-lg col-sm" id="content1">
                <div class="title-step">@lang('keywords.step-register.onlineRegistration')</div>
                <span class="text-step">@lang('keywords.step-register.fillInformation')</span>
            </div>
            <div class="col-xl col-lg col-sm" id="step2">
                <div class="title-step">
                    @lang('keywords.step-register.enjoyNewUserDiscount')
                </div>
                <span class="text-step">@lang('keywords.step-register.tryLiveClass')</span>
            </div>
            <div class="col-xl col-lg col-sm " id="content3">
                <div class="title-step">
                    @lang('keywords.step-register.experienceNow')
                </div>
                <span class="text-step">@lang('keywords.step-register.brainExperienceCourse')</span>

            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn-register-now btn-dark mt-5 font-weight-bold" id="btn-register-step"
                data-toggle="modal"
                data-target="#registerModal">
            <span>@lang('keywords.signUpNow')</span>
        </button>
    </div>
</div>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://unpkg.com/popmotion/dist/popmotion.global.min.js"></script>
<script>
    const step1 = popmotion.styler(document.getElementById('animate-object1'));
    const step2 = popmotion.styler(document.getElementById('animate-object2'));
    const step3 = popmotion.styler(document.getElementById('animate-object3'));
    const animateStep1 = popmotion.tween({
        from: {
            scale: 0.6,
            opacity: 1,
        },
        to: {
            scale: 1,
            opacity: 1,
        },
        flip: Infinity,
        repeatDelay: 4500,
        duration:500,

    }).start(step1.set);

    const animateStep2 = popmotion.tween({
        from: {
            scale: 0.6,
            opacity: 1,
        },
        to: {
            scale: 1,
            opacity: 1,
        },
        flip: Infinity,
        repeatDelay: 4500,
        duration:500,
        elapsed:-2000
    }).start(step2.set);

    const animateStep3 = popmotion.tween({
        from: {
            scale: 0.5,
            opacity: 1,
        },
        to: {
            scale: 1,
            opacity: 1,
        },
        flip: Infinity,
        repeatDelay: 4500,
        duration:500,
        elapsed:-4000
    }).start(step3.set);
</script>
<script>
    var content1 = document.querySelector('#content1');
    var content2 = document.querySelector('#step2');
    var content3 = document.querySelector('#content3');
    var listDot = [
        document.querySelector('#listDot1'),
        document.querySelector('#listDot2')
    ]
    ScrollReveal().reveal(listDot, {
        delay: 300,
        duration: 500,
        reset: true
    });
    ScrollReveal().reveal(content1, {
        delay: 300,
        duration: 500,
        reset: true
    });
    ScrollReveal().reveal(content2, {
        delay:350,
        duration: 500,
        reset: true
    });
    ScrollReveal().reveal(content3, {
        delay: 400,
        duration: 500,
        reset: true
    });
</script>
