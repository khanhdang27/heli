<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('cpanel/assets/fonts/feather/feather.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('cpanel/assets/libs/dropzone/dist/min/dropzone.min.css') }}">

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet'/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('cpanel/assets/css/theme.min.css') }}" id="stylesheetLight">
    {{-- <link rel="stylesheet" href="{{ asset('cpanel/assets/css/theme-dark.min.css') }}" id="stylesheetDark"> --}}
    @stack('css')
    <link href="{{ asset('css/toastr.css')}}" rel="stylesheet">
    <title>Helios</title>
</head>
<body>

@include('admin.sidebar')

<div class="main-content">
    @include('admin.nav')
    @if ($alertFm = Session::get('success'))
        <div class="alert text-center alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $alertFm }}</strong>
        </div>
    @endif
    @yield('content')

</div>


<script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('cpanel/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('cpanel/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('cpanel/assets/libs/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js')}}"></script>
<script src="{{ asset('cpanel/assets/libs/chart.js/Chart.extension.min.js') }}"></script>
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<script>
    document.body.addEventListener("onload", function() {
        this.style.display = 'block !important';
    });
</script>


@stack('js')
@stack('inputFile')
@stack('ck-editor-init')
</body>
</html>
