@php
    use App\Utilities\SelectionByClass;
@endphp
<div>
    <div class="container-fluid bg-primary p-1 text-center">
        <span class="text-white text-justify text-center">
            <img src={{asset("images/ic/ic_wireless.svg")}}>【IELTS】新型冠狀病毒影響下的最新考試安排 ⾦鐘及尖沙咀英語教學中⼼暫停向公眾開放 ，直⾄另⾏通知 。如有其他需要，必須預約才可進入⼤樓 。更新⽇期: 2021年1⽉8⽇星期五
        </span>
    </div>
    <nav class="navbar navbar-expand-xl bg-white py-3">
        <a class="navbar-brand mr-4" href="{{ URL::route('site.home') }}">
            <img class="logo" width="200" src={{ asset("images/HeliosLogo.svg")}}>
        </a>
        <button class="navbar-toggler navbar-toggler-right collapsed pr-0 pl-0 btn-collapse" type="button"
                data-toggle="collapse"
                data-target="#navb" aria-expanded="false">
            <img src="{{asset("images/ic/ic-collapse.png")}}" width="40">
        </button>
        <div class="navbar-collapse collapse ml-3" id="navb">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item item-header">
                    <a class="nav-link"
                    href={{ URL::route('site.teams') }}>@lang('keywords.navBar.mentorTeam')</a>
                </li>
                <li class="nav-item dropdown item-header">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        @lang('keywords.navBar.subjectClassification')
                    </a>
                    <div class="dropdown-menu bg-primary py-1 px-1 border border-white rounded-0">
                        @foreach(SelectionByClass::getValues(\App\Models\Certificate::class,'certificate_code', 'id') as $key => $value)
                            @if ($key != 1)
                            <a class="dropdown-item" href="{{ URL::route('site.certificate.show',$key, true)}}">{{$value}}</a>
                            @endif
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
                        <a class="nav-link px-0 mr-1">
                            @lang('keywords.navBar.welcomeBack')<br>
                            {{Auth::user()->name}}
                        </a>
                    </div>
                    <div class="nav-item dropdown p-0 border-0">
                        <a class="btn btn-link bg-white pt-3" id="navbardrop" data-toggle="dropdown">
                            <img src={{asset("images/ic/ic_user.svg")}} width="24">
                        </a>
                        <div class="dropdown-menu bg-primary py-1 px-1 border border-white rounded-0">
                            <a class="dropdown-item" href="{{ URL::route('site.profile.show', Auth::user()->id) }}">Profile</a>
                            <a class="dropdown-item" href="{{ URL::route('site.userLogout')}}">Log out</a>
                        </div>
                    </div>
                @else
                    <!-- Button login modal -->
                    <button type="button" class="btn btn-header py-0 border-primary" data-toggle="modal" data-target="#loginModal"
                            id="login">
                        @lang('keywords.navBar.login')
                    </button>
                    <x-login.login></x-login.login>
                    <!-- Button Register Modal -->
                    <button type="button" class="btn btn-header py-0 border-primary" data-toggle="modal" data-target="#registerModal"
                            id="register">
                        @lang('keywords.navBar.register')
                    </button>
                    <x-login.register></x-login.register>
                @endif

            </div>
            <ul class="navbar-nav ml-1">
                @if (Auth::check() && Auth::User()->hasRole('student'))
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
                    <div class="dropdown-menu bg-primary border border-white rounded-0 dropdown-menu-language">
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
