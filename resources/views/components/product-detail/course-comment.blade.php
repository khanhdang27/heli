<div class="">
    <div class="row row-question pt-5 pb-5 border-secondary">
        <div class="col-xl-2">
            <div class="d-flex text-primary w-100">
                <img src="{{asset("images/ava2.jpg")}}" width="110" height="110">
            </div>
        </div>
        <div class="col-xl-5">
            <div class="pl-3 pt-2">
                <h4 class="text-primary">{{ Str::limit($comment->user->name, 25)}}</h4>
                <h5 class="text-primary">
                    {{$comment->detail}}
                </h5>
            </div>
        </div>
        <div class="col-xl-4">
            
        </div>
    </div>
</div>
