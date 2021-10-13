@php
    $comments = $courseDetail->comment;
@endphp

<div>
    @if(Auth::check() && Auth::User()->hasRole('student') && !empty($studentCourse))
        <x-comment.comment :refComment=$courseDetail :commentModule=\App\Models\Course::class></x-comment.comment>
    @endif
    <br>
    @foreach ($comments as $comment)
        <x-product-detail.course-comment :comment=$comment :course=$courseDetail></x-product-detail.course-comment>
    @endforeach
</div>
