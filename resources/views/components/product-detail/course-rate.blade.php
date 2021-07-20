@php
    $comments = $courseDetail->comment;
@endphp

<div>
    @if(Auth::check() && Auth::User()->hasRole('student'))
        <x-comment.comment :refComment=$courseDetail :commentModule=\App\Models\Course::class></x-comment.comment>
    @endif

    @foreach ($comments as $comment)
        <x-product-detail.course-comment :comment=$comment></x-product-detail.course-comment>
    @endforeach
</div>
