<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-dark" style="" id="sidebar">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse"
                aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('images/HeliosLogo.png') }}" class="navbar-brand-img
              mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="{{ asset("cpanel/assets/img/avatars/profiles/avatar-1.jpg") }}" class="avatar-img rounded-circle"
                             alt="...">
                    </div>
                </a>
                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                    <a href="profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="settings.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

            </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fe fe-search"></span>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">
                {{-- <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.dashboard') active @endif"
                       href="{{ route('admin.dashboard') }}">
                        <i class="fe fe-home"></i> Dashboards
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.certificate.index') active @endif"
                       href="{{ route('admin.certificate.index') }}">
                        <i class="fe fe-clipboard"></i> Certificates
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.subject.index') active @endif"
                       href="{{ route('admin.subject.index') }}">
                        <i class="fe fe-clipboard"></i> Subjects
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.tutor.index') active @endif"
                       href="{{ route('admin.tutor.index') }}">
                        <i class="fe fe-clipboard"></i> Tutors
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.course.index') active @endif"
                       href="{{ route('admin.course.index') }}">
                        <i class="fe fe-clipboard"></i> Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.material.index') active @endif"
                       href="{{ route('admin.course-material.index') }}">
                        <i class="fe fe-clipboard"></i> Materials
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.banner.index') active @endif"
                       href="{{ route('admin.banner.index') }}">
                        <i class="fe fe-clipboard"></i> Banners
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.user.index') active @endif"
                       href="{{ route('admin.user.index') }}">
                        <i class="fe fe-clipboard"></i> Membership
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.tag.index') active @endif"
                       href="{{ route('admin.tag.index') }}">
                        <i class="fe fe-clipboard"></i> Tags
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.blog.index') active @endif"
                       href="{{ route('admin.blog.index') }}">
                        <i class="fe fe-clipboard"></i> Blog Post
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.news.index') active @endif"
                       href="{{ route('admin.news.index') }}">
                        <i class="fe fe-clipboard"></i> News
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.roles.index') active @endif"
                       href="{{ route('admin.roles.index') }}">
                        <i class="fe fe-clipboard"></i> Roles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.discount.index') active @endif"
                       href="{{ route('admin.discount.index') }}">
                        <i class="fe fe-clipboard"></i> Discount
                    </a>
                </li>
                
            </ul>
            <!-- Divider -->
            <hr class="navbar-divider my-3">
            <div class="mt-auto"></div>
        </div>
        <!-- / .navbar-collapse -->

    </div>
</nav>
