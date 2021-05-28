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

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet'/>

    <!-- Theme CSS -->

    <link rel="stylesheet" href="{{ asset('cpanel/assets/css/theme.min.css') }}" id="stylesheetLight">

    <link rel="stylesheet" href=" {{ asset('cpanel/assets/css/theme-dark.min.css') }}" id="stylesheetDark">

    <style>
        body {
            display: none;
        }</style>


    <title>Helios</title>
</head>
<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

<!-- CONTENT
================================================== -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-4 my-5">

            <!-- Heading -->
            <h1 class="display-4 text-center mb-3">
                Sign in
            </h1>

            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
                Free access to our dashboard.
            </p>

            <!-- Form -->
            <form action="" method="post">
            @csrf

            <!-- Email address -->
                <div class="form-group">

                    <!-- Label -->
                    <label>Email Address</label>

                    <!-- Input -->
                    <input type="email" class="form-control" placeholder="name@address.com" name="email">
                    @error('email')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <!-- Password -->
                <div class="form-group">

                    <div class="row">
                        <div class="col">

                            <!-- Label -->
                            <label>Password</label>

                        </div>
                    </div> <!-- / .row -->

                    <!-- Input group -->
                    <div class="input-group input-group-merge">

                        <!-- Input -->
                        <input type="password" class="form-control form-control-appended" name="password"
                               placeholder="Enter your password">
                        <!-- Icon -->
                        <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fe fe-eye"></i>
                              </span>
                        </div>
                    </div>
                    @error('password')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit -->
                <button class="btn btn-lg btn-block btn-primary mb-3">
                    Sign in
                </button>

            </form>

        </div>
    </div> <!-- / .row -->
</div> <!-- / .container -->

<!-- JAVASCRIPT
================================================== -->
<!-- Libs JS -->
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
<script src="{{ asset('cpanel/assets/libs/quill/dist/quill.min.js') }}"></script>
<script src="{{ asset('cpanel/assets/libs/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('cpanel/assets/libs/chart.js/Chart.extension.min.js') }}"></script>

<!-- Map -->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

<!-- Theme JS -->
<script src="{{ asset('cpanel/assets/js/theme.min.js') }}"></script>

</body>
</html>
