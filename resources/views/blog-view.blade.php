@extends('layout.app')

@section('title','Blog Page')

@section('content')
    @php
    $listTag = [
    'a' => '#海外升學',
    'b' => '#學費',
    'c' => '#英國',
    'd' => '#UCAS',
    ]
    @endphp
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.blog-page.learningColumn')
        </div>
        <div class="container-fluid pb-5 body-content w-75">
            <div class="pt-5 text-primary text-30">
                <p>【英國留學費用】英國升學讀書一年費用要幾錢? (大學學費+租金+生活費)</p>
                <div class="d-flex">
                    <p class="text-20 text-primary mr-5">2021/03/20</p>
                    <p class="text-20 text-primary"><img src="{{asset("images/ic/ic_eyeBlue.svg")}}" width="26">2,840</p>
                </div>
                <div class="d-flex flex-wrap justify-content-end">
                    @foreach($listTag as $value)
                        <a href="#" class="btn-hashtag text-12">
                            {{ $value }}
                        </a>
                    @endforeach
                </div>
            </div>
            <div>
                Where does it come from?
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.


            </div>
        </div>
    </div>



@endsection
