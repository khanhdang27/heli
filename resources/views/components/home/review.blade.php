<?php
    $praiseList = [
        'item_1' => [
            'content'=>'“The consultants from Helios help refine my personal statement for UCAS and JUPAS.
                           I would not have admitted to such a reputable academy without their assistance.
                           Life in London is beautiful but challenging, yet the mentors arranged by Helios
                           are really helpful in different means.”',
            'name' => 'J.C',
            'school' => 'Oxford'
           ],
           'item_2' => [
            'content'=>'“The consultants from Helios help refine my personal statement for UCAS and JUPAS.
                           I would not have admitted to such a reputable academy without their assistance.
                           Life in London is beautiful but challenging, yet the mentors arranged by Helios
                           are really helpful in different means.”',
            'name' => 'J.C',
            'school' => 'Oxford'
           ],
           'item_3' => [
            'content'=>'“The consultants from Helios help refine my personal statement for UCAS and JUPAS.
                           I would not have admitted to such a reputable academy without their assistance.
                           Life in London is beautiful but challenging, yet the mentors arranged by Helios
                           are really helpful in different means.”',
            'name' => 'J.C',
            'school' => 'Oxford'
           ],
    ]
?>
<div class="justify-content-center">
    <h2 class="title-card text-primary">客戶的表揚</h2>
    <div class="guest-praise-container">
        <div class="d-flex w-75 flex-lg-nowrap flex-wrap m-auto">
            @foreach($praiseList as $item)
                <div class="praise-box ml-4 mr-4">
                    <x-home.praise
                        content="{{$item['content']}}"
                        name="{{$item['name']}}"
                        school="{{$item['school']}}"
                    >

                    </x-home.praise>
                </div>
            @endforeach
        </div>
    </div>
</div>
