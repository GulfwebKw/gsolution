@aware(['page'])
<!-- Blog Style Two start -->
<section class="blog-area-two pt-125 rpt-100 pb-70 rpb-40">
    <div class="container container-1290">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                    @if($redTitle) <span class="sub-title mb-20">{{ $redTitle }}</span>@endif
                    <h2>{{ $title }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach(\App\Models\News::query()->where('is_active' , true)->orderByDesc('id')->limit(3)->get() as $newsItem)
                <div class="col-xl-4 col-md-6">
                    <div class="blog-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{ asset('storage/'.$newsItem->image) }}" alt="{{ $newsItem->title }}">
                        </div>
                        <ul class="blog-meta">
                            <li>
                                <i class="far fa-calendar-alt"></i>
                                <a href="{{ route('news-item' , ['News' => $newsItem , 'slug' => \Illuminate\Support\Str::slug($newsItem->title) ]) }}">{{ $newsItem->created_at->format('F d, Y') }}</a>
                            </li>
                        </ul>
                        <hr>
                        <h4><a href="{{ route('news-item' , ['News' => $newsItem , 'slug' => \Illuminate\Support\Str::slug($newsItem->title) ]) }}">{{ $newsItem->title }}</a></h4>
                        <a class="read-more" href="{{ route('news-item' , ['News' => $newsItem , 'slug' => \Illuminate\Support\Str::slug($newsItem->title) ]) }}">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Blog Style Two end -->
