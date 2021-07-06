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
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-logged.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-calendar.css')}}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css')}}" rel="stylesheet">
    <link href="{{ asset('js/lib/main.css')}}" rel="stylesheet">
</head>
<body>
    @include('layout.header')

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    @yield('content')

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/lib/main.js') }}"></script>
    <script src="{{ asset('js/home/app.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>

    @stack('likePost')
    @stack('scripts')
    @stack('scriptsLogin')
    @stack('inputFile')

    @include('layout.footer')
    <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?37547';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
      "enabled":true,
      "chatButtonSetting":{
          "backgroundColor":"#0b487d",
          "ctaText":"",
          "borderRadius":"25",
          "marginLeft":"0",
          "marginBottom":"50",
          "marginRight":"50",
          "position":"right"
      },
      "brandSetting":{
          "brandName":"Helios",
          "brandSubTitle":"",
          "brandImg":"https://project.nironcrm.tk/helios/public/images/logo_chat.png",
          "welcomeText":"Hi there!\nHow can I help you?",
          "messageText":"Hello, I have a question about Helios",
          "backgroundColor":"#e6c06c",
          "ctaText":"Start Chat",
          "borderRadius":"25",
          "autoShow":false,
          "phoneNumber":"85292296725"
      }
    };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>
</body>
</html>
