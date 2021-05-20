@extends('admin.layout')
@section('content')
    <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar" style="display: none !important">
        <div class="container-fluid">

            <!-- Form -->
            <form class="form-inline mr-4 d-none d-md-flex">
                <div class="input-group input-group-flush input-group-merge" data-toggle="lists"
                     data-options="{&quot;valueNames&quot;: [&quot;name&quot;]}">

                    <!-- Input -->
                    <input type="search" class="form-control form-control-prepended dropdown-toggle search"
                           data-toggle="dropdown" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-search"></i>
                        </div>
                    </div>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-card">
                        <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush list my-n3">
                                <a href="team-overview.html"
                                   class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="./cpanel/assets/img/avatars/teams/team-logo-1.jpg" alt="..."
                                                     class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Airbnb
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 2hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a href="team-overview.html" class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="./cpanel/assets/img/avatars/teams/team-logo-2.jpg" alt="..."
                                                     class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Medium Corporation
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 2hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a href="project-overview.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="./cpanel/assets/img/avatars/projects/project-1.jpg" alt="..."
                                                     class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Homepage Redesign
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a href="project-overview.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="./cpanel/assets/img/avatars/projects/project-2.jpg" alt="..."
                                                     class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Travels &amp; Time
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a href="project-overview.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="./cpanel/assets/img/avatars/projects/project-3.jpg" alt="..."
                                                     class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Safari Exploration
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a href="profile-posts.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="./cpanel/assets/img/avatars/profiles/avatar-1.jpg" alt="..."
                                                     class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Dianna Smiley
                                            </h4>

                                            <!-- Status -->
                                            <p class="text-body small mb-0">
                                                <span class="text-success">●</span> Online
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a href="profile-posts.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="./cpanel/assets/img/avatars/profiles/avatar-2.jpg" alt="..."
                                                     class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Ab Hadley
                                            </h4>

                                            <!-- Status -->
                                            <p class="text-body small mb-0">
                                                <span class="text-danger">●</span> Offline
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                            </div>

                        </div>
                    </div> <!-- / .dropdown-menu -->

                </div>
            </form>

            <!-- User -->
            <div class="navbar-user">

                <!-- Dropdown -->
                <div class="dropdown mr-4 d-none d-md-flex">

                    <!-- Toggle -->
                    <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                  <span class="icon active">
                    <i class="fe fe-bell"></i>
                  </span>
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h5 class="card-header-title">
                                        Notifications
                                    </h5>

                                </div>
                                <div class="col-auto">

                                    <!-- Link -->
                                    <a href="#!" class="small">
                                        View all
                                    </a>

                                </div>
                            </div> <!-- / .row -->
                        </div> <!-- / .card-header -->
                        <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush my-n3">
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./cpanel/assets/img/avatars/profiles/avatar-1.jpg" alt="..."
                                                     class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Dianna Smiley</strong> shared your post
                                                with <strong class="text-body">Ab Hadley</strong>, <strong
                                                    class="text-body">Adolfo Hess</strong>, and <strong
                                                    class="text-body">3 others</strong>.
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./cpanel/assets/img/avatars/profiles/avatar-2.jpg" alt="..."
                                                     class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Ab Hadley</strong> reacted to your post
                                                with a 😍
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./cpanel/assets/img/avatars/profiles/avatar-3.jpg" alt="..."
                                                     class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Adolfo Hess</strong> commented
                                                <blockquote class="text-body">“I don’t think this really makes sense
                                                    to do without approval from Johnathan since he’s the one...”
                                                </blockquote>
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./cpanel/assets/img/avatars/profiles/avatar-4.jpg" alt="..."
                                                     class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./cpanel/assets/img/avatars/profiles/avatar-5.jpg" alt="..."
                                                     class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Miyah Myles</strong> shared your post with
                                                <strong class="text-body">Ryu Duke</strong>, <strong
                                                    class="text-body">Glen Rouse</strong>, and <strong
                                                    class="text-body">3 others</strong>.
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./cpanel/assets/img/avatars/profiles/avatar-6.jpg" alt="..."
                                                     class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Ryu Duke</strong> reacted to your post
                                                with a 😍
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./cpanel/assets/img/avatars/profiles/avatar-7.jpg" alt="..."
                                                     class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Glen Rouse</strong> commented
                                                <blockquote class="text-body">“I don’t think this really makes sense
                                                    to do without approval from Johnathan since he’s the one...”
                                                </blockquote>
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./cpanel/assets/img/avatars/profiles/avatar-8.jpg" alt="..."
                                                     class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Grace Gross</strong> subscribed to you.
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                            </div>

                        </div>
                    </div> <!-- / .dropdown-menu -->

                </div>

                <!-- Dropdown -->
                <div class="dropdown">

                    <!-- Toggle -->
                    <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="./cpanel/assets/img/avatars/profiles/avatar-1.jpg" alt="..."
                             class="avatar-img rounded-circle">
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="profile-posts.html" class="dropdown-item">Profile</a>
                        <a href="settings.html" class="dropdown-item">Settings</a>
                        <hr class="dropdown-divider">
                        <a href="sign-in.html" class="dropdown-item">Logout</a>
                    </div>

                </div>

            </div>

        </div>
    </nav>


    <!-- HEADER -->
    <div class="header bg-dark pb-5">
        <div class="container-fluid">

            <!-- Body -->
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">

                        <!-- Pretitle -->
                        <h6 class="header-pretitle text-secondary">
                            Overview
                        </h6>

                        <!-- Title -->
                        <h1 class="header-title text-white">
                            Performance
                        </h1>

                    </div>
                    <div class="col-auto">

                        <!-- Nav -->
                        <ul class="nav nav-tabs header-tabs">
                            <li class="nav-item" data-toggle="chart" data-target="#headerChart"
                                data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[0,10,5,15,10,20,15,25,20,30,25,40]}]}}"
                                data-prefix="$" data-suffix="k">
                                <a href="#" class="nav-link text-center active" data-toggle="tab">
                                    <h6 class="header-pretitle text-secondary">
                                        Earnings
                                    </h6>
                                    <h3 class="text-white mb-0">
                                        $19.2k
                                    </h3>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="chart" data-target="#headerChart"
                                data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[50,75, 35,25,55,87,67,53,25,80,87,45]}]}}"
                                data-prefix="" data-suffix="k">
                                <a href="#" class="nav-link text-center" data-toggle="tab">
                                    <h6 class="header-pretitle text-secondary">
                                        Sessions
                                    </h6>
                                    <h3 class="text-white mb-0">
                                        92.1k
                                    </h3>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="chart" data-target="#headerChart"
                                data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[40,57,25,50,57,32,46,28,59,34,52,48]}]}}"
                                data-prefix="" data-suffix="%">
                                <a href="#" class="nav-link text-center" data-toggle="tab">
                                    <h6 class="header-pretitle text-secondary">
                                        Bounce
                                    </h6>
                                    <h3 class="text-white mb-0">
                                        50.2%
                                    </h3>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .header-body -->

            <!-- Footer -->
            <div class="header-footer">

                <!-- Chart -->
                <div class="chart">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="headerChart" class="chart-canvas chartjs-render-monitor"
                            style="display: block; width: 1581px; height: 300px;" width="1581"
                            height="300"></canvas>
                </div>

            </div>

        </div>
    </div> <!-- / .header -->

    <!-- CARDS -->
    <div class="container-fluid mt-n6">
        <div class="row">
            <div class="col-12 col-xl-8">

                <!-- Orders -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Orders
                                </h4>

                            </div>
                            <div class="col-auto mr-n3">

                                <!-- Caption -->
                                <span class="text-muted">
                      Show affiliate:
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Switch -->
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="cardToggle"
                                           data-toggle="chart" data-target="#ordersChart"
                                           data-add="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[15,10,20,12,7,0,8,16,18,16,10,22],&quot;backgroundColor&quot;:&quot;#d2ddec&quot;,&quot;label&quot;:&quot;Affiliate&quot;}]}}">
                                    <label class="custom-control-label" for="cardToggle"></label>
                                </div>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                    <div class="card-body">

                        <!-- Chart -->
                        <div class="chart">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="ordersChart" class="chart-canvas chartjs-render-monitor" width="996"
                                    height="300" style="display: block; width: 996px; height: 300px;"></canvas>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-12 col-xl-4">

                <!-- Devices -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Devices
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Tabs -->
                                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                                    <li class="nav-item" data-toggle="chart" data-target="#devicesChart"
                                        data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[60,25,15]}]}}">
                                        <a href="#" class="nav-link active" data-toggle="tab">
                                            All
                                        </a>
                                    </li>
                                    <li class="nav-item" data-toggle="chart" data-target="#devicesChart"
                                        data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[15,45,20]}]}}">
                                        <a href="#" class="nav-link" data-toggle="tab">
                                            Direct
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                    <div class="card-body">

                        <!-- Chart -->
                        <div class="chart chart-appended">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="devicesChart" class="chart-canvas chartjs-render-monitor"
                                    data-toggle="legend" data-target="#devicesChartLegend" width="461" height="241"
                                    style="display: block; width: 461px; height: 241px;"></canvas>
                        </div>

                        <!-- Legend -->
                        <div id="devicesChartLegend" class="chart-legend"><span class="chart-legend-item"><i
                                    class="chart-legend-indicator"
                                    style="background-color: #2C7BE5"></i>Desktop</span><span
                                class="chart-legend-item"><i class="chart-legend-indicator"
                                                             style="background-color: #A6C5F7"></i>Tablet</span><span
                                class="chart-legend-item"><i class="chart-legend-indicator"
                                                             style="background-color: #D2DDEC"></i>Mobile</span>
                        </div>

                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12 col-lg-6 col-xl">

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="card-title text-uppercase text-muted mb-2">
                                    Budget
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      $24,500
                    </span>

                                <!-- Badge -->
                                <span class="badge badge-soft-success mt-n1">
                      +3.5%
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="card-title text-uppercase text-muted mb-2">
                                    Total Hours
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      763.5
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-briefcase text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="card-title text-uppercase text-muted mb-2">
                                    Progress
                                </h6>

                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">

                                        <!-- Heading -->
                                        <span class="h2 mr-2 mb-0">
                          84.5%
                        </span>

                                    </div>
                                    <div class="col">

                                        <!-- Progress -->
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" style="width: 85%"
                                                 aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div> <!-- / .row -->

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-clipboard text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="card-title text-uppercase text-muted mb-2">
                                    Cost/Unit
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      $5.50
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Chart -->
                                <div class="chart chart-sparkline">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas class="chart-canvas chartjs-render-monitor" id="sparklineChart"
                                            width="75" height="35"
                                            style="display: block; width: 75px; height: 35px;"></canvas>
                                </div>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12 col-xl-4">

                <!-- Projects -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Projects
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Link -->
                                <a href="#!" class="small">View all</a>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">

                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar avatar-4by3">
                                    <img src="./cpanel/assets/img/avatars/projects/project-1.jpg" alt="..."
                                         class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ml-n2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="project-overview.html">Homepage Redesign</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-muted">
                                    <time datetime="2018-05-24">Updated 5hr ago</time>
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#!" class="dropdown-item">
                                            Action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Another action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Something else here
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar avatar-4by3">
                                    <img src="./cpanel/assets/img/avatars/projects/project-2.jpg" alt="..."
                                         class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ml-n2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="project-overview.html">Travels &amp; Time</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-muted">
                                    <time datetime="2018-05-24">Updated 3hr ago</time>
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#!" class="dropdown-item">
                                            Action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Another action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Something else here
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar avatar-4by3">
                                    <img src="./cpanel/assets/img/avatars/projects/project-3.jpg" alt="..."
                                         class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ml-n2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="project-overview.html">Safari Exploration</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-muted">
                                    <time datetime="2018-05-24">Updated 10hr ago</time>
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#!" class="dropdown-item">
                                            Action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Another action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Something else here
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar avatar-4by3">
                                    <img src="./cpanel/assets/img/avatars/projects/project-5.jpg" alt="..."
                                         class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ml-n2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="project-overview.html">Personal Site</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-muted">
                                    <time datetime="2018-05-24">Updated 4hr ago</time>
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#!" class="dropdown-item">
                                            Action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Another action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Something else here
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- / .row -->

                    </div> <!-- / .card-body -->
                </div> <!-- / .card -->

            </div>
            <div class="col-12 col-xl-8">

                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Goals
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="#!" class="btn btn-sm btn-white">
                                    Export
                                </a>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="table-responsive mb-0" data-toggle="lists"
                         data-options="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                        <table class="table table-sm table-nowrap card-table">
                            <thead>
                            <tr>
                                <th>
                                    <a href="#" class="text-muted sort" data-sort="goal-project">
                                        Goal
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted sort" data-sort="goal-status">
                                        Status
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted sort" data-sort="goal-progress">
                                        Progress
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted sort" data-sort="goal-date">
                                        Due date
                                    </a>
                                </th>
                                <th class="text-right">
                                    Team
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            <tr>
                                <td class="goal-project">
                                    Update the API
                                </td>
                                <td class="goal-status">
                                    <span class="text-warning">●</span> In progress
                                </td>
                                <td class="goal-progress">
                                    55%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">07/24/18</time>
                                </td>
                                <td class="text-right">
                                    <div class="avatar-group">
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip"
                                           title="" data-original-title="Dianna Smiley">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-1.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip"
                                           title="" data-original-title="Ab Hadley">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-2.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip"
                                           title="" data-original-title="Adolfo Hess">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-3.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip"
                                           title="" data-original-title="Daniela Dewitt">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-4.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    Release v1.2-Beta
                                </td>
                                <td class="goal-status">
                                    <span class="text-warning">●</span> In progress
                                </td>
                                <td class="goal-progress">
                                    25%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">08/26/18</time>
                                </td>
                                <td class="text-right">
                                    <div class="avatar-group justify-content-end">
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title=""
                                           data-original-title="Dianna Smiley">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-1.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title=""
                                           data-original-title="Ab Hadley">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-2.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title=""
                                           data-original-title="Adolfo Hess">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-3.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    GDPR Compliance
                                </td>
                                <td class="goal-status">
                                    <span class="text-success">●</span> Completed
                                </td>
                                <td class="goal-progress">
                                    100%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">06/19/18</time>
                                </td>
                                <td class="text-right">
                                    <div class="avatar-group justify-content-end">
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title=""
                                           data-original-title="Dianna Smiley">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-1.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title=""
                                           data-original-title="Ab Hadley">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-2.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title=""
                                           data-original-title="Adolfo Hess">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-3.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    v1.2 Documentation
                                </td>
                                <td class="goal-status">
                                    <span class="text-danger">●</span> Cancelled
                                </td>
                                <td class="goal-progress">
                                    0%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">06/25/18</time>
                                </td>
                                <td class="text-right">
                                    <div class="avatar-group justify-content-end">
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title=""
                                           data-original-title="Dianna Smiley">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-1.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title=""
                                           data-original-title="Ab Hadley">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-2.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fe fe-more-vertical"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    Plan design offsite
                                </td>
                                <td class="goal-status">
                                    <span class="text-success">●</span> Completed
                                </td>
                                <td class="goal-progress">
                                    100%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">06/30/18</time>
                                </td>
                                <td class="text-right">
                                    <div class="avatar-group justify-content-end">
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title=""
                                           data-original-title="Dianna Smiley">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-1.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title=""
                                           data-original-title="Ab Hadley">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-2.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title=""
                                           data-original-title="Adolfo Hess">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-3.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title=""
                                           data-original-title="Daniela Dewitt">
                                            <img src="./cpanel/assets/img/avatars/profiles/avatar-4.jpg"
                                                 class="avatar-img rounded-circle" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
