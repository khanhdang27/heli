<div class="pb-5 row">
    @if (false)
    {{-- neu la page 1 thi hidden --}}
        <div class="col-1 align-self-center">
            <button class="btn btn-outline-primary rounded-circle border-2 border-primary animate-change-color py-auto"> 
                <h1 class="text-center p-4 font-weight-bold my-auto"> ﹤ </h1>
            </button>
        </div>
    @endif
    <div class="col-10 row product-category-row">
        @foreach($courses as $value)
        <x-product.course-item :course=$value typeOfUI={{$typeOfUI}}>
        </x-product.course-item>
        @endforeach
    </div>
    @if (true)
    {{-- neu la page 1 thi show to padding --}}
    <div class="col-1"></div>
    @endif 
    <div class="col-1 align-self-center">
        <button class="btn btn-outline-primary rounded-circle border-2 border-primary animate-change-color py-auto">
            <h1 class="text-center p-4 font-weight-bold my-auto"> ﹥ </h1>
        </button>
    </div>
</div>