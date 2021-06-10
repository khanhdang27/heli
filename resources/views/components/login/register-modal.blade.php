<div class="modal fade modal-login" id="registerModalComponent">
    <div class="modal-dialog modal-login-xl">
        <div class="modal-content  modal-register-component">
            <div class="modal-header btn-close">
                <button type="button" class="close btn-x" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body modal-body-login">
                <div class="mx-auto">
                    <div class="d-flex align-items-center">
                        <div class="text-content pr-5 d-flex text-secondary">
                            <span class="text-advertisement">
                                @lang('keywords.freeTrialClass')
                            </span>
                        </div>
                        <div class="circle-check bg-secondary d-flex justify-content-center align-items-center">
                            <img width="133px" src="{{asset('images/ic/Group8.png')}}">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn-register-now btn-secondary"  data-toggle="modal" data-target="#registerModal" data-dismiss="modal">
                            <span>@lang('keywords.registerNowToExperience')</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
        </div>
    </div>
</div>
