<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-logged.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-calendar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    <link href="{{ asset('js/lib/main.css') }}" rel="stylesheet">
    <link href="{{ asset('cpanel/assets/fonts/feather/feather.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('js/swiper/swiper-bundle.min.css') }}"/>
    <script type="text/javascript"
            src="https://platform-api.sharethis.com/js/sharethis.js#property=60e7b308b06e7600197f484d&product=inline-share-buttons"
            async="async"></script>


    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('js/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/anime.min.js') }}"></script>
</head>

<body>
<div id="app">
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
</div>
@routes
<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('js/popper.min.js') }}"></script>
{{--    <script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
<script src="{{ asset('js/lib/main.js') }}"></script>
<script src="{{ asset('js/home/app.js') }}"></script>
<script src="{{ asset('js/vue@2.6.14') }}"></script>
@stack('scripts')
@stack('scriptsLogin')
@stack('inputFile')
@stack('showNavbar')


<script src="{{ asset('js/sharethis.js') }}"></script>


<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 13349400;
    ;(function (n, t, c) {
        function i(n) {
            return e._h ? e._h.apply(null, n) : e._q.push(n)
        }

        var e = {
            _q: [], _h: null, _v: "2.0", on: function () {
                i(["on", c.call(arguments)])
            }, once: function () {
                i(["once", c.call(arguments)])
            }, off: function () {
                i(["off", c.call(arguments)])
            }, get: function () {
                if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                return i(["get", c.call(arguments)])
            }, call: function () {
                i(["call", c.call(arguments)])
            }, init: function () {
                var n = t.createElement("script");
                n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
            }
        };
        !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
    }(window, document, [].slice))
</script>
<noscript>
    <a href="https://www.livechatinc.com/chat-with/13349400/" rel="nofollow">Chat with us</a>, powered by <a
        href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>
<!-- End of LiveChat code -->
</body>

</html>
