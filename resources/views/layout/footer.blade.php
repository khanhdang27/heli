@php
    use App\Utilities\SelectionByClass;
    $getCertificate = SelectionByClass::getValues(\App\Models\Certificate::class, 'certificate_name', 'id');
    $result = key($getCertificate);

@endphp
<div class="footer-builder bg-dark border-secondary">
    <div class="container-fluid">
        <div class="row footer m-0">
            <div class="col-lg-1"></div>
            <div class="col-lg-2 mb-3">
                <p class="title-foot">@lang('keywords.footer.policy')</p>
                <a href="#">@lang('keywords.footer.terms&Conditions')</a><br>
                <a href="#">@lang('keywords.footer.privacyPolicy')</a><br>
                <a href="#">@lang('keywords.footer.cookiePolicy')</a>
            </div>
            <div class="col-lg-2 mb-3">
                <p class="title-foot">@lang('keywords.footer.about')</p>
                <a href="#">@lang('keywords.footer.aboutHelios')</a><br>
                <a href="{{ URL::route('site.teams') }}">@lang('keywords.navBar.mentorTeam')</a><br>
                @if ($result)
                <a href="{{ URL::route('site.certificate.show',$result, true)}}">@lang('keywords.navBar.subjectClassification')</a><br>
                @else
                <a href="#">@lang('keywords.navBar.subjectClassification')</a><br>
                @endif
                <a href="{{ URL::route('site.news') }}">@lang('keywords.navBar.latestNews')</a><br>
                <a href="{{ URL::route('site.show-blog') }}">@lang('keywords.navBar.learningColumn')</a><br>
                <a href="{{ URL::route('site.post.index') }}">@lang('keywords.footer.FAQ')</a>
            </div>
            @if(Auth::user()!=null)
                <div class="col-lg-2 mb-3">
                    <p class="title-foot">@lang('keywords.footer.member')</p>
                    <a href="#">@lang('keywords.footer.myAccount')</a><br>
                    <a href="{{ URL::route('site.user.my-course') }}">@lang('keywords.footer.myCourses')</a><br>
                    <a href="{{ URL::route('site.user.calendar') }}">@lang('keywords.footer.mySchedule')</a>
                </div>
            @else
                <div class="col-lg-2 mb-3">
                    <p class="title-foot">@lang('keywords.footer.member')</p>
                    <a data-toggle="modal" data-target="#loginModal" id="login" href="#">
                        @lang('keywords.footer.myAccount')
                    </a><br>
                    <a data-toggle="modal" data-target="#loginModal" id="login" href="#">
                        @lang('keywords.footer.myCourses')
                    </a><br>
                    <a data-toggle="modal" data-target="#loginModal" id="login" href="#">
                        @lang('keywords.footer.mySchedule')
                    </a>
                </div>
            @endif
            <div class="col-lg-2 mb-3">
                <p class="title-foot">@lang('keywords.footer.connection')</p>
                <a href="tel:852 2602 1668">@lang('keywords.footer.phone')</a><br>
                <a href="whatsapp://send?text=Hello!&phone=+85226021668">@lang('keywords.footer.whatsApp')</a><br>
                <a href="#">adminssions@helios-edu.com</a>
            </div>
            <div class="col-lg-2 ">
                <div class="mb-4">
                    <p class="title-foot">@lang('keywords.footer.address')</p>
                    <a>@lang('keywords.footer.headOffice')</a><br>
                    <a>@lang('keywords.footer.CausewayBay')</a><br>
                    <a>@lang('keywords.footer.street')</a><br>
                    <a>@lang('keywords.footer.room')</a><br>
                </div>
                <a>@lang('keywords.footer.CausewayBayStore')</a><br>
                <a>@lang('keywords.footer.CausewayBay')</a><br>
                <a>@lang('keywords.footer.makeAnAppointment')</a><br>
                <a>@lang('keywords.footer.road')</a><br>
                <a>@lang('keywords.footer.plaza')</a>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>

</div>
