@extends('admin.layout')
@section('content')
<!-- CARDS -->
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
            <!-- Goals -->
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">

                            <!-- Title -->
                            <h4 class="card-header-title">
                                Create Discount 
                            </h4>

                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body">
                        {!! Form::open(['route' => 'admin.discount.store']) !!}
                        <div class="form-group">
                            {{ Form::label('name', 'Discount Name') }}
                            {{ Form::text('name', null,['class' => 'form-control'] ) }}
                            @error('name')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{ Form::label('start_date', 'Date Start') }}
                            {{ Form::date('start_date', null,['class' => 'form-control'] ) }}
                            @error('start_date')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{ Form::label('end_date', 'Date End') }}
                            {{ Form::date('end_date', null,['class' => 'form-control'] ) }}
                            @error('end_date')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::textarea('description', null,[
                                'class' => 'form-control',
                                'rows' => 3, 
                                ]) }}
                            @error('description')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- / .row -->
</div>
    {{-- <script>
        window.onload = function () {
            CKEDITOR.replace('ckeditor');
        };
    </script>
    @push('inputFile')
        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function () {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>
    @endpush --}}
@endsection
