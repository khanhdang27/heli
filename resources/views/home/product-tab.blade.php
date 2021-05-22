<?php
$productList = [
    'item_1' => ['subject' => '英國',
        'subtitle' => '海外升學全攻略 英國篇',
        'description' => '英國升學需知',
        'courseName' => 'IGCSE 實時直播課程 英⽂課程 第⼀部分講解',
        'tutor' => 'Ms. Polly Leung',
        'price' => '$1500'],
    'item_2' => ['subject' => '英國',
        'subtitle' => '海外升學全攻略 英國篇',
        'description' => '英國升學需知',
        'courseName' => 'IGCSE 實時直播課程 英⽂課程 第⼀部分講解',
        'tutor' => 'Ms. Polly Leung',
        'price' => '$1200'],
]
?>
<div class="container-fluid container-product">
    <!-- Nav pills -->
    <ul class="nav nav-pills menu-category" role="tablist">
        <li class="nav-item">
            <a class="nav-link active category-link" data-toggle="pill" href="#home">
                <img class="menu-img" src="{{asset("images/IGCSE_cover.jpg")}}">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link category-link" data-toggle="pill" href="#menu1">
                <img class="menu-img" src="{{asset("images/Group173.jpg")}}">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link category-link" data-toggle="pill" href="#menu2">
                <img class="menu-img" src="{{asset("images/Group174.jpg")}}">
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link category-link" data-toggle="pill" href="#menu3">
                <img class="menu-img" id="menu-img4" src="{{asset("images/Group175.jpg")}}">
            </a>
        </li>
    </ul>
    <ul class="nav nav-pills menu-category-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link active category-link-text" data-toggle="pill" href="#home">
                IGCSE
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link category-link-text" data-toggle="pill" href="#menu1">
                UKISET
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link category-link-text" data-toggle="pill" href="#menu2">
                IELTS
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link category-link-text" data-toggle="pill" href="#menu3">
                IAL
            </a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div id="home" class="container-fluid tab-pane active">
            <div>
                <div class="heading-title text-primary" id="tab-title">
                    @lang('keywords.hotCourseSeries')
                </div>
                <div class="d-flex flex-wrap">
                    @foreach($productList as $item)
                        <div class="pr-3">
                            <a class="product-hover" href="{{URL::route('site.course')}}">
                                <x-product.product-box
                                    subject="{{$item['subject']}}"
                                    subtitle="{{$item['subtitle']}}"
                                    description="{{$item['description']}}"
                                    courseName="{{$item['courseName']}}"
                                    tutor="{{$item['tutor']}}"
                                    price="{{$item['price']}}">
                                </x-product.product-box>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="menu1" class="container-fluid tab-pane fade"><br>
            <div>
                <div class="heading-title text-primary" id="tab-title">
                    @lang('keywords.hotCourseSeries')
                </div>
                <div class="d-flex flex-wrap">
                    @foreach($productList as $item)
                        <div class="pr-3">
                            <a class="product-hover" href="{{URL::route('site.course')}}">
                                <x-product.product-box
                                    subject="{{$item['subject']}}"
                                    subtitle="{{$item['subtitle']}}"
                                    description="{{$item['description']}}"
                                    courseName="{{$item['courseName']}}"
                                    tutor="{{$item['tutor']}}"
                                    price="{{$item['price']}}">
                                </x-product.product-box>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="menu2" class="container-fluid tab-pane fade"><br>
            <div>
                <div class="heading-title text-primary" id="tab-title">
                    @lang('keywords.hotCourseSeries')
                </div>
                <div class="d-flex flex-wrap">
                    @foreach($productList as $item)
                        <div class="pr-3">
                            <a class="product-hover" href="{{URL::route('site.course')}}">
                                <x-product.product-box
                                    subject="{{$item['subject']}}"
                                    subtitle="{{$item['subtitle']}}"
                                    description="{{$item['description']}}"
                                    courseName="{{$item['courseName']}}"
                                    tutor="{{$item['tutor']}}"
                                    price="{{$item['price']}}">
                                </x-product.product-box>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="menu3" class="container-fluid tab-pane fade"><br>
            <div>
                <div class="heading-title text-primary" id="tab-title">
                    @lang('keywords.hotCourseSeries')
                </div>
                <div class="d-flex flex-wrap">
                    @foreach($productList as $item)
                        <div class="pr-3">
                            <a class="product-hover" href="{{URL::route('site.course')}}">
                                <x-product.product-box
                                    subject="{{$item['subject']}}"
                                    subtitle="{{$item['subtitle']}}"
                                    description="{{$item['description']}}"
                                    courseName="{{$item['courseName']}}"
                                    tutor="{{$item['tutor']}}"
                                    price="{{$item['price']}}">
                                </x-product.product-box>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
