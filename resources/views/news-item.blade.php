@extends('layouts.main')

@section('title' ,  $newsItem->title)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('news') }}">News</a></li>
    <li class="breadcrumb-item active">{{ $newsItem->title }}</li>
@endsection



@section('body')
    <!-- About Us Area start -->
    <section class="about-area pt-130 rpt-100 rel z-1 mb-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12 col-lg-12">
                    <div class="about-image2 mb-3 wow fadeInUp delay-0-2s">
                        <img src="{{ asset('storage/'.$newsItem->image) }}" alt="{{ $newsItem->title }}">
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="about-content wow fadeInUp delay-0-4s">
                        <div class="section-title mb-40">
                            <span class="sub-title mb-15">Published at: {{ $newsItem->created_at->format('F d, Y') }} by {{ $newsItem->author->name }}</span>
                            <h2>{{ $newsItem->title }}</h2>
                        </div>
                        <div class="content">
                            {!! $newsItem->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area end -->

@endsection

