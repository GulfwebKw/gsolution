@aware(['page'])
<!-- Pricing style three start -->
<section class="pricing-area-three pb-85 rpb-55 pt-80" style="background-image: url({{ asset('assets/images/background/pricing-bg-dot-shape.png') }})">
    <div class="container container-1290">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                    @if($redTitle)<span class="sub-title mb-20">{{ $redTitle }}</span>@endif
                    @if($redTitle)<h2>{{ $title }}</h2>@endif
                    @if($redTitle){!! $content !!}@endif
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($plans as $plan)
            <div class="col-xl-3 col-md-6">
                <div class="pricing-plan-item wow fadeInUp delay-0-4s">
                    @if($plan['isPopular'])
                           <span class="badge">
                                <i class="fas fa-star-of-life"></i>
                                <i class="fas fa-star-of-life"></i>
                                {{ $plan['popularTitle'] }}
                                <i class="fas fa-star-of-life"></i>
                                <i class="fas fa-star-of-life"></i>
                            </span>
                    @endif
                    @if($plan['icon'])
                    <div class="icon">
                        <x-icon width="64px" name="{{ $plan['icon'] }}" />
                    </div>
                    @endif
                    @if($plan['title'])
                    <h5>{{ $plan['title'] }}</h5>
                    @endif

                    <span class="price-text"> @if($plan['price']) <span class="before">KD</span><span class="price"> {{ number_format($plan['price']) }}</span>@endif @if($plan['price'] and $plan['description'])<br/>@endif @if($plan['description'])<span class="after">{{ $plan['description'] }}</span>@endif </span>

                    <ul class="list-style-one">
                        @foreach($plan['features'] as $feature)
                        <li>{{ $feature['title'] }}</li>
                        @endforeach
                    </ul>
                    @if($plan['buyButtonLink'])
                    <a href="{{ $plan['buyButtonLink'] }}" class="theme-btn w-100">{{ $buyButtonLabel }} <i class="far fa-arrow-right"></i></a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Pricing style three end -->
