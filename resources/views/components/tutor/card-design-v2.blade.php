<div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center px-5 my-3">
    <div class="card py-2 text-center">
        <img class="rounded-circle border border-secondary mx-auto tutor_image"
            src="{{asset('/file/'.$tutor->user->avatar->id)}}" alt="...">

        <div class="card-body">
            <h3 class="card-title font-weight-bold">{{ $tutor->full_name }}</h3>
            <p class="card-text text-limit-3">
                {{ $tutor->tutor_info }}
            </p>
            <button type="button" class="btn btn-primary" data-html="true" data-toggle="popover" title="Infomation"
                data-content='
                <div class="p-0">
                    <div class="bg-primary d-flex flex-column justify-content-between pt-5 px-5 pb-3">
                        <div class="content-info-right text-white">
                            <div>{{ $tutor->tutor_info }}</div>
                            <br>
                            <div class="text-limit-3 mb-1">► {{ $tutor->tutor_level }}</div>
                            <div class="text-limit-3 mb-1">► {{ $tutor->tutor_specialized }}</div>
                            <div class="text-limit-3">► {{ $tutor->tutor_experience }}</div>
                        </div>
                    </div>
                </div>
            '>
                @lang('keywords.blog-page.readMore')
            </button>
            <script>
                $(document).ready(function(){
                    $('[data-toggle="popover"]').popover({
                        trigger: 'focus'
                    });
                });
            </script>
        </div>
    </div>
</div>