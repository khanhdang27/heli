<div class="modal fade modal-index" id="registerModalComponent">
    <div class="modal-dialog m-0 modal-login-xl h-100">
        <div class="modal-content modal-register-component">
            <div class="modal-header btn-close">
                <button type="button" class="close btn-x" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body modal-body-login">

                <div class="mx-auto">
                    <div class="row align-items-center">
                        <div class="col-sm-7">
                            <h1 class="text-secondary text-information mx-auto">
                                @lang('keywords.freeTrialClass')
                            </h1>
                        </div>
                        <div class="col-sm-5">
                            <div class="bg-secondary mx-auto rounded-circle circle-register d-flex justify-content-center align-items-center">
                                <img width="133px" height="133px" src="{{asset('images/ic/Group8.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn-register-now btn-secondary" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">
                            <span>@lang('keywords.registerNowToExperience')</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
