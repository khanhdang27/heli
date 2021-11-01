@php
use App\Utilities\SelectionByClass;
use App\Models\Certificate;
use App\Models\Setting;

$getCertificate = SelectionByClass::getValues(Certificate::class, 'certificate_name', 'id');
$result = key($getCertificate);

$setting = Setting::getObject();

@endphp
<div class="footer-builder bg-primary">
    <div class="container-fluid">
        <div class="row footer text-white m-0">
            <div class="col-lg-1"></div>
            <div class="col-lg-2 mb-3">
                <h2 class="title-foot">@lang('keywords.footer.policy')</h2>
                <a href="{{ route('site.terms-conditions') }}">@lang('keywords.footer.terms&Conditions')</a><br>
                <a href="{{ route('site.privacy-policy') }}">@lang('keywords.footer.privacyPolicy')</a><br>
                <a href="#">@lang('keywords.footer.cookiePolicy')</a>
            </div>
            <div class="col-lg-2 mb-3">
                <h2 class="title-foot">@lang('keywords.footer.about')</h2>
                <a href="#">@lang('keywords.footer.aboutHelios')</a><br>
                <a href="{{ URL::route('site.teams') }}">@lang('keywords.navBar.mentorTeam')</a><br>
                @if ($result)
                    <a
                        href="{{ URL::route('site.certificate.show', $result, true) }}">@lang('keywords.navBar.subjectClassification')</a><br>
                @else
                    <a href="#">@lang('keywords.navBar.subjectClassification')</a><br>
                @endif
                <a href="{{ URL::route('site.news') }}">@lang('keywords.navBar.latestNews')</a><br>
                <a href="{{ URL::route('site.show-blog') }}">@lang('keywords.navBar.learningColumn')</a><br>
                <a href="{{ route('site.faq') }}">@lang('keywords.footer.FAQ')</a>
            </div>
            <div class="col-lg-2 mb-3">
                <h2 class="title-foot">@lang('keywords.footer.member')</h2>
                @if (Auth::check())
                    <a href="{{ route('site.profile.show', Auth::user()->id) }}">
                        @lang('keywords.footer.myAccount')
                    </a><br>
                    <a href="{{ route('site.user.course') }}">
                        @lang('keywords.footer.myCourses')
                    </a><br>
                    <a href="{{ URL::route('site.user.wishlist') }}">
                        @lang('keywords.coursePage.wishlist')
                    </a><br>
                    <a href="{{ route('site.user.calendar') }}">
                        @lang('keywords.footer.mySchedule')
                    </a>
                @else
                    <a data-toggle="modal" data-target="#loginModal" id="login" href="#">
                        @lang('keywords.footer.myAccount')
                    </a><br>
                    <a data-toggle="modal" data-target="#loginModal" id="login" href="#">
                        @lang('keywords.footer.myCourses')
                    </a><br>
                    <a data-toggle="modal" data-target="#loginModal" id="login" href="#">
                        @lang('keywords.footer.mySchedule')
                    </a>
                @endif
            </div>
            <div class="col-lg-2 mb-3">
                <h2 class="title-foot">@lang('keywords.footer.connection')</h2>
                <span>@lang('keywords.footer.phone'): </span><a
                    href="tel:{{ $setting->phone_footer }}">{{ $setting->phone_footer }}</a><br>
                <span>@lang('keywords.footer.whatsApp'): </span>
                <a
                    href=" https://api.whatsapp.com/send/?phone={{ $setting->whatapp_footer }}">{{ $setting->whatapp_footer }}</a><br>
                <a href="mailto:{{ $setting->mail_admin_footer }}">{{ $setting->mail_admin_footer }}</a>
            </div>
            <div class="col-lg-2 ">
                <h2 class="title-foot">@lang('keywords.footer.address')</h2>
                <a>
                    {{ $setting->address_ho_footer }}
                </a>
                <br>
                <a>{{ $setting->address_cbs_footer }}</a><br>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>

</div>
