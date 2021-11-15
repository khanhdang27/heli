<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('cpanel/assets/fonts/feather/feather.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cpanel/assets/libs/select2/dist/css/select2.min.css') }}">
    <link rel='stylesheet' href="{{ asset('flatpickr/dist/flatpickr.min.css') }}" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('cpanel/assets/css/theme.min.css') }}" id="stylesheetLight">
    <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
    @stack('css')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/vue@2.6.14') }}"></script>

    <title>Helios</title>
</head>

<body>
    @include('admin.sidebar')
    <div class="main-content">
        @include('admin.nav')
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        @if ($alertFm = Session::get('success'))
            <div class="alert text-center alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $alertFm }}</strong>
            </div>
        @endif
        @if ($alertFm = Session::get('errors'))
            <div class="alert text-center alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                @if ($errors->any())
                    {!! $errors->first() !!}
                @endif
            </div>
        @endif
        @yield('content')
    </div>


    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('cpanel/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('cpanel/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cpanel/assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>

    <script type="application/javascript">
        document.body.addEventListener("onload", function() {
            this.style.display = 'block !important';

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
    <script src="{{ asset('js/moment.min.js') }}"></script>

    @stack('js')
    @stack('inputFile')
    @stack('ck-editor-init')
    <!-- Plugin file -->

    <script type='text/javascript' src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('flatpickr/dist/flatpickr.min.js') }}"></script>

</body>

</html>
