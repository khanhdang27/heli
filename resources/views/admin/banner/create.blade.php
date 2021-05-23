@extends('admin.layout')
@section('content')
    <!-- CARDS -->
    <script src="{{ asset('js/admin/upload-file-project.js') }}"></script>
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
                                    Create Banner
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open([
                                'route' => 'admin.banner.store',
                                'enctype'=>'multipart/form-data',
                                'class'=>'dropzone',
                                'id'=>"uploadFile"
                            ])  !!}
                            @csrf
                            <div class="dz-message">
                                Drag 'n' Drop Files<br>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <div id="editor">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

