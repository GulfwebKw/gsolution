<!-- footer area start -->
<footer class="main-footer rel z-1" style="background-image: url({{ asset('assets/images/footer/footer-bg-shape-two.png') }})">
    <div class="container container-1290">
        <div class="footer-top pt-80 pb-60">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="footer-logo mb-20 wow fadeInRight delay-0-2s">
                        <a href="/"><img src="{{ asset('storage/'.$setting->logo) }}" alt="{{ config('app.name') }}"></a>
                    </div>
                </div>
                <div class="col-lg-8 text-lg-end">
                    <div class="social-style-four mb-20 wow fadeInLeft delay-0-2s">
                        @foreach($setting->socials as $social)
                            <a href="{{ $social['link'] }}" target="_blank"><i class="fab {{ $social['icon'] }}"></i> {{$social['title']}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="footer-left-content pt-80">
                    <div class="lets-work mb-50 wow fadeInUp delay-0-2s">
                        <span>Contact Us</span>
                    </div>
                    <div class="footer-contact-info wow fadeInUp delay-0-3s">
                        <a class="theme-btn style-three" href="mailto:{{ $setting->email }}">{{ $setting->email }} <i class="far fa-arrow-right"></i></a>
                        <a class="theme-btn style-three phone-number" href="callto:{{ str_replace(' ', '' ,$setting->phone) }}">{{ $setting->phone }} <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-right-content">
                    <h4 class="footer-title wow fadeInUp delay-0-2s">Quick Links</h4>
                    <div class="footer-widget widget_nav_menu">
                        <ul class="list-style-two wow fadeInUp delay-0-3s">
                            @foreach(\App\Models\Menu::query()->where('is_active' , true)->where('category' , 'quickLinkL')->Ordered()->get() as $item)
                                <li><a href="{{ $item->link }}">{{ $item->title }}</a></li>
                            @endforeach
                        </ul>
                        <ul class="list-style-two wow fadeInUp delay-0-4s">
                            @foreach(\App\Models\Menu::query()->where('is_active' , true)->where('category' , 'quickLinkR')->Ordered()->get() as $item)
                                <li><a href="{{ $item->link }}">{{ $item->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="footer-bottom-menu pt-40 pb-35 rpb-0 wow fadeInRight delay-0-2s">
                        <ul>
                            @foreach(\App\Models\Menu::query()->where('is_active' , true)->where('category' , 'footer')->Ordered()->get() as $item)
                                <li><a href="{{ $item->link }}">{{ $item->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="copyright-text text-lg-end pt-40 pb-35 rpt-10 wow fadeInLeft delay-0-2s">
                        Copyrights © {{ now()->year }}. All rights reserved by {{ config('app.name') }}.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->


<!-- Scroll Top Button -->
<button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>
