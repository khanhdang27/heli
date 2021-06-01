<div class="pt-3 reviews">
    <div class="row">
        <div class="col-sm">
            <div>
                <img class="ava-responsive" height="514" src="{{ asset($tutor_photo) }}">
            </div>
        </div>
        <div class="col-sm d-flex flex-column justify-content-end">
            <div class="name-tutor text-primary">{{ $tutor_name }}</div>
            <div class="position-tutor text-primary">Tutor/Admission Consultant</div>
            <div class="d-flex mt-5 bottom-info-right">
                <div class="ic-tutor ic-light">
                    <img src="{{ asset("images/ic/ic_light.svg")}}">
                </div>
                <div class="ic-tutor ic-clock">
                    <img src="{{ asset("images//ic/ic_clock.svg")}}">
                </div>
                <div class="ic-tutor ic-az">
                    <img src="{{ asset("images/ic/ic_az.svg")}}">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 container-fluid content-info text-primary">
        <div class="mb-5">
            {{ $tutor_info }}
        </div>
        <div>
            {{ $tutor_level }}
        </div>
        <div>
            {{ $tutor_specialized }}
        </div>
        <div>
            {{ $tutor_experience }}
        </div>
    </div>
</div>