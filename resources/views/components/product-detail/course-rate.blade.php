@php
    $comments = $courseDetail->comment;
@endphp

<div>
    @if(\Illuminate\Support\Facades\Auth::check())
        <x-comment.comment :refComment=$courseDetail :commentModule=\App\Models\Course::class></x-comment.comment>
    @endif

    @foreach ($comments as $comment)
        <x-product-detail.course-comment :comment=$comment></x-product-detail.course-comment>
    @endforeach
</div>
