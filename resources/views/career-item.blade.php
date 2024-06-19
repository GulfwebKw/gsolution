@extends('layouts.main')

@section('title' ,  $position->title)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('careers') }}">Careers</a></li>
    <li class="breadcrumb-item active">{{ $position->title }}</li>
@endsection



@section('body')
    <section class="contact-page-area py-130 rpy-100 rel z-1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="our-location-part rmb-55 wow fadeInUp delay-0-2s">
{{--                        <div class="row">--}}
{{--                            <div class="col-xl-10">--}}
{{--                                <div class="section-title mb-60">--}}
{{--                                    <span class="sub-title mb-15">{{ $position->title }}</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="row pb-30">
                            <div class="col-sm-12">
                                <div class="our-location-address mb-40">
                                    <h5>{{ $position->title }}</h5>
                                    {!! $position->content !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $fields =  [
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
                            "name" => "LinkedIn",
                            "title" => "LinkedIn Profile (optional)",
                            "type" => "text",
                            "icon" => "fab fa-linkedin-in",
                            "validation" => ['nullable' , 'url']
                        ],
                        [
                            "name" => "Portfolio",
                            "title" => "Portfolio Link (if applicable)",
                            "type" => "text",
                            "icon" => "far fa-link",
                            "validation" => ['nullable' , 'url']
                        ],
                        [
                            "name" => "Message",
                            "title" => "Message",
                            "type" => "textarea",
                            "icon" => "far fa-pencil",
                            "validation" => ['required' , 'min:10']
                        ],
                    ];
                @endphp
                <div class="col-xl-5 col-lg-6">
                    @livewire(\App\Livewire\ContactUsForm::class , [
                        'fields' => $fields,
                        'subject' =>  $position->title,
                        'type' => 'Apply For Position',
                        'redTitle' => 'Get Free Quote',
                        'attachment_title' => 'Upload Resume (PDF or Word)',
                        'attachment_accept' => '.pdf,.doc,.docx',
                        'success_message' => 'Your Message Sent Successfully.',
                        'buttonLabel' => 'Apply Now',
                        'title' => 'Drop Us a Message',
                    ])
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Area end -->

@endsection

