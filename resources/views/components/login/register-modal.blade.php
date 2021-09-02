<div class="modal fade modal-index" id="registerModalComponent">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-login-content border-white">
            <div class="modal-header btn-close">
                <button type="button" class="close btn-x m-0 p-0" data-dismiss="modal">
                    <span aria-hidden="true" class="rounded-circle p1-1">×</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body modal-body-login py-5">

                <div class="mx-auto">
                    <div class="d-flex align-items-center">
                        <div class="col">
                            <button class="btn btn-outline-dark btn-sm" onclick="window.history.go(-1)">
                                <i class="fe fe-arrow-left"></i>
                            </button>
                        </div>
                        <div class="col-sm-7">
                            <h1 class="text-white text-information mx-auto">
                                @lang('keywords.freeTrialClass')
                            </h1>
                        </div>
                        <div class="col-sm-5">
                            <div
                                class="bg-white mx-auto rounded-circle circle-register d-flex justify-content-center align-items-center">
                                <img width="72.78px" height="72.78px" src="{{asset('images/ic/ic_checkBlue.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="bottom-btn mt-5 d-flex justify-content-center">
                        <button class='btn-login btn-register-now animate-change-color' data-toggle="modal"
                            data-target="#registerModal" data-dismiss="modal" id='btn-register'>
                            <h3 class="mb-0 font-weight-bold">@lang('keywords.registerNowToExperience')</h3>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>