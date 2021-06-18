@extends('layout.app')

@section('title','Subject Page')

@section('content')
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
            'price' => '$1500'],
        'item_3' => ['subject' => '英國',
            'subtitle' => '海外升學全攻略 英國篇',
            'description' => '英國升學需知',
            'courseName' => 'IGCSE 實時直播課程 英⽂課程 第⼀部分講解',
            'tutor' => 'Ms. Polly Leung',
            'price' => '$1500'],
    ]
    ?>
    @php
        use \App\Utilities\SelectionByClass;
    @endphp
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.navBar.subjectClassification')
        </div>
        @include('layout.sub-header')
        <div class="container-fluid p-0">
            <div class="title-subject text-primary text-center">
                {{$subject->subject_name}}
            </div>
            <div class="container-fluid sort text-primary mb-4 d-flex">
                <span class="mr-4">@lang('keywords.sort')</span>
                <form>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio" checked> @lang('keywords.upToDate')
                    </label>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio"> @lang('keywords.price')
                    </label>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio">@lang('keywords.liveCourses')
                    </label>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio">@lang('keywords.recordALesson')
                    </label>
                    <label style="color: red" class="radio-inline mr-5">
                        <input  class="btn-sort" type="radio" name="optradio">@lang('keywords.learningMaterial')
                    </label>
                </form>
            </div>
            <div class="container-fluid p-0">
                <div class="container-fluid ">
                    <h1 class="text-primary" id="tab-title">
                        {{$subject->subject_name}}
                    </h1>
                    <div class="d-flex flex-wrap">
                        @foreach($productList as $item)
                            <div class="pr-3">
                                <a class="product-hover" href="{{URL::route('site.course.index')}}">
                                    <x-product.course-item
                                        subject="{{$item['subject']}}"
                                        subtitle="{{$item['subtitle']}}"
                                        description="{{$item['description']}}"
                                        courseName="{{$item['courseName']}}"
                                        tutor="{{$item['tutor']}}"
                                        price="{{$item['price']}}">
                                    </x-product.course-item>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
