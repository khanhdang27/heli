<form class="rating">
    @csrf
    <label>
        <input type="radio" name="stars" value="1"/>
        <span class="icon">★</span>
    </label>
    <label>
        <input type="radio" name="stars" value="2"/>
        <span class="icon">★</span>
        <span class="icon">★</span>
    </label>
    <label>
        <input type="radio" name="stars" value="3"/>
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
    </label>
    <label>
        <input type="radio" name="stars" value="4"/>
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
    </label>
    <label>
        <input type="radio" name="stars" value="5"/>
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
    </label>
</form>

<script>
    $(':radio').change(function () {
        var rate_no = this.value;
        console.log('New star rating: ' + rate_no);
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('site.rating.store')}}",
            data: {course_id: {{$course->id}}, user_id: {{Auth::user()->id}}, rate: rate_no}
        }).done(function (response) {
            console.log('done')
        }).fail(function (jqXHR, textStatus, errorThrown) {
            console.log('fail')
        })
    });
</script>

