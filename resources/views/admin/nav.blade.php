<nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
    <div class="container-fluid">
        <div class="d-none d-md-flex">
            <div>
                <h4 class="text-dark">
                    {{Auth::user()->name}}
                </h4>
                <sub class="d-block"> {{ Auth::user()->email }} </sub>

            </div>
        </div>
        <!-- User -->
        <div class="navbar-user">
            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    @if(empty(Auth::user()->avatar))
                    <img src="{{asset('/images/user_default.png')}}" alt="..." class="avatar-img rounded-circle">
                    @else
                    <img src="{{asset('/file/'.Auth::user()->avatar->id)}}" alt="..." class="avatar-img rounded-circle">
                    @endif
                </a>
                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right">
                    @if (Auth::user()->hasRole('tutor'))
                    <a href="{{ route('admin.tutorProfile') }}" class="dropdown-item">Profile</a>
                    @elseif (Auth::user()->hasRole('moderator'))
                    <a href="{{ route('admin.moderatorProfile') }}" class="dropdown-item">Profile</a>
                    @elseif (Auth::user()->hasRole('super-admin'))
                    <a href="{{ route('admin.adminProfile') }}" class="dropdown-item">Profile</a>
                    @else
                    {{--  --}}
                    @endif
                    <hr class="dropdown-divider">
                    <a href="{{ URL::route('admin.logout') }}" class="dropdown-item">Logout</a>
                </div>

            </div>
        </div>
    </div>
</nav>