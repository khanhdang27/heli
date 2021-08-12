<div class="tab-item-content">
    <div class="pb-5 text-intro text-primary">
        {!! $courseDetail->course_overview !!}
    </div>
    <div class="pt-5 note-package">
        <h2 class="text-primary font-weight-bold">
            @lang('keywords.coursePage.notePackage')
        </h2>
        <div class="row">
            @foreach ($courseDetail->courseMaterial as $documentItem)
                <div class="col-sm-6">
                    <div class="mt-5">
                        <a href="{{ route('site.file.download', $documentItem->file) }}">
                            <img class="border-0 p-0 img-thumbnail" height="430" src="{{ asset('images/book_icon.png') }}">
                        </a>

                    </div>
                    <div class="text-primary bottom-package w-75 mb-3">
                        <p class="pb-3">** {{ $documentItem->course_material_origin }}</p>
                        <p class="m-0">{{ $documentItem->course_material_name }}</p>
                        <p class="m-0">
                            {{ (strlen($documentItem->course_material_description) < 50 ) ?
                                $documentItem->course_material_description
                                : substr($documentItem->course_material_description, 0, strpos($documentItem->course_material_description, ' ', 50)) }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
