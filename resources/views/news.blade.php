@extends('layouts.main')

@section('title' , 'News')

@section('breadcrumb')
    <li class="breadcrumb-item active">News</li>
@endsection



@section('body')

    <section class="blog-page-area py-130 rpy-100 rel z-1">
        <div class="container container-1290">
            <div class="row">
                @foreach($news as $newsItem)
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

            {{ $news->links('layouts.paginator') }}
        </div>
    </section>
    <!-- Contact Form Area end -->
@endsection

