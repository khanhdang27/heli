<div class="pt-3 reviews">
    <div class="row">
        <div class="col-sm">
            <div>
                <img class="ava-responsive" height="514" src="{{ asset($tutor_photo) }}">
            </div>
        </div>
        <div class="col-sm d-flex flex-column justify-content-end">
            <div class="name-tutor text-blue">{{ $tutor_name }}</div>
            <div class="position-tutor text-blue">Tutor/Admission Consultant</div>
            <div class="d-flex mt-5 bottom-info-right">
                <div class="ic-tutor ic-light">
                    <img src="{{ asset("images/ic/Group62.png")}}">
                </div>
                <div class="ic-tutor ic-clock">
                    <img src="{{ asset("images//ic/Group53.png")}}">
                </div>
                <div class="ic-tutor ic-az">
                    <img src="{{ asset("images/ic/Group39.png")}}">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 container-fluid content-info">
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
