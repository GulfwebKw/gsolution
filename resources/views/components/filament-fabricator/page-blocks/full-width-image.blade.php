@aware(['page'])
<!-- Hero Section Start -->
<section class="hero-area pt-185 rpt-150 rel z-1">
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-8">--}}
{{--                <div class="hero-content wow fadeInLeft delay-0-2s">--}}
{{--                    <h1>Web <span>Design</span> <i>Agency</i></h1>--}}
{{--                </div>--}}
{{--            </div> --}}
{{--            <div class="col-lg-4">--}}
{{--                <div class="hero-right-image mt-20 wow fadeInUp delay-0-4s">--}}
{{--                    <img src="assets/images/hero/hero-right.png" alt="Hero">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container-fluid">
        <div class="hero-bottom-image">
            <img src="{{ asset('storage/'.$image) }}" alt="{{ $page->title }}">
            <div class="hero-social">
                @foreach($setting->socials as $social)
                    <a href="{{ $social['link'] }}" target="_blank"><i class="fa fab {{ $social['icon'] }}"></i> {{$social['title']}}</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="hero-bg">
        <img src="{{ asset('assets/images/hero/hero-bg.png') }}" alt="lines">
    </div>
</section>
<!-- Hero Section End -->
