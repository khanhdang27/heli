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
]
?>
<div class="d-flex flex-row flex-wrap">
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
