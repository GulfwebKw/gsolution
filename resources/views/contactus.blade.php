@extends('layouts.main')

@section('title' , 'Contact Us')

@section('breadcrumb')
    <li class="breadcrumb-item active">Contact Us</li>
@endsection



@section('body')
    <section class="contact-page-area py-130 rpy-100 rel z-1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="our-location-part rmb-55 wow fadeInUp delay-0-2s">
                        <div class="row">
                            <div class="col-xl-10">
                                <div class="section-title mb-60">
                                    <span class="sub-title mb-15">Contact Us</span>
                                    <h2>We're here to help!</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row gap-80 pb-30">

                            @foreach($setting->branches as $branch)
                            <div class="col-sm-6">
                                <div class="our-location-address mb-40">
                                    <h5>{{ optional($branch)['title'] }}</h5>
                                    <p>{!! nl2br(e(optional($branch)['address'])) !!}</p>
                                    @if(optional($branch)['email'])
                                    <a class="mailto" href="mailto:{{ optional($branch)['email'] }}">support@gsolution.com</a><br>
                                    @endif
                                    @if(optional($branch)['email'])
                                    <a class="callto" href="callto:{{ str_replace(' ', '' ,optional($branch)['phone']) }}"><i class="fas fa-phone"></i> {{ optional($branch)['phone'] }}</a>
                                    @endif
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <h4>Follow Us</h4>
                        <div class="social-style-two pt-15">
                            @foreach($setting->socials as $social)
                                <a href="{{ $social['link'] }}" target="_blank"><i class="fab {{ $social['icon'] }}"></i> {{$social['title']}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">

                    @livewire(\App\Livewire\ContactUsForm::class , [
                        'fields' => [
                            [
                                "name" => "Phone",
                                "title" => "Phone",
                                "type" => "text",
                                "icon" => "far fa-phone",
                                "validation" => ['required']
                            ],
                            [
                                "name" => "Email",
                                "title" => "Email Address",
                                "type" => "email",
                                "icon" => "far fa-envelope",
                                "validation" => ['required' , 'email']
                            ],
                            [
                                "name" => "Message",
                                "title" => "Message",
                                "type" => "textarea",
                                "icon" => "far fa-pencil",
                                "validation" => ['required' , 'min:10']
                            ],
                        ],
                        'subject' =>  '',
                        'type' => 'Contact Us',
                        'redTitle' => 'Get Free Quote',
                        'success_message' => 'Your Message Sent Successfully.',
                        'buttonLabel' => 'Send Message us',
                        'title' => 'Drop Us a Message',
                    ])
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Area end -->

    <!-- Location Map Area Start -->
    <div class="contact-page-map mb-120 rpb-90 wow fadeInUp delay-0-2s">
        <div class="container-fluid">
            <div class="our-location">
                <div id="map" class="gmap_iframe" style="height: 300px;width: 100%;" ></div>
                <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
                <script>
                    var map = L.map('map').setView([{{ $setting->location['lat'] }}, {{ $setting->location['lng'] }}], 13);
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                    }).addTo(map);
                    L.marker([{{ $setting->location['lat'] }}, {{ $setting->location['lng'] }}]).addTo(map)
                        .bindPopup('{{ config('app.name') }}')
                        .openPopup();
                </script>
            </div>
        </div>
    </div>
    <!-- Location Map Area End -->
@endsection

