<div class="modal fade modal-index" id="registerModalComponent">
    <div class="modal-dialog m-0 modal-login-xl h-100">
        <div class="modal-content modal-register-component">
            <div class="modal-header btn-close">
                <button type="button" class="close btn-x" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body modal-body-login">
                
                <div class="mx-auto">
                    <div class="position-relative d-flex align-items-center">
                        <div class="mx-5">
                            <div class="text-content d-flex justify-content-center text-secondary">
                                <h1 class="text-information text-content">
                                    @lang('keywords.freeTrialClass')
                                </h1>
                            </div>
                        </div>
                        <div class="circle-check position-absolute bg-secondary d-flex justify-content-center align-items-center mx-5">
                            <img width="133px" src="{{asset('images/ic/Group8.png')}}">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn-register-now btn-secondary" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">
                            <span>@lang('keywords.registerNowToExperience')</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
