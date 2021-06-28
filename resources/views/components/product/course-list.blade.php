<div class="pb-5 row">

    
    @foreach($courses as $value)
        <x-product.course-item :course=$value typeOfUI={{$typeOfUI}}>
        </x-product.course-item>
    @endforeach
</div>
