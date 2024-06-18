@aware(['page'])
<section class="project-grid-area pt-130 rpt-100 pb-10 rpb-25">
    <div class="container container-1210">
        <div class="row gap-110">
            @foreach($projects as $project)
            <div class="col-lg-4">
                <div class="project-item">
                    <div class="image wow fadeInUp delay-0-2s">
                        <img src="{{ asset('storage/'.$project['image']) }}" alt="{{ $project['title'] }}">
                        <a href="{{ $project['link'] ?? '#' }}" class="project-btn" target="_blank"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="content wow fadeInUp delay-0-2s">
                        <a href="{{ $project['link'] ?? '#' }}" class="category">{{ $project['redTitle'] }}</a>
                        <h2><a href="{{ $project['link'] ?? '#' }}" target="_blank">{{ $project['title'] }} <br/><i>{{ $project['redTitle'] }}</i></a></h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Project Grid Area end -->

