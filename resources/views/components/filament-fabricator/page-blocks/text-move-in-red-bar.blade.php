@aware(['page'])

<!-- Headline area start -->
<div class="headline-area bgc-primary pt-80 pb-65">
    <div class="container-fluid">
        <div class="headline-wrap marquee">
            <span>
                @foreach($bar as $oneBar)
                    <span class="marquee-item">
                    <i class="fas fa-star-of-life"></i>
                    <b>{{ $oneBar['title'] }}</b>
                </span>
                @endforeach
            </span>
        </div>
    </div>
</div>
<!-- Headline Area end -->

