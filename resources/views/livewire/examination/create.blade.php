@php
use App\Models\Examination;
@endphp

<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
            <!-- Goals -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="pr-2">
                            <a class="btn btn-outline-dark btn-sm"
                                href="{{ route('admin.course.lecture.list', $course->id) }}">
                                <i class="fe fe-arrow-left"></i>
                            </a>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Examination
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="save">
                        <div class="form-group">
                            <label for="name"> Name </label>
                            {!! Form::text('name', 0, ['class' => 'form-control', 'required', "wire:model"=>"examination.name"]) !!}
                            @error('examination.name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="index">Index</label>
                            {!! Form::number('index', 0, ['class' => 'form-control', 'required', "wire:model"=>"examination.index"]) !!}
                            @error('examination.index') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            {!! Form::select('type', Examination::TYPES, null,['class' => 'form-control', 'required', "wire:model"=>"examination.type"]) !!}
                            @error('examination.type') <span class="error">{{ $message }}</span> @enderror
                        </div>
                     
                        <div class="d-flex">
                            <button type="submit" class="btn btn-success ml-auto"> Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div>
