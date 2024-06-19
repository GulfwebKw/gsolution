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
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-page-form form-style-one wow fadeInUp delay-0-2s">
                        <div class="section-title mb-35">
                            <span class="sub-title mb-15">Get Free Quote</span>
                            <h3>Drop Us a Message</h3>
                        </div>
                        <form id="contactForm" class="contactForm"  action="assets/php/form-process.php" name="contactForm" method="post">
                            <div class="row gap-60 pt-15">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name"><i class="far fa-user"></i></label>
                                        <input type="text" id="name" name="name" class="form-control" value="" placeholder="Full Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone_number"><i class="far fa-phone"></i></label>
                                        <input type="text" id="phone_number" name="phone_number" class="form-control" value="" placeholder="Phone" required data-error="Please enter your Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email"><i class="far fa-envelope"></i></label>
                                        <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email Address" required data-error="Please enter your Email Address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <label for="resume"> <i class="far fa-file-pdf"></i> Upload Resume (PDF or Word):</label>
                                    <input type="file" class="form-control" name="resume" id="resume" accept=".pdf,.doc,.docx" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="linkedin_profile"><i class="fab fa-linkedin-in"></i> LinkedIn Profile (optional):</label>
                                    <input type="url" class="form-control" name="linkedin_profile" id="linkedin_profile">
                                </div>

                                <div class="col-md-12">
                                    <label for="portfolio_link"><i class="far fa-link"></i> Portfolio Link (if applicable):</label>
                                    <input type="url" class="form-control" name="portfolio_link" id="portfolio_link">
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message"><i class="far fa-pencil"></i></label>
                                        <textarea name="message" id="message" class="form-control" rows="2" placeholder="Message" required data-error="Please enter your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group pt-5 mb-0">
                                        <button type="submit" class="theme-btn style-two w-100">Apply Now <i class="far fa-arrow-right"></i></button>
                                        <div id="msgSubmit" class="hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Area end -->

@endsection

