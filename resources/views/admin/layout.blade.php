<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('cpanel/assets/fonts/feather/feather.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cpanel/assets/libs/flatpickr/dist/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cpanel/assets/libs/quill/dist/quill.core.css') }}">
    <link rel="stylesheet" href="{{ asset('cpanel/assets/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cpanel/assets/libs/highlight.js/styles/vs2015.css') }}">
    <link rel="stylesheet" href="{{ asset('cpanel/assets/libs/dropzone/dist/min/dropzone.min.css') }}">

    <link rel='stylesheet' id='flatpickr-style-css'  href='https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css?ver=5.2.4' type='text/css' media='all' />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('cpanel/assets/css/theme.min.css') }}" id="stylesheetLight">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
    @stack('css')

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
    @if ($alertFm = Session::get('errors'))
        <div class="alert text-center alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {!! $alertFm !!}
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    @yield('content')

</div>

<script src="{{ asset('cpanel/assets/libs/jquery/dist/jquery.min.js') }}"></script>

<script src="{{ asset('cpanel/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('cpanel/assets/libs/@shopify/draggable/lib/es5/draggable.bundle.legacy.js') }}"></script>
<script src="{{ asset('cpanel/assets/libs/autosize/dist/autosize.min.js') }}"></script>
<script src="{{ asset('cpanel/assets/libs/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('cpanel/assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
<script src="{{ asset('cpanel/assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
<script src="{{ asset('cpanel/assets/libs/highlightjs/highlight.pack.min.js') }}"></script>
<script src="{{ asset('cpanel/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
<script src="{{ asset('cpanel/assets/libs/list.js/dist/list.min.js') }}"></script>
<script src="{{ asset('cpanel/assets/libs/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
<script>
    document.body.addEventListener("onload", function() {
        this.style.display = 'block !important';
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>

@stack('js')
@stack('inputFile')
@stack('ck-editor-init')
<!-- Plugin file -->

<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/flatpickr?ver=5.2.4'></script>

</body>
</html>
