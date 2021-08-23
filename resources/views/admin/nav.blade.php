<nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
    <div class="container-fluid">
        <form class="form-inline mr-4 d-none d-md-flex">
            <div class="input-group input-group-flush input-group-merge" data-toggle="lists"
                data-options="{&quot;valueNames&quot;: [&quot;name&quot;]}">
                <input type="search" class="form-control form-control-prepended dropdown-toggle search"
                    data-toggle="dropdown" placeholder="Search" aria-label="Search" aria-expanded="false">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-search"></i>
                    </div>
                </div>
            </div>
        </form>
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