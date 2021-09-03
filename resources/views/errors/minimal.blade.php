<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .container {
            display: flex;
            flex-flow: wrap;
        }

        .center {
            align-items: center;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .code {
            border-right: 2px solid;
            font-size: 26px;
            padding: 0 15px 0 15px;
            text-align: center;
        }

        .message {
            font-size: 18px;
            text-align: center;
        }

        .break {
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="full-height center container">
        <div class="position-ref center container">
            <div class="code">
                @yield('code')
            </div>
            <div class="message" style="padding: 10px;">
                @yield('message')
            </div>
            <div class="break position-ref" style="text-align: center;">
                @yield('button')
            </div>
        </div>
    </div>
</body>

</html>