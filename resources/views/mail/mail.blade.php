<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('js/lib/main.css')}}" rel="stylesheet">
    <style>
        body{
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="mx-auto" style="max-width: 600px">
    <div class="bg-secondary w-100 py-4 px-3 d-flex flex-column align-items-center">
        <img class="mx-auto" src="{{asset('images/HeliosLogo.png')}}" width=200>
        <hr class="w-100" style="background-color: #cccccc">
        <h1 class="text-center font-weight-bold text-white">
            Welcome!
        </h1>
    </div>
    <div class="bg-white w-100 p-4">
        <h3 class="font-weight-bold text-primary">
            {{$title}}
        </h3>
        <p class="font-weight-bold mb-3">Password: <span class="font-weight-normal">{{ $password }}</span></p>
        <p>
            If you have any questions contact us with this link <span class="text-primary">admissions@helios-edu.com</span>.
        </p>
        <hr class="" style="background-color: #cccccc; border-top: 2px solid #cccccc">
    </div>
    <div class="w-100" style="background-color: #f0f0f0">
        <div class="d-flex justify-content-center pt-3">
            <a href="whatsapp://send?text=Hello!&phone=+85226021668">
                <img class="mr-3" src="{{asset('images/ic/image-4.png')}}" width=32>
            </a>
            <a href="#">
                <img src="{{asset('images/ic/image-3.png')}}" width=32>
            </a>

        </div>
        <p class="text-center pt-3 pb-3">
            Helios Education
        </p>
    </div>

</div>

</body>
</html>
