<div class="container-fluid step-for-register pb-5 bg-dark">
    <div class="content-step">
        <div class="row row-step py-5 justify-content-center">
            <div class="circle-step bg-white text-dark">
                Step 1
            </div>
            <div class="col-sm-3 col-step">
                @include('dot-bar')
            </div>
            <div class="circle-step bg-white text-dark">
                Step 2
            </div>
            <div class="col-sm-3 col-step">
                @include('dot-bar')
            </div>
            <div class="circle-step bg-white text-dark">
                Step 3
            </div>
        </div>
    </div>
    <div class="content-step">
        <div class="row text-center text-secondary">
            <div class="col-xl col-lg col-sm">
                <div class="title-step">@lang('keywords.step-register.onlineRegistration')</div>
                <span class="text-step">@lang('keywords.step-register.fillInformation')</span>
            </div>
            <div class="col-xl col-lg col-sm" id="step2">
                <div class="title-step">
                    @lang('keywords.step-register.enjoyNewUserDiscount')
                </div>
                <span class="text-step">@lang('keywords.step-register.tryLiveClass')</span>
            </div>
            <div class="col-xl col-lg col-sm ">
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
