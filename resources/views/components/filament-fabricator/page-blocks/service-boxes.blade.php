@aware(['page'])
<!-- Service Style Three start -->
<section class="service-three-area pt-70 rpt-40 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                    @if($redTitle) <span class="sub-title mb-20">{{ $redTitle }}</span>@endif
                    <h2>{{ $title }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($boxes as $box)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="service-three-item wow fadeInUp delay-0-2s">
                        <div class="title-icon">
                            <h5><a href="{{ $box['link'] ?? '#' }}">{{ $box['title'] }}</a></h5>
                            <img src="{{ asset('storage/'.$box['image']) }}" alt="{{ $box['title'] }}">
                        </div>
                        <div class="content">
                            <p>{!! nl2br(e($box['description'])) !!}</p>
                            @if($box['link'])<a class="read-more style-two" href="{{ $box['link'] }}"><span>Read More</span> <i class="far fa-arrow-right"></i></a>@endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Service Style Three end -->
