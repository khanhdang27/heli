<div class="pt-3 reviews">
    <div class="row">
        <div class="col-sm">
            <div>
                @if (!empty($courseDetail->tutor->user->avatar))
                <img class="ava-responsive" height="514" src="{{ asset("file/".$courseDetail->tutor->user->avatar->id) }}">
                @else
                <img class="ava-responsive" height="514" src="{{ asset("images/user_default.png") }}">
                @endif
            </div>
        </div>
        <div class="col-sm d-flex flex-column justify-content-end">
            <div class="name-tutor text-primary font-weight-bold h3">{{ $courseDetail->tutor->full_name }}</div>
            <div class="position-tutor text-primary h3">Tutor/Admission Consultant</div>
        </div>
    </div>
    <div class="mt-5 container-fluid content-info text-primary">
        <div class="mb-5">
            {{ $courseDetail->tutor->tutor_info }}
        </div>
        <div>
            ► {{ $courseDetail->tutor->tutor_level }}
        </div>
        <div>
            ► {{ $courseDetail->tutor->tutor_specialized }}
        </div>
        <div>
            ► {{ $courseDetail->tutor->tutor_experience }}
        </div>
    </div>
</div>
