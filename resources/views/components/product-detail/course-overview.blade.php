<?php
$descrition = <<<STRING
    <h2>英文差，但 Reading 都可以攞到 Lv 5+？</h2>
    <h5>要達到以上目標，其實真係一啲都唔難！</h5>
    <p>我可以用實戰經驗同大家講，「英文程度」≠ 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法，教你一套有系統嘅</p>
    <p>    mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！ </p>
    <p>    課堂精選內容 · 用「技巧」完美命中 marking</p>
    <p>    極速升 grade 三大秘訣</p>
    <p>    數據主導考試模式</p>
    <p>    考評趨勢一覽無遺</p>
    <p>    從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。只有考評數據先有真正話語權！</p>
    <p>    DSE 最強 Reading 技巧</p>
    <p>    無需理解文章亦可有 Lv 5 +</p>
    <p>    擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！</p>
    <p>    一般英文 VS DSE 英文</p>
    <p>    只傳授你 DSE 需考的英文</p>
    <p>    雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!</p>
STRING;

$requirements = [
    '全面 Paper 1 考評分析',
    '絕密 Reading Skills',
    '最強 5** 考評用字'
];

$documentTitle = 'Paper 1 精讀秘笈';

$author = "Ms. Polly Yeung 親自撰寫";

?>

<div class="tab-item-content">
    <div class="pb-5 text-intro text-primary">
        {!! $descrition !!}
    </div>
    <div class="pt-5 note-package">
        <div class="title text-primary">@lang('keywords.coursePage.notePackage')</div>
        <div class="mt-5">
            <img class="responsive" height="485" src="{{ asset("images/book.jpg")}}">
        </div>
        <div class="text-primary bottom-package">
            <p class="pb-3">** {{$author}}</p>

            {{$documentTitle}}
            <ol>
                @foreach($requirements as $require)
                    <li>{{$require}}</li>
                @endforeach
            </ol>
        </div>
    </div>
</div>
