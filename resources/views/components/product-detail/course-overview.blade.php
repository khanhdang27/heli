<div class="tab-item-content">
    <div class="pb-5 text-intro text-primary">
        {!! $courseDetail->course_overview !!}
    </div>
    <div class="pt-5 note-package">
        <h1 class="text-primary font-weight-bold">
            @lang('keywords.coursePage.notePackage')
        </h1>
        <div class="row">
            @foreach($courseDetail->courseMaterial as $documentItem)
                <div class="col-sm-6">
                    <div class="mt-5">
                        <img class="border-0 p-0 document-image" height="430" src="{{ asset("images/book.jpg")}}">
                    </div>
                    <div class="text-primary bottom-package w-75 mb-3">
                        <p class="pb-3">** {{$documentItem->course_material_origin}}</p>

                        <p>{{$documentItem->course_material_name}}</p>
                        {{$documentItem->course_material_description}}
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
