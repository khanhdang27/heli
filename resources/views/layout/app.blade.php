<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-logged.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-calendar.css')}}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css')}}" rel="stylesheet">
    <link href="{{ asset('js/lib/main.css')}}" rel="stylesheet">
    <link href="{{asset('cpanel/assets/fonts/feather/feather.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('js/swiper/swiper-bundle.min.css')}}" />

    <script src="{{ asset('js/sharethis.js') }}"></script>
    <script src="{{ asset('js/anime.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>

    <script src="{{asset('js/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</head>

<body>
    @include('layout.header')

    <div id="app">
        {{-- <example-component></example-component> --}}
        @yield('content')
    </div>
    @routes
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/lib/main.js') }}"></script>
    <script src="{{ asset('js/home/app.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{asset('js/vue@2.6.14')}}"></script>
    @stack('scripts')
    @stack('scriptsLogin')
    @stack('inputFile')
    @stack('showNavbar')
    @include('layout.footer')
    <script type="application/javascript">
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?26718';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
            "enabled": true,
            "chatButtonSetting": {
                "backgroundColor": "#0b487d",
                "ctaText": "",
                "borderRadius": "25",
                "marginLeft": "0",
                "marginBottom": "50",
                "marginRight": "50",
                "position": "right"
            },
            "brandSetting": {
                "brandName": "Helios",
                "brandSubTitle": "",
                "brandImg": "{{ asset('images/ic/ic_helios.png') }}",
                "welcomeText": "Hi there!\nHow can I help you?",
                "messageText": "Hello, I have a question",
                "backgroundColor": "#0b487d",
                "ctaText": "Start Chat",
                "borderRadius": "25",
                "autoShow": false,
                "phoneNumber": "85292296725"
            }
        };
        s.onload = function () {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>

</body>

</html>