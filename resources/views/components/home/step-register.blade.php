<div class="container-fluid step-for-register pb-5 bg-dark my-5">
    <div class="content-step">
        <div class="row row-step py-5 justify-content-center">
            <div class="col-sm-2">
                <div class="circle-step bg-white text-dark rounded-circle ml-auto" id="animate-object1">
                    Step 1
                </div>
            </div>
            <div class="col-sm-3 col-step" id="listDot1">
                <div class="dot-bar">
                    <div id="dot-bar-1" class='list-dot bg-white' style="transform: translateX(0)">
                    </div>
                    @for ($i = 0; $i < 8; $i++)
                        <div id="dot-bar-1-{{$i}}" class='list-dot bg-gray'>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-sm-1">
                <div class="circle-step bg-white text-dark rounded-circle mx-auto" id="animate-object2">
                    Step 2
                </div>
            </div>
            <div class="col-sm-3 col-step" id="listDot2">
                <div class="dot-bar">
                    <div id="dot-bar-2" class='list-dot bg-white'>
                    </div>
                    @for ($i = 0; $i < 8; $i++)
                    <div id="dot-bar-2-{{$i}}" class='list-dot bg-gray'>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="col-sm-2">
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
    const step1 = document.getElementById('animate-object1');
    const text1 = document.getElementById('content1');
    const step2 = document.getElementById('animate-object2');
    const text2 = document.getElementById('step2');
    const step3 = document.getElementById('animate-object3');
    const text3 = document.getElementById('content3');
    const dot_1 = document.getElementById('dot-bar-1');
    const dot_2 = document.getElementById('dot-bar-2');

    var tl = anime.timeline({
        duration: 3500,
        loop: true
    });
    tl.add({
        targets: [step1, text1],
        scale: {
            value: 1.2,
        },
        direction: 'alternate'
    }).add({
        targets: [dot_1],
        translateX: 290,
        easing: 'steps(9)',
        loop: false,
        direction: 'alternate',
        complete: function (){
            dot_1.style.display = "none";
        },
    }).add({
        targets: [step2, text2],
        scale: {
            value: 1.2,
        },
        direction: 'alternate'
    }).add({
        targets: [dot_2],
        translateX: 290,
        easing: 'steps(9)',
        loop: false,
        direction: 'alternate',
        complete: function (){
            dot_2.style.display = "none";
        },
    }).add({
        scale: {
            value: 1.2,
        },
        direction: 'alternate'
    });

</script>
