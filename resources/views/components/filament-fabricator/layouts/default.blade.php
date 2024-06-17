@props(['page'])
<x-filament-fabricator::layouts.base :title="$page->title">


    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <header class="main-header menu-absolute">

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container container-1620 clearfix">

                    <div class="header-inner rpy-10 rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="index.html"><img src="{{ asset('assets/images/logos/logo.png') }}" alt="Logo" title="Logo"></a></div>
                        </div>

                        <div class="nav-outer ms-lg-auto clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header py-10">
                                    <div class="mobile-logo">
                                        <a href="index.html">
                                            <img src="{{ asset('assets/images/logos/logo.png') }}" alt="Logo" title="Logo">
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
                                        <li><a href="index.html">Home</a></li>
                                        <li class="dropdown"><a href="#">Our Services</a>
                                            <ul>
                                                <li><a href="web_design.html">Web Designing</a></li>
                                                <li><a href="web_development.html">Web Development</a></li>
                                                <li><a href="web_hosting.html">Web Hosting</a></li>
                                                <li><a href="ecommerce.html">E-Commerce Solutions</a></li>
                                                <li><a href="seo.html">Search Engine Optimization SEO</a></li>
                                                <li><a href="knet.html">Payment Gateway Integration</a></li>
                                                <li><a href="app_development.html">App Development</a></li>
                                                <li><a href="google_apps.html">Google Apps</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Ecommerce</a>
                                            <ul>
                                                <li><a href="sell.html">Sell on Website</a></li>
                                                <li><a href="mobile.html">Sell on Mobile App</a></li>
                                                <li><a href="feature.html">Features</a></li>
                                                <li><a href="price.html">Pricing</a></li>
                                                <li><a href="clients.html">Our Clients</a></li>
                                                <li><a href="demo.html"><font color="#f52629">Ask us Demo</font></a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Marketing</a>
                                            <ul>
                                                <li><a href="socail.html">Social Media Management</a></li>
                                                <li><a href="online.html">Online Marketing</a></li>
                                                <li><a href="sms.html">SMS marketing</a></li>
                                                <li><a href="email.html">Email Marketing</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li class="dropdown"><a href="#">Support</a>
                                            <ul>
                                                <li><a href="https://clients.gulfclick.net/index.php?rp=/login">Client Login</a></li>
                                                <li><a href="https://clients.gulfclick.net/register.php">Register New Account</a></li>
                                                <li><a href="https://gulfclick.net/support/ticket">Submit a Ticket</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">About us</a>
                                            <ul>
                                                <li><a href="aboutus.html">About G Solutions</a></li>
                                                <li><a href="careers.html">Careers</a></li>
                                                <li><a href="news.html">News</a></li>
                                                <li><a href="contactus.html">Contact us</a></li>
                                            </ul>
                                        </li>
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
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="text" name="text" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn">Submit now</button>
                        </div>
                    </form>
                </div>

                <!--Social Icons-->
                <div class="social-style-one">
                    <a href="https://www.facebook.com/GulfwebKuwait/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/gulfweb/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/gulfweb?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/gulfweb?originalSubdomain=kw" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </section>
        <!--End Hidden Sidebar -->

        <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-220 rpt-150 pb-170 rpb-100 rel z-1 bgs-cover text-center" style="background-image: url({{ asset('assets/images/banner/banner-bg.jpg') }});">
            <div class="container">
                <div class="banner-inner rpt-10">
                    <h2 class="page-title wow fadeInUp delay-0-2s">Web Design</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Web Design</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />



        <!-- footer area start -->
        <footer class="main-footer rel z-1" style="background-image: url({{ asset('assets/images/footer/footer-bg-shape-two.png') }})">
            <div class="container container-1290">
                <div class="footer-top pt-80 pb-60">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="footer-logo mb-20 wow fadeInRight delay-0-2s">
                                <a href="index.html"><img src="{{ asset('assets/images/logos/footer-logo.png') }}" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-8 text-lg-end">
                            <div class="social-style-four mb-20 wow fadeInLeft delay-0-2s">
                                <a href="https://www.facebook.com/GulfwebKuwait/" target="_blank"><i class="fab fa-facebook-f"></i> <span>Facebook</span></a>
                                <a href="https://www.instagram.com/gulfweb/?hl=en" target="_blank"><i class="fab fa-instagram"></i> <span>Twitter</span></a>
                                <a href="https://twitter.com/gulfweb?lang=en" target="_blank"><i class="fab fa-twitter"></i> <span>Twitter</span></a>
                                <a href="https://www.linkedin.com/company/gulfweb?originalSubdomain=kw" target="_blank"><i class="fab fa-linkedin-in"></i> <span>Linkedin</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="footer-left-content pt-80">
                            <div class="lets-work mb-50 wow fadeInUp delay-0-2s">
                                <span>Contact Us</span>
                            </div>
                            <div class="footer-contact-info wow fadeInUp delay-0-3s">
                                <a class="theme-btn style-three" href="mailto:info@gsolutions.com">info@gsolutions.com <i class="far fa-arrow-right"></i></a>
                                <a class="theme-btn style-three phone-number" href="callto:+965 2265 0262">+965 2265 0262 <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-right-content">
                            <h4 class="footer-title wow fadeInUp delay-0-2s">Quick Links</h4>
                            <div class="footer-widget widget_nav_menu">
                                <ul class="list-style-two wow fadeInUp delay-0-3s">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="web_design.html">Our Services</a></li>
                                    <li><a href="sell.html">Ecommerce</a></li>
                                    <li><a href="socail.html">Marketing</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                </ul>
                                <ul class="list-style-two wow fadeInUp delay-0-4s">
                                    <li><a href="https://gulfclick.net/support/ticket" target="_blank">Support</a></li>
                                    <li><a href="aboutus.html">About Us</a></li>
                                    <li><a href="careers.html">Careers</a></li>
                                    <li><a href="news.html">News &amp; Events</a></li>
                                    <li><a href="contactus.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="footer-bottom-menu pt-40 pb-35 rpb-0 wow fadeInRight delay-0-2s">
                                <ul>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                    <li><a href="terms.html">Terms &amp; Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="copyright-text text-lg-end pt-40 pb-35 rpt-10 wow fadeInLeft delay-0-2s">
                                Copyrights © 2023. All rights reserved by G Solutions.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->


        <!-- Scroll Top Button -->
        <button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>

    </div>
    <!--End pagewrapper-->

</x-filament-fabricator::layouts.base>
