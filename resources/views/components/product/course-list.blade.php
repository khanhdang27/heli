<div class="d-flex flex-row flex-wrap pb-5">
    @foreach($courses as $value)
        <x-product.course-item :course=$value>
        </x-product.course-item>
    @endforeach
</div>
