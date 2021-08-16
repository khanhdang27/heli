<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-dark" style="" id="sidebar">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse"
            aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand " href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('images/HeliosLogo.svg') }}" class="navbar-brand-img mx-auto p-2 bg-white border rounded"
                alt="...">
        </a>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended"
                        placeholder="Search" aria-label="Search">
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
                    <a class="nav-link @if(request()->route()->getName() == 'admin.banner.index') active @endif"
                        href="{{ route('admin.banner.index') }}">
                        <i class="fe fe-clipboard"></i> Banners
                    </a>
                </li>
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
                    <a class="nav-link @if(request()->route()->getName() == 'admin.course.index') active @endif"
                        href="{{ route('admin.course.index') }}">
                        <i class="fe fe-clipboard"></i> Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.course-material.index') active @endif"
                        href="{{ route('admin.course-material.index') }}">
                        <i class="fe fe-clipboard"></i> Materials
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
                    <a class="nav-link @if(request()->route()->getName() == 'admin.forum.index') active @endif"
                        href="{{ route('admin.forum.index') }}">
                        <i class="fe fe-clipboard"></i> Forum Post
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.news.index') active @endif"
                        href="{{ route('admin.news.index') }}">
                        <i class="fe fe-clipboard"></i> News
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.discount.index') active @endif"
                        href="{{ route('admin.discount.index') }}">
                        <i class="fe fe-clipboard"></i> Discount
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.price-tag.index') active @endif"
                        href="{{ route('admin.price-tag.index') }}">
                        <i class="fe fe-clipboard"></i> Price Publish
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.membership.index') active @endif"
                        href="{{ route('admin.membership.index') }}">
                        <i class="fe fe-clipboard"></i> Membership
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.examination.index') active @endif"
                        href="{{ route('admin.examination.index') }}">
                        <i class="fe fe-clipboard"></i> Examinations
                    </a>
                </li>

                <!-- Divider -->
                <hr class="navbar-divider border border-secondary w-75 my-1">

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#collapseUserManager" role="button"
                        aria-expanded="false" aria-controls="collapseUserManager">
                        <i class="fe fe-clipboard"></i> User Manager
                    </a>
                    <div class="collapse" id="collapseUserManager">
                        <ul class="nav nav-sm flex-column">
                            @can('student-list')
                            <li class="nav-item">
                                <a class="nav-link @if(request()->route()->getName() == 'admin.user-manager.student') active @endif"
                                    href="{{ route('admin.user-manager.student') }}">Student</a>
                            </li>
                            @endcan
                            @can('student-list')
                            <li class="nav-item">
                                <a class="nav-link @if(request()->route()->getName() == 'admin.user-manager.tutor') active @endif"
                                    href="{{ route('admin.user-manager.tutor') }}">Tutor</a>
                            </li>
                            @endcan
                            @can('student-list')
                            <li class="nav-item">
                                <a class="nav-link @if(request()->route()->getName() == 'admin.user-manager.moderator') active @endif"
                                    href="{{ route('admin.user-manager.moderator') }}">Moderator</a>
                            </li>
                            @endcan
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.user-subscribe') active @endif"
                        href="{{ route('admin.user-subscribe') }}">
                        <i class="fe fe-clipboard"></i> User Subscribe
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.study-session.index') active @endif"
                        href="{{ route('admin.study-session.index') }}">
                        <i class="fe fe-clipboard"></i> Study Session
                    </a>
                </li>
                @role(['super-admin'])
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.roles.index') active @endif"
                        href="{{ route('admin.roles.index') }}">
                        <i class="fe fe-clipboard"></i> Roles
                    </a>
                </li>
                @endrole

            </ul>
            <div class="mt-auto"></div>
        </div>
        <!-- / .navbar-collapse -->

    </div>
</nav>