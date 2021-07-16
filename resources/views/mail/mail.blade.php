<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body {
            font-size: 16px;
            color: #0B487D;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .mail {
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .head-mail {
            /* display: flex; */
            /* flex-direction: column; */
            align-items: center;
            justify-content: center;
            background-color: #FFFFFF;
            padding: 32px 16px 32px 16px;
        }

        .head-mail hr {
            width: 100%;
            height: 1px;
            background-color: #cccccc;
            border: none;
        }

        .head-mail h1 {
            font-weight: bold;
            text-align: center;
            margin-bottom: 0;
            color: #E6C06C;
        }

        .body-mail {
            background-color: #FFFFFF;
            padding: 16px;
        }

        .body-mail h3 {
            font-weight: bold;
        }

        .body-mail p {
            font-weight: bold;
            margin-bottom: 16px;
        }

        .body-mail span {
            font-weight: normal;
        }

        .body-mail h4 {
            font-weight: normal;
        }

        .footer-mail {
            background-color: #294157;
        }

        .footer-mail div {
            display: flex;
            justify-content: center;
            padding-top: 20px;
        }

        .footer-mail p {
            margin: 0;
            text-align: center;
            padding: 16px 0 16px 0;
            color: #FFFFFF;
        }
    </style>
</head>
<body>

<div class="mail">
    <div class="head-mail">
        <img src="{{asset('images/HeliosLogo.png')}}" width=200>
        <br>
        <hr>
        <br>
        <h1 >
            Welcome!
        </h1>
    </div>
    <div class="body-mail">
        <h3>
            {{$title}}
        </h3>
        <p>Password: <span>{{$password}}</span></p>
        <h4>
            If you have any questions contact us with this link
            <span style="color: #00b0e8">admissions@helios-edu.com</span>.
        </h4>
    </div>
    <div class="footer-mail">
        <div>
            <a href="whatsapp://send?text=Hello!&phone=+85226021668">
                <img style="margin-right: 16px" src="{{asset('images/ic/image-4.png')}}" width=32>
            </a>
            <a href="mailto:adminssions@helios-edu.com">
                <img src="{{asset('images/ic/image-3.png')}}" width=32>
            </a>
        </div>
        <p>
            Helios Education
        </p>
    </div>

</div>

</body>
</html>
