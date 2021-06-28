@php
    use App\Utilities\SelectionByClass;
@endphp
<div>
    <div class="container-fluid bg-dark p-1 text-center">
        <span class="text-white text-justify text-center">
            <img src={{asset("images/ic/ic_wireless.svg")}}>【IELTS】新型冠狀病毒影響下的最新考試安排 ⾦鐘及尖沙咀英語教學中⼼暫停向公眾開放 ，直⾄另⾏通知 。如有其他需要，必須預約才可進入⼤樓 。更新⽇期: 2021年1⽉8⽇星期五
        </span>
    </div>
    <nav class="navbar navbar-expand-xl bg-white">
        <a class="navbar-brand" href="{{ URL::route('site.home') }}">
            <img class="logo" width="150" src={{ asset("images/HeliosLogo.png")}}>
        </a>
        <button class="navbar-toggler navbar-toggler-right collapsed pr-0 pl-0 btn-collapse" type="button"
                data-toggle="collapse"
                data-target="#navb" aria-expanded="false">
            <img src="{{asset("images/ic/ic-collapse.png")}}" width="40">
        </button>
        <div class="navbar-collapse collapse" id="navb">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item item-header">
                    <a class="nav-link"
                    href={{ URL::route('site.teams') }}>@lang('keywords.navBar.mentorTeam')</a>
                </li>
                <li class="nav-item dropdown item-header">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        @lang('keywords.navBar.subjectClassification')
                    </a>
                    <div class="dropdown-menu bg-dark py-1 px-1 border border-secondary">
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

            <div class="user-space d-flex ml-auto">
                @if(Auth::check())
                    <div class="nav-item item-header">
                        <a class="nav-link mr-1">
                            @lang('keywords.navBar.welcomeBack')<br>
                            {{Auth::user()->name}}
                        </a>
                    </div>
                    <div class="nav-item item-header dropdown p-0 border-0">
                        <a class="btn btn-link bg-white" id="navbardrop" data-toggle="dropdown">
                            <img src={{asset("images/ic/ic_user.svg")}} width="40">
                        </a>
                        <div class="dropdown-menu bg-dark py-1 px-1 border border-secondary">
                            <a class="dropdown-item" href="{{ URL::route('site.profile.show', Auth::user()->id) }}">Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="{{ URL::route('site.userLogout')}}">Log out</a>
                        </div>
                    </div>
                @else
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
                @endif

            </div>
            <ul class="navbar-nav ml-1">
                @if (Auth::check())
                    <li class="nav-item item-header p-2">
                        <a class="nav-link"
                            href="{{ route('site.user.course') }}">@lang('keywords.footer.myCourses')
                        </a>
                    </li>
                    <li class="nav-item item-header p-2">
                        <a class="nav-link"
                            href="{{ URL::route('site.user.calendar') }}">@lang('keywords.footer.mySchedule')
                        </a>
                    </li>
                @endif
                <li class="nav-item item-header dropdown p-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >
                        {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                    <div class="dropdown-menu bg-dark">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                            @endif
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</div>
