@php
use App\Utilities\SelectionByClass;
@endphp
<div class="position-relative">
    <div class="container-fluid bg-primary p-1 text-center">
        <span class="text-white text-justify text-center">
            <img src={{asset("images/ic/ic_wireless.svg")}}>【IELTS】新型冠狀病毒影響下的最新考試安排 ⾦鐘及尖沙咀英語教學中⼼暫停向公眾開放 ，直⾄另⾏通知
            。如有其他需要，必須預約才可進入⼤樓 。更新⽇期: 2021年1⽉8⽇星期五
        </span>
    </div>
    <nav class="navbar navbar-expand-lg bg-white py-3">
        <button id="openNavbar" class="navbar-toggler pr-0 pl-0 mr-3" type="button" data-toggle="collapse"
            data-target="#navb" aria-expanded="false">
            <img src="{{asset("images/ic/ic-collapse.png")}}" width="38">
        </button>
        <a class="navbar-brand m-0" href="{{ URL::route('site.home') }}">
            <img class="logo" width="200" src={{ asset("images/HeliosLogo.svg")}}>
        </a>
        <div class="navbar-collapse collapse ml-3 navbar-small" id="navb">
            <div class="navbar-small-close d-lg-none">
                <div class="d-flex justify-content-between p-4">
                    @if(Auth::check())
                    <div class="d-flex align-items-center flex-wrap w-75">
                        @if(empty(Auth::user()->avatar))
                        <img width="45" height="45" class="rounded-circle" src="{{asset('images/user_default.png')}}">
                        @else
                        <img width="45" height="45" class="rounded-circle"
                            src="{{asset('/file/'.Auth::user()->avatar->id)}}">
                        @endif
                        <p class="mb-0 ml-3 text-primary text-wrap text-truncate">{{Auth::user()->name}}</p>
                    </div>
                    @else
                    <img height="45" src={{ asset("images/ic/ic_helios.svg")}}>
                    @endif
                    <button class="h2 mb-0 p-0 btn bg-white" id="closeNavbar" type="button" data-toggle="collapse"
                        data-target="#navb" aria-expanded="true"><span class="mb-auto">×</span>
                    </button>
                </div>
            </div>
            <div class="px-4 pb-4 d-block d-md-none">
                <form class="form-inline my-lg-0" action="{{ route('site.course.search') }}">
                    <div class="search w-100 d-flex px-3 py-1">
                        <span class=""><img src="{{asset("images/ic/ic_search.svg")}}" width="26"></span>
                        <input name="course" class="ip-search w-100" type="text"
                            placeholder="@lang('keywords.footer.searchForCourses')">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav mr-auto navbar-responsive ml-lg-4">
                <li class="nav-item item-header dropdown d-md-none">
                    <a class="nav-link dropdown-toggle" href="#" id="navLang" data-toggle="dropdown">
                        {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                    <div class="dropdown-menu bg-primary border border-white rounded-0">
                        @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                        @endif
                        @endforeach
                    </div>
                </li>
                <li class="nav-item item-header">
                    <a class="nav-link" href={{ URL::route('site.teams') }}>@lang('keywords.navBar.mentorTeam')</a>
                </li>
                <li class="nav-item dropdown item-header">
                    <a class="nav-link dropdown-toggle" href="#" id="certificateDrop" data-toggle="dropdown">
                        @lang('keywords.navBar.subjects')
                    </a>
                    <div class="dropdown-menu bg-primary py-1 px-1 border border-white rounded-0"
                        aria-labelledby="certificateDrop">
                        @foreach(SelectionByClass::getValues(\App\Models\Certificate::class,'certificate_code', 'id') as
                        $key => $value)
                        @if ($key)
                        <a class="dropdown-item"
                            href="{{ URL::route('site.certificate.show',$key, true)}}">{{$value}}</a>
                        @endif
                        @endforeach
                    </div>
                </li>
                <li class="nav-item item-header">
                    <a class="nav-link" href="{{ URL::route('site.news') }}">@lang('keywords.navBar.latestNews')</a>
                </li>
                <li class="nav-item item-header">
                    <a class="nav-link"
                        href="{{ URL::route('site.show-blog') }}">@lang('keywords.navBar.learningColumn')</a>
                </li>
                <li class="nav-item item-header">
                    <a class="nav-link" href="{{ URL::route('site.post.index') }}">@lang('keywords.navBar.q&aArea')</a>
                </li>
                <hr class="m-0">
                @if(Auth::check())
                <li class="nav-item item-header d-md-none">
                    <a class="nav-link" href="{{ route('site.user.course') }}">@lang('keywords.footer.myCourses')
                    </a>
                </li>
                <li class="nav-item item-header d-md-none">
                    <a class="nav-link"
                        href="{{ URL::route('site.user.wishlist') }}">@lang('keywords.coursePage.wishlist')</a>
                </li>
                <li class="nav-item item-header d-md-none">
                    <a class="nav-link"
                        href="{{ URL::route('site.user.wallet') }}">@lang('keywords.wallet.myWallet')</a>
                </li>
                <li class="nav-item item-header d-md-none">
                    <a class="nav-link"
                        href="{{ URL::route('site.user.calendar') }}">@lang('keywords.footer.mySchedule')
                    </a>
                </li>
                <li class="nav-item item-header d-md-none">
                    <a class="nav-link d-flex justify-content-between"
                        href="{{ URL::route('site.profile.show', Auth::user()->id) }}">
                        @lang('keywords.navBar.profile')
                    </a>
                </li>
                <li class="nav-item item-header d-md-none">
                    <a class="nav-link d-flex justify-content-between" href="{{ URL::route('site.userLogout')}}">
                        @lang('keywords.navBar.logOut')
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <div id="overlay" class="overlay position-fixed" style="display: none"></div>
        <div class="d-flex ml-auto">
            @if(Auth::check())
            @if(Auth::user()->hasRole('student'))
            <div class="nav-item py-1 user-cart d-none d-xl-block">
                <a class="btn-link bg-white" href="{{route('site.payment-history')}}">
                    <img src={{asset("images/ic/ic_cart.svg")}} width="21px">
                </a>
            </div>
            @endif
            <div class="nav-item ml-2 user-name d-none d-xl-block">
                <a class="nav-link px-0 mr-1">
                    {{Auth::user()->name}}
                </a>
            </div>
            <div class="nav-item dropdown p-0 border-0 d-none d-md-block ml-auto">
                <a class="btn btn-link bg-white" id="navbardrop" data-toggle="dropdown">
                    <img src={{asset("images/ic/ic_user.svg")}} width="24">
                </a>
                <div class="dropdown-menu bg-primary py-1 px-1 border border-white rounded-0">
                    @if (Auth::user()->hasRole('student'))
                    <a class="dropdown-item"
                        href="{{ URL::route('site.user.wishlist') }}">@lang('keywords.coursePage.wishlist')</a>
                    <a class="dropdown-item"
                        href="{{ URL::route('site.user.wallet') }}">@lang('keywords.wallet.myWallet')</a>
                    <a class="dropdown-item"
                        href="{{ URL::route('site.profile.show', Auth::user()->id) }}">@lang('keywords.navBar.profile')</a>
                    @endif
                    <a class="dropdown-item"
                        href="{{ URL::route('site.userLogout')}}">@lang('keywords.navBar.logOut')</a>
                </div>
            </div>
            @else
            <!-- Button login modal -->
            <button type="button" class="btn btn-header py-0 border-primary" data-toggle="modal"
                data-target="#loginModal" id="login">
                @lang('keywords.navBar.login')
            </button>
            <x-login.login></x-login.login>
            <!-- Button Register Modal -->
            <button type="button" class="btn btn-header py-0 border-primary d-none d-md-block" data-toggle="modal"
                data-target="#registerModal" id="register">
                @lang('keywords.navBar.register')
            </button>
            <x-login.register></x-login.register>
            @endif

        </div>
        <div class="d-none d-md-block">
            <ul class="navbar-nav flex-row ml-1">
                @if (Auth::check() && Auth::User()->hasRole('student'))
                <li class="nav-item item-header p-2">
                    <a class="nav-link" href="{{ route('site.user.course') }}">@lang('keywords.footer.myCourses')
                    </a>
                </li>
                <li class="nav-item item-header p-2">
                    <a class="nav-link"
                        href="{{ URL::route('site.user.calendar') }}">@lang('keywords.footer.mySchedule')
                    </a>
                </li>
                @endif
                <li class="nav-item item-header dropdown p-2">
                    <a class="nav-link dropdown-toggle px-3" href="#" id="navbardrop" data-toggle="dropdown">
                        {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                    <div
                        class="dropdown-menu bg-primary border border-white rounded-0 dropdown-menu-language position-absolute">
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
@push('showNavbar')
<script type="application/javascript">
    $(document).ready(function () {
            $('#openNavbar').click(function () {
                document.getElementById('overlay').style.display = 'inline-block';
            });
        });
        $(document).ready(function () {
            $('#closeNavbar').click(function () {
                document.getElementById('overlay').style.display = 'none';
            });
        });
</script>
@endpush
