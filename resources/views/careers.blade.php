@extends('layouts.main')

@section('title' , 'Careers')

@section('breadcrumb')
    <li class="breadcrumb-item active">Careers</li>
@endsection



@section('body')

    <section class="feature-three-area pb-50 rpb-20 rel z-1 pt-130">
        <div class="container container-1290">
            <div class="row gap-130">
                <p>Join our team, we're always looking for new talent. We are looking for people who love web development, technology and everything this industry has to offer. Below you can see our open positions, however don't let anything stop you from getting in touch if you don't see what you like!</p>

{{--                <div class="col-md-6 pb-50"><a class="theme-btn style-three" href="">Submit Your CV <i class="far fa-arrow-right"></i></a></div>--}}

                <div class="clearfix pb-50"></div>

                @foreach($positions as $position)
                <div class="col-md-6">
                    <div class="feature-item-three wow fadeInUp delay-0-2s">
                        <div class="top-part">
                            <span class="serial-number">{{ str($loop->iteration)->padLeft(2 , '0') }}</span>
                            <a class="details-btn" href="{{ route('career-item' , ['Career' => $position , 'slug' => \Illuminate\Support\Str::slug($position->title) ]) }}"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="content">
                            <h4><a href="{{ route('career-item' , ['Career' => $position , 'slug' => \Illuminate\Support\Str::slug($position->title) ]) }}">{{ $position->title }}</a></h4>
                            <p>{{ $position->short_content }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Feature Three Area end -->
@endsection

