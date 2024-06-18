@aware(['page'])
<!-- Work With Area start -->
<section class="work-with-area pb-150 rpb-145 rel z-1">
    <div class="container">
        <div class="row justify-content-center pb-45 rpb-25">
            <div class="col-xl-7 col-lg-9">
                <div class="section-title text-center wow fadeInUp delay-0-2s">
                    @if($redTitle)<span class="sub-title mb-15">{{ $redTitle }}</span>@endif
                    <h2>{{ $title }}</h2>
                    <a class="explore-more text-start mt-30" href="{{ $buttonLink }}"><i class="fas fa-arrow-right"></i> <span>{{ $buttonTitle }}</span></a>
                </div>
            </div>
        </div>
    </div>
    <span class="big-text light-opacity">{{ $backgroundText }}</span>
</section>
<!-- Work With Area end -->
