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
            <!-- Navigation -->
            <ul class="navbar-nav">

                @can('banner-list')
                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.banner')) active @endif"
                        href="{{ route('admin.banner.index') }}">
                        <i class="fe fe-image"></i> Banners
                    </a>
                </li>
                @endcan

                @can('certificate-list')
                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.certificate')) active @endif"
                        href="{{ route('admin.certificate.index') }}">
                        <i class="fe fe-file-text"></i> Certificates
                    </a>
                </li>
                @endcan

                @can('subject-list')
                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.subject')) active @endif"
                        href="{{ route('admin.subject.index') }}">
                        <i class="fe fe-book-open"></i> Subjects
                    </a>
                </li>
                @endcan

                @can('course-list')
                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.course.')) active @endif"
                        href="{{ route('admin.course.index') }}">
                        <i class="fe fe-book-open"></i> Courses
                    </a>
                </li>
                @endcan

                @can('document-list')
                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.course-material')) active @endif"
                        href="{{ route('admin.course-material.index') }}">
                        <i class="fe fe-file"></i> Materials
                    </a>
                </li>
                @endcan

                @can('blog-list')
                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.tag')) active @endif"
                        href="{{ route('admin.tag.index') }}">
                        <i class="fe fe-hash"></i> Tags
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.blog')) active @endif"
                        href="{{ route('admin.blog.index') }}">
                        <i class="fe fe-layout"></i> Blog Post
                    </a>
                </li>
                @endcan

                @can('forum-list')
                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.forum')) active @endif"
                        href="{{ route('admin.forum.index') }}">
                        <i class="fe fe-layout"></i> Forum Post
                    </a>
                </li>
                @endcan

                @can('news-list')

                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.news')) active @endif"
                        href="{{ route('admin.news.index') }}">
                        <i class="fe fe-layout"></i> News
                    </a>
                </li>
                @endcan

                @can('discount-list')
                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.discount')) active @endif"
                        href="{{ route('admin.discount.index') }}">
                        <i class="fe fe-percent"></i> Discount
                    </a>
                </li>
                @endcan

                @can('price-list')
                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.price-tag')) active @endif"
                        href="{{ route('admin.price-tag.index') }}">
                        <i class="fe fe-tag"></i> Price Publish
                    </a>
                </li>
                @endcan

                @can('membership-list')
                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.membership')) active @endif"
                        href="{{ route('admin.membership.index') }}">
                        <i class="fe fe-users"></i> Membership
                    </a>
                </li>
                @endcan
                @can('examination-list')

                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.examination')) active @endif"
                        href="{{ route('admin.examination.index') }}">
                        <i class="fe fe-file-text"></i> Examinations
                    </a>
                </li>
                @endcan

                <!-- Divider -->
                <hr class="navbar-divider border border-secondary w-75 my-1">

                <li class="nav-item">
                    @php
                    $is_aria_expanded = (
                    Str::startsWith(request()->route()->getName(), 'admin.user-manager.student') ||
                    Str::startsWith(request()->route()->getName(), 'admin.user-manager.tutor') ||
                    Str::startsWith(request()->route()->getName(), 'admin.tutor') ||
                    Str::startsWith(request()->route()->getName(), 'admin.user-manager.moderator')
                    ) ? 'true' : 'false' ;

                    @endphp
                    <a class="nav-link" data-toggle="collapse" href="#collapseUserManager" role="button"
                        aria-expanded="{{ $is_aria_expanded }}" aria-controls="collapseUserManager">
                        <i class="fe fe-user"></i> User Manager
                    </a>
                    <div class="collapse {{ $is_aria_expanded == 'true' ? 'show' : '' }}" id="collapseUserManager">
                        <ul class="nav nav-sm flex-column">
                            @can('student-list')
                            <li class="nav-item">
                                <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.user-manager.student')) active @endif"
                                    href="{{ route('admin.user-manager.student') }}">Student</a>
                            </li>
                            @endcan
                            @can('student-list')
                            <li class="nav-item">
                                <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.user-manager.tutor') || Str::startsWith(request()->route()->getName(), 'admin.tutor') ) active @endif"
                                    href="{{ route('admin.user-manager.tutor') }}">Tutor</a>
                            </li>
                            @endcan
                            @can('student-list')
                            <li class="nav-item">
                                <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.user-manager.moderator')) active @endif"
                                    href="{{ route('admin.user-manager.moderator') }}">Moderator</a>
                            </li>
                            @endcan
                        </ul>
                    </div>
                </li>
                @can('subscribe-list')
                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.user-subscribe')) active @endif"
                        href="{{ route('admin.user-subscribe') }}">
                        <i class="fe fe-mail"></i> User Subscribe
                    </a>
                </li>
                @endcan
                @can('study_session-list')

                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.study-session')) active @endif"
                        href="{{ route('admin.study-session.index') }}">
                        <i class="fe fe-video"></i> Study Session
                    </a>
                </li>
                @endcan
                @role(['super-admin'])
                <li class="nav-item">
                    <a class="nav-link @if(Str::startsWith(request()->route()->getName(), 'admin.roles.index')) active @endif"
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