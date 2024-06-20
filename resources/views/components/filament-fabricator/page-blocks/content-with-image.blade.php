@aware(['page'])
<!-- Services Page About Area start -->
<section class="service-page-about @if($showRedShadowInBackground) what-we-do-area @endif py-130 rpy-100 rel z-1">
    <div class="container">
        <div class="row gap-90 align-items-center">
            @if($showImage and $imagePosition == 'left')
            <div class="col-lg-6">
                @if($typeOfRedBox == 'square')
                    <div class="service-about-image rmb-55 wow fadeInUp delay-0-2s">
                        <img src="{{ asset('storage/'.$image) }}" alt="{{ $title }}">
                        <div class="service-about-box bgc-primary" style="background-image: url({{ asset('assets/images/shapes/work-step-bg.png') }});">
                            <a class="read-more" href="#"><i class="fal fa-arrow-right"></i></a>
                            <h3><a href="#">{{ $redSquareBoxText }}</a></h3>
                        </div>
                    </div>
                @endif
                @if($typeOfRedBox == 'hide')
                    <div class="service-about-image rmb-55 wow fadeInUp delay-0-2s">
                        <img src="{{ asset('storage/'.$image) }}" alt="{{ $title }}">
                    </div>
                @endif
                @if($typeOfRedBox == 'semicircular')
                    <div class="why-choose-right style-two wow fadeInUp delay-0-2s">
                        <img src="{{ asset('storage/'.$image) }}" alt="{{ $title }}">
                        <div class="why-choose-border-shape"></div>
                        <div class="text-shape">
                            <img class="text" src="{{ asset('storage/'.$redSemicircularBoxTextImage) }}" alt="">
                        </div>
                    </div>
                @endif
            </div>
            @endif
            <div class="@if($showImage)col-xl-6 col-lg-6 @else col-md-12 @endif mx-xl-auto">
                <div class="about-content wow fadeInUp delay-0-4s">
                    <div class="section-title mb-40">
                        @if($redTitle) <span class="sub-title mb-15">{{ $redTitle }}</span>@endif
                        <h2>{{ $title }}</h2>
                    </div>
                    <div class="content">
                        <div>
                            {!! $content !!}
                        </div>
                        @if($checkMarkList and is_array($checkMarkList) and count($checkMarkList) > 0)
                        <ul class="list-style-three pt-15 pb-25">
                            @foreach($checkMarkList as $checkMark)
                                <li>{{ $checkMark['title'] }}</li>
                            @endforeach
                        </ul>
                        @endif

                        @if($keyValueList and is_array($keyValueList) and count($keyValueList) > 0)
                        <div class="row gap-60">
                            @foreach($keyValueList as $keyValue)
                            <div class="col-md-6">
                                <div class="why-choose-item wow fadeInUp delay-0-2s">
                                    <div class="why-choose-header">
                                        <i class="far fa-chevron-right"></i>
                                        <h5>{{ $keyValue['title'] }}</h5>
                                    </div>
                                    <p>{!! nl2br(e($keyValue['description'])) !!}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif

                        @if($collapseList and is_array($collapseList) and count($collapseList) > 0)
                            @php($rand = random_int(1,10000))
                            <div class="accordion" id="collapse_{{ $rand }}">
                                @foreach($collapseList as $keyValue)
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $rand }}_{{ $loop->index }}">
                                            {{ $keyValue['title'] }}
                                        </button>
                                    </h5>
                                    <div id="collapse_{{ $rand }}_{{ $loop->index }}" class="accordion-collapse collapse" data-bs-parent="#collapse_{{ $rand }}">
                                        <div class="accordion-body">
                                            <p>{!! nl2br(e($keyValue['description'])) !!}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @endif

                        @if($numericList and is_array($numericList) and count($numericList) > 0)
                            @foreach($numericList as $keyValue)
                                <div class="what-we-do-item wow fadeInUp delay-0-3s">
                                    <div class="number">
                                        <span>{{ str($loop->iteration)->padLeft(2 , '0') }}</span>
                                    </div>
                                    <div class="content">
                                        <h5>{{ $keyValue['title'] }}</h5>
                                        <p>{!! nl2br(e($keyValue['description'])) !!}</p>
                                        @if($keyValue['link'])
                                        <a class="read-more style-two" href="{{ $keyValue['link'] }}"><span>Read More</span> <i class="far fa-arrow-right"></i></a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if($timeLineList and is_array($timeLineList) and count($timeLineList) > 0)
                            @foreach($timeLineList as $keyValue)
                                <div class="why-choose-item-two wow fadeInUp delay-0-3s">
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                        @if(!$loop->last)
                                        <span class="icon-bottom-shape"></span>
                                        @endif
                                    </div>
                                    <div class="content">
                                        <h4><a href="{{ $keyValue['link'] ?? '#' }}">{{ $keyValue['title'] }}</a></h4>
                                        <p>{!! nl2br(e($keyValue['description'])) !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if($readMoreLink)
                        <a class="read-more mt-10 color-primary" href="{{ $readMoreLink }}">{{ $readMoreTitle }} <i class="far fa-arrow-right"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            @if($showImage and $imagePosition == 'right')
                <div class="col-lg-6">
                    @if($typeOfRedBox == 'square')
                        <div class="service-about-image rmb-55 wow fadeInLeft delay-0-2s">
                            <img src="{{ asset('storage/'.$image) }}" alt="{{ $title }}">
                            <div class="service-about-box bgc-primary" style="background-image: url({{ asset('assets/images/shapes/work-step-bg.png') }});">
                                <a class="read-more" href="#"><i class="fal fa-arrow-right"></i></a>
                                <h3><a href="#">{{ $redSquareBoxText }}</a></h3>
                            </div>
                        </div>
                    @endif
                    @if($typeOfRedBox == 'hide')
                        <div class="service-about-image rmb-55 wow fadeInLeft delay-0-2s">
                            <img src="{{ asset('storage/'.$image) }}" alt="{{ $title }}">
                        </div>
                    @endif
                    @if($typeOfRedBox == 'semicircular')
                        <div class="why-choose-right style-two wow fadeInLeft delay-0-2s">
                            <img src="{{ asset('storage/'.$image) }}" alt="{{ $title }}">
                            <div class="why-choose-border-shape"></div>
                            <div class="text-shape">
                                <img class="text" src="{{ asset('storage/'.$redSemicircularBoxTextImage) }}" alt="">
                            </div>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
</section>
<!-- Services Page About Area end -->
