@php
    use App\Utilities\SelectionByClass;
@endphp
<div class="container-fluid header-top bg-dark">
    <span class="text-white">
        <img src={{asset("images/ic/ic_wireless.svg")}}>【IELTS】新型冠狀病毒影響下的最新考試安排 ⾦鐘及尖沙咀英語教學中⼼暫停向公眾開放 ，直⾄另⾏通知 。如有其他需要，必須預約才可進入⼤樓 。更新⽇期: 2021年1⽉8⽇星期五
    </span>
</div>
<nav class="navbar navbar-expand-xl navbar-home">
    <a class="navbar-brand" href="{{ URL::route('site.home') }}">
        <img class="logo" src={{ asset("images/HeliosLogo.png")}}> </a>
    <button class="navbar-toggler navbar-toggler-right collapsed pr-0 pl-0 btn-collapse" type="button"
            data-toggle="collapse"
            data-target="#navb" aria-expanded="false">
        <span><img src="{{asset("images/ic/ic-collapse.png")}}" width="40"></span>
    </button>
    <div class="navbar-collapse collapse" id="navb">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item item-header">
                <a class="nav-link"
                   href={{ URL::route('site.teams') }}>@lang('keywords.navBar.mentorTeam')</a>
            </li>
            <li class="nav-item dropdown item-header item-mentorTeam">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    @lang('keywords.navBar.subjectClassification')
                </a>
                <div class="dropdown-menu my-dropdown-menu dropdown-items">
                    @foreach(SelectionByClass::getValues(\App\Models\Certificate::class,'certificate_code', 'id') as $key => $value)
                        <a class="dropdown-item" href="{{ URL::route('site.certificate.show',$key, true)}}">{{$value}}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item item-header">
                <a class="nav-link"
                   href="{{ URL::route('site.news') }}">@lang('keywords.navBar.latestNews')</a>
            </li>
            <li class="nav-item item-header">
                <a class="nav-link"
                   href="{{ URL::route('site.show-blog') }}">@lang('keywords.navBar.learningColumn')</a>
            </li>
            <li class="nav-item item-header">
                <a class="nav-link"
                   href="{{ URL::route('site.post.index') }}">@lang('keywords.navBar.q&aArea')</a>
            </li>
        </ul>
        <div class="login-bar d-flex ml-auto">
            @if(Auth::user())
                <div class="text-20 text-primary mr-3">
                    @lang('keywords.navBar.welcomeBack')<br>
                    {{Auth::user()->name}}
                </div>
            @endif
            <button class="btn-cart p-0 mr-3">
                <img src={{asset("images/ic/ic_cart.svg")}} class="color-secondary" width="40">
            </button>

            @if(Auth::user())
                <button class="nav-item dropdown p-0 border-0 m-auto btn-cart">
                    <a class="btn-account text-decoration-none" id="navbardrop" data-toggle="dropdown">
                        <img src={{asset("images/ic/ic_user.svg")}} width="40">
                    </a>
                    <div class="dropdown-menu my-dropdown-menu language-item">
                        <a class="dropdown-item" href="{{ URL::route('site.profile.show', Auth::user()->id) }}">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="{{ URL::route('site.userLogout')}}">Log out</a>
                    </div>
                </button>
            @endif
            @if (Auth::guest())
            <!-- Button login modal -->
                <button type="button" class="btn-header btn-primary" data-toggle="modal" data-target="#loginModal"
                        id="login">
                    @lang('keywords.navBar.login')
                </button>
                <x-login.login></x-login.login>
            <!-- Button Register Modal -->
                <button type="button" class="btn-header btn-primary" data-toggle="modal" data-target="#registerModal"
                        id="register">
                    @lang('keywords.navBar.register')
                </button>
                <x-login.register></x-login.register>
                @else
                <div class="p-3">
                    <a class="text-center"
                       href="#">@lang('keywords.footer.myCourses')
                    </a>
                </div>
                <div class="p-3">
                    <a class="text-center"
                       href="{{ URL::route('site.user.calendar') }}">@lang('keywords.footer.mySchedule')
                        </a>
                    </div>
                @endif
            <button class="nav-item dropdown text-white bg-white btn-language p-0 border-0 m-auto text-decoration-none">
{{--                <a class="btn-account dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">--}}
{{--                    繁--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-lang language-item">--}}
{{--                    <a class="dropdown-item" href="#">繁</a>--}}
{{--                    <a class="dropdown-item" href="#">ENG</a>--}}
{{--                </div>--}}
                <a class="btn-account dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >
                    {{ Config::get('languages')[App::getLocale()] }}
                </a>
                <div class="dropdown-menu dropdown-lang language-item">
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                        @endif
                    @endforeach
                </div>
            </button>
        </div>
    </div>

</nav>
