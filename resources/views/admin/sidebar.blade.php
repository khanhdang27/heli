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
                @can('banner-list')
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.banner.index') active @endif"
                        href="{{ route('admin.banner.index') }}">
                        <i class="fe fe-image"></i> Banners
                    </a>
                </li>
                @endcan

                @can('certificate-list')
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.certificate.index') active @endif"
                        href="{{ route('admin.certificate.index') }}">
                        <i class="fe fe-file-text"></i> Certificates
                    </a>
                </li>
                @endcan

                @can('subject-list')
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.subject.index') active @endif"
                        href="{{ route('admin.subject.index') }}">
                        <i class="fe fe-book-open"></i> Subjects
                    </a>
                </li>
                @endcan

                @can('course-list')
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.course.index') active @endif"
                        href="{{ route('admin.course.index') }}">
                        <i class="fe fe-book-open"></i> Courses
                    </a>
                </li>
                @endcan

                @can('document-list')
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.course-material.index') active @endif"
                        href="{{ route('admin.course-material.index') }}">
                        <i class="fe fe-file"></i> Materials
                    </a>
                </li>
                @endcan

                @can('blog-list')
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.tag.index') active @endif"
                        href="{{ route('admin.tag.index') }}">
                        <i class="fe fe-hash"></i> Tags
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.blog.index') active @endif"
                        href="{{ route('admin.blog.index') }}">
                        <i class="fe fe-layout"></i> Blog Post
                    </a>
                </li>
                @endcan

                @can('forum-list')
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.forum.index') active @endif"
                        href="{{ route('admin.forum.index') }}">
                        <i class="fe fe-layout"></i> Forum Post
                    </a>
                </li>
                @endcan

                @can('news-list')

                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.news.index') active @endif"
                        href="{{ route('admin.news.index') }}">
                        <i class="fe fe-layout"></i> News
                    </a>
                </li>
                @endcan

                @can('discount-list')
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.discount.index') active @endif"
                        href="{{ route('admin.discount.index') }}">
                        <i class="fe fe-percent"></i> Discount
                    </a>
                </li>
                @endcan

                @can('price-list')
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.price-tag.index') active @endif"
                        href="{{ route('admin.price-tag.index') }}">
                        <i class="fe fe-tag"></i> Price Publish
                    </a>
                </li>
                @endcan

                @can('membership-list')
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.membership.index') active @endif"
                        href="{{ route('admin.membership.index') }}">
                        <i class="fe fe-users"></i> Membership
                    </a>
                </li>
                @endcan
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.examination.index') active @endif"
                        href="{{ route('admin.examination.index') }}">
                        <i class="fe fe-file-text"></i> Examinations
                    </a>
                </li>

                <!-- Divider -->
                <hr class="navbar-divider border border-secondary w-75 my-1">

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#collapseUserManager" role="button"
                        aria-expanded="false" aria-controls="collapseUserManager">
                        <i class="fe fe-user"></i> User Manager
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
                        <i class="fe fe-mail"></i> User Subscribe
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.study-session.index') active @endif"
                        href="{{ route('admin.study-session.index') }}">
                        <i class="fe fe-video"></i> Study Session
                    </a>
                </li>
                @role(['super-admin'])
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'admin.roles.index') active @endif"
                        href="{{ route('admin.roles.index') }}">
                        <i class="fe fe-user-check"></i> Roles
                    </a>
                </li>
                @endrole

            </ul>
            <div class="mt-auto"></div>
        </div>
        <!-- / .navbar-collapse -->

    </div>
</nav>