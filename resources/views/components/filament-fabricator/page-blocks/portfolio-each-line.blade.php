@aware(['page'])
<!-- Project Timeline Area start -->
<section class="project-timeline-area pt-90 rpt-75 rel z-1">
    <div class="container container-1290">
        <div class="row justify-content-between align-items-center pb-25">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title mb-30 wow fadeInLeft delay-0-2s">
                    @if($redTitle) <span class="sub-title mb-15">{{ $redTitle }}</span>@endif
                    <h2>{{ $title }}</h2>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                @if($buttonLink)
                <a href="{{ $buttonLink }}" class="theme-btn mb-25 wow fadeInRight delay-0-2s">{{ $buttonLabel }} <i class="far fa-arrow-right"></i></a>
                @endif
            </div>
        </div>

        @foreach($projects as $project)
        <div class="project-timeline wow fadeInUp delay-0-2s">
            <div class="content">
                <span class="serial-number">{{ str($loop->iteration)->padLeft(2 , '0') }}</span>
                <h4><a href="{{ $project['link'] ?? '#' }}">{{ $project['title'] }} <br> {{ $project['subTitle'] }}</a></h4>
            </div>
            <div class="image">
                <img src="{{ asset('storage/'.$project['image']) }}" alt="{{ $project['title'] }}">
            </div>
            <div class="right-btn">
                @if($project['link'])
                    <a class="details-btn" href="{{ $project['link'] }}"><i class="fal fa-long-arrow-right"></i></a>
                @endif
            </div>
        </div>
        @endforeach

    </div>
</section>
<!-- Project Timeline Area end -->
