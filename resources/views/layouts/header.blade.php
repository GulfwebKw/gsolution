<!-- Preloader -->
<div class="preloader"><div class="custom-loader"></div></div>

<!-- main header -->
<header class="main-header menu-absolute">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container container-1620 clearfix">

            <div class="header-inner rpy-10 rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo"><a href="/"><img src="{{ asset('storage/'.$setting->logo) }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}"></a></div>
                </div>

                <div class="nav-outer ms-lg-auto clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header py-10">
                            <div class="mobile-logo">
                                <a href="/">
                                    <img src="{{ asset('storage/'.$setting->logo) }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}">
                                </a>
                            </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                @include('layouts.menuItem' , ['type' => 'header'])
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>

                <!-- Menu Button -->
                <div class="menu-btns">
                    <!-- menu sidbar -->
                    <div class="menu-sidebar">
                        <button>
                            <img src="{{ asset('assets/images/icons/toggler.svg') }}" alt="Toggler">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>


<!--Form Back Drop-->
<div class="form-back-drop"></div>

<!-- Hidden Sidebar -->
<section class="hidden-bar">
    <div class="inner-box text-center">
        <div class="cross-icon"><span class="fa fa-times"></span></div>
        <div class="title">
            <h4>Get Appointment</h4>
        </div>

        <!--Appointment Form-->
        <div class="appointment-form">
            @livewire(\App\Livewire\ContactUsForm::class , [
                'fields' => [
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
                'subject' => '',
                'type' => 'Get Appointment',
                'success_message' => 'Your Message Sent Successfully.',
                'buttonLabel' => 'Submit now',
                'title' => '',
                'theme' => 'contact-us-form-2'
            ])
        </div>

        <!--Social Icons-->
        <div class="social-style-one">
            @foreach($setting->socials as $social)
                <a href="{{ $social['link'] }}" target="_blank"><i class="fab {{ $social['icon'] }}"></i></a>
            @endforeach
        </div>
    </div>
</section>
<!--End Hidden Sidebar -->
