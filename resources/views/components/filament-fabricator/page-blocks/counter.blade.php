@aware(['page'])
<!-- Statistics Area start -->
<div class="statistics-area pt-75 rpt-45 rel z-1">
    <div class="container">
        <div class="row justify-content-between">
            @foreach($items as $item)
            <div class="col-xl-2 col-lg-3 col-6">
                <div class="counter-item counter-text-wrap wow fadeInUp delay-0-2s">
                    <i class="fal fa-check-circle"></i>
                    <span class="count-text @if($item['total'] < 10) k @endif" data-speed="3000" data-stop="{{ $item['total'] }}">0</span>
                    <span class="counter-title">{{ $item['title'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Statistics Area end -->
