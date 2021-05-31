<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <link href="{{ asset('css/bootstrap/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-logged.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-calendar.css')}}" rel="stylesheet">
    <link href="{{ asset('css/toast.css')}}" rel="stylesheet">
    <link href="{{ asset('js/lib/main.css')}}" rel="stylesheet">
</head>
<body>
@include('layout.header')

@yield('content')

@include('layout.footer')
</div>
<script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/lib/main.js')}}"></script>
<script src="{{ asset('js/home/app.js')}}"></script>
@stack('scripts')
<script>
    showSubjectNav("{{ route('site.get_subject_by_parent', '') }}", "{{ route('site.subject.show', '') }}")
</script>
@stack('scriptsLogin')
</body>
</html>
