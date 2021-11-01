<div class="col-lg-6 d-flex justify-content-center px-5">
    <div class="card-team">
        <div class="row m-0">
            <div class="col-sm-6 info-left p-0">
                @if(empty($tutor->user->avatar))
                <div class="thumb border border-primary bg-white"
                    style="background-image: url({{asset("images/photo_default.svg")}})"></div>
                @else
                <div class="thumb" style="background-image: url({{asset('/file/'.$tutor->user->avatar->id)}})"></div>
                @endif
                <div class="d-flex flex-column align-items-center justify-content-center info-tutor text-white">
                    <div class="name-tutor">{{ $tutor->full_name }}</div>
                    <div class="position-tutor text-center">Tutor/Admission Consultant</div>
                </div>
            </div>
            <div class="col-sm-6 info-right p-0">
                <div class="bg-primary d-flex flex-column justify-content-between pt-5 px-5 pb-3 tutor-background">
                    <div class="content-info-right text-white">
                        <div>{{ $tutor->tutor_info }}</div>
                        <br>
                        <div class="text-limit-3 mb-1">► {{ $tutor->tutor_level }}</div>
                        <div class="text-limit-3 mb-1">► {{ $tutor->tutor_specialized }}</div>
                        <div class="text-limit-3">► {{ $tutor->tutor_experience }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>