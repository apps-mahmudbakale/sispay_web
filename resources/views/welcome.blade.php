<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/remixicon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/fancybox.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark-theme.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>SISPAY| Home</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>

    <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div>


    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>


    <div class="page-wrapper">

        <header class="header-wrap style1">
            <div class="header-top">
                <button type="button" class="close-sidebar">
                    <i class="ri-close-fill"></i>
                </button>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="header-top-left">
                                <ul class="contact-info list-style">
                                    <li><i class="flaticon-call"></i> <a href="tel:08032392960">(+234) 8032392960</a>
                                    </li>
                                    <li><i class="flaticon-email-1"></i> <a
                                            href="https://info@sispaynig.com><span
                                                class="_cf_email_"
                                            data-cfemail="info@sispaynig.com">[info@sispaynig.com]</span></a>
                                    </li>
                                    <li><i class="flaticon-pin"></i>
                                        <p>Daura, Katsina State, NG</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img class="logo-light" src="{{ asset('logo.png') }}" alt="logo" style="width:230px;">
                            <img class="logo-dark" src="{{ asset('logo-white.png') }}" alt="logo"
                                style="width:230px;">
                        </a>
                        <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                            <div class="menu-close xl-none">
                                <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                            </div>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{ route('welcome') }}" class="nav-link active">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link">
                                        About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Sign In</a>
                                </li>
                                <li class="nav-item xl-none">
                                    <a href="" class="btn style1">Join Now</a>
                                </li>
                            </ul>
                            <div class="others-options  lg-none">
                                {{-- <div class="header-btn lg-none">
                                    <a href="register.html" class="btn style1">Sign In</a>
                                </div>
                                &nbsp; &nbsp; --}}
                                <div class="header-btn lg-none">
                                    <a href="" class="btn style1">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="mobile-bar-wrap">
                        <div class="mobile-sidebar">
                            <i class="ri-menu-4-line"></i>
                        </div>
                        <button class="searchbtn xl-none" type="button">
                            <i class="flaticon-search"></i>
                        </button>
                        <div class="mobile-menu xl-none">
                            <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="search-area">
                    <div class="container">
                        <form action="#">
                            <div class="form-group">
                                <input type="search" placeholder="Search Here" autofocus>
                            </div>
                        </form>
                        <button type="button" class="close-searchbox">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>


        <section class="hero-wrap style1 bg-spring">
            <img src="assets/img/hero/hero-shape-1.png" alt="Image" class="hero-shape-one">
            <img src="assets/img/hero/hero-shape-2.png" alt="Image" class="hero-shape-two">
            <img src="assets/img/hero/hero-shape-3.png" alt="Image" class="hero-shape-three">
            <img src="assets/img/hero/hero-shape-4.png" alt="Image" class="hero-shape-four md-none">
            <div class="hero-slider-two owl-carousel">
                <div class="hero-slide-item">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <span>Simple. Transparent. Secure </span>
                                    <h1>Fast & Secure Online Money Transactions</h1>
                                    <p> This is SISPAY
                                        we Empowered and support Business in the Cashless Era easily and securely.</p>
                                    <a href="service-one.html" class="btn style1">Join Now</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero-img-wrap">
                                    <img src="{{ asset('22.png') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide-item">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <span>Reliable. Zero Service Charge </span>
                                    <h1>Move Your Money In Easy Secured Steps</h1>
                                    <p>With Sispay your money is secured and always accessible.</p>
                                    <a href="service-one.html" class="btn style1">Join Now</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero-img-wrap">
                                    <img src="{{ asset('21.png') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide-item">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <span>Easy. Fastest . Secure </span>
                                    <h1>Secured &amp; Easy Online Payment Solution </h1>
                                    <p>we Empowered and support Business in the Cashless Era easily and securely.</p>
                                    <a href="service-one.html" class="btn style1">Join Now</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero-img-wrap">
                                    <img src="{{ asset('23.png') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="about-wrap style1 ptb-100">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img-wrap">
                            <img src="assets/img/about/about-shape-1.png" alt="Image"
                                class="about-shape-one bounce">
                            <img src="assets/img/about/about-shape-2.png" alt="Image"
                                class="about-shape-two moveHorizontal">
                            <img src="{{ asset('11.jpg') }}" alt="Image" class="about-img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <img src="assets/img/about/about-shape-3.png" alt="Image" class="about-shape-three">
                            <div class="content-title style1">
                                <span>Smart Banking</span>
                                <h2>The Better Way To make Cashless Transactions</h2>
                                <p>With just a SISPAY smartcard reader using your phone you can:

                                    .</p>
                            </div>
                            <ul class="content-feature-list style1 list-style">
                                <li><span><i class="flaticon-tick"></i></span>Withdraw money from your card easily.
                                </li>
                                <li><span><i class="flaticon-tick"></i></span>Transfer Money from your card affordily.
                                </li>
                                <li><span><i class="flaticon-tick"></i></span>Perform other services such as Buying
                                    Airtime, data, pay bills and many
                                    more.</li>
                            </ul>
                            <a href="about.html" class="btn style1">More About us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="feature-wrap pt-100 pb-75 bg-albastor">
            <div class="container">
                <div class="section-title style1 text-center mb-40">
                    <span>Our Feature</span>
                    <h2>With SISPAY You Can</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="feature-card style1">
                            <div class="feature-info">
                                <div class="feature-title">
                                    <span><img src="assets/img/feature/feature-icon-4.png" alt="Image"></span>
                                    <h3>WITHDRAW MONEY</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet dolor alut const slice elit aliquid dolor ametin perfer
                                    endis velit sed fuga volup tation sit praising pain.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="feature-card style1">
                            <div class="feature-info">
                                <div class="feature-title">
                                    <span><img src="assets/img/feature/feature-icon-5.png" alt="Image"></span>
                                    <h3>TRANSFER MONEY </h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet dolor alut const slice elit aliquid dolor ametin perfer
                                    endis velit sed fuga volup tation sit praising pain.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="feature-card style1">
                            <div class="feature-info">
                                <div class="feature-title">
                                    <span><img src="assets/img/feature/feature-icon-6.png" alt="Image"></span>
                                    <h3>OTHER SERVICES</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet dolor alut const slice elit aliquid dolor ametin perfer
                                    endis velit sed fuga volup tation sit praising pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="security-wrap ptb-100">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 col-12 order-lg-1 order-2">
                        <div class="security-content">
                            <div class="content-title style1">
                                <span>Banking Security</span>
                                <h2>The Safest Way To Transact Your Money Fast</h2>
                            </div>
                            <div class="feature-item-wrap">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <img src="assets/img/security/security-icon-1.png" alt="Image" />
                                    </div>
                                    <div class="feature-text">
                                        <h3>Safest Way for SMEs</h3>
                                        <p>
                                           Protect Your Business: SISPAY provides SMEs with the safest way to transact money. Eliminate the risks associated with handling cash and reduce the chances of fraud or theft.
                                        </p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <img src="assets/img/security/security-icon-2.png" alt="Image" />
                                    </div>
                                    <div class="feature-text">
                                        <h3>Bank-Level Security</h3>
                                        <p>
                                            Our robust security measures ensure that your transactions are encrypted and protected from unauthorized access. Focus on growing your business with peace of mind
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-2 order-1">
                        <div class="security-img-wrap">
                            <img src="assets/img/security/security-shape-1.png" alt="Image"
                                class="security-shape-one" />
                            <img src="assets/img/security/security-shape-2.png" alt="Image"
                                class="security-shape-two" />
                            <img src="{{ asset('24.png') }}" alt="Image" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-wrap style1 pt-100 pb-75">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-xl-6 col-lg-12 service-card-wrap">
                        <div class="row">
                            <div class="col-md-6 mmt-45">
                                <div class="service-card style1">
                                    <span class="service-icon">
                                        <img src="assets/img/service/service-icon-1.png" alt="Image" />
                                    </span>
                                    <h3>
                                        <a href="service-details.html">Deadline Reminders</a>
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit ametus situlo consec tetur adicingus
                                        elittque coris sapite illo sit.
                                    </p>
                                </div>
                                <div class="service-card style1">
                                    <span class="service-icon">
                                        <img src="assets/img/service/service-icon-2.png" alt="Image" />
                                    </span>
                                    <h3>
                                        <a href="">Market Potential</a>
                                    </h3>
                                    <p>
                                       Join the Cashless Revolution: As the world rapidly shifts towards digital payments, SMEs are seeking secure and convenient payment solutions. SISPAY caters specifically to the needs of SMEs, offering a safe and efficient way to transact
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card style1">
                                    <span class="service-icon">
                                        <img src="assets/img/service/service-icon-3.png" alt="Image" />
                                    </span>
                                    <h3><a href="service-details.html">Competitive Advantage</a></h3>
                                    <p>
                                       Tailored for SMEs: Unlike generic payment solutions, SISPAY understands the unique challenges faced by SMEs and provides a user-friendly platform designed specifically for their needs
                                    </p>
                                </div>
                                <div class="service-card style1">
                                    <span class="service-icon">
                                        <img src="assets/img/service/service-icon-4.png" alt="Image" />
                                    </span>
                                    <h3>
                                        <a href="">Trusted Partner</a>
                                    </h3>
                                    <p>
                                        We have built a reputation as a trusted partner for SMEs, helping them streamline their payment processes, reduce costs, and enhance security
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="service-content">
                            <div class="content-title style1">
                                <span>Our Services</span>
                                <h2>We provide 24/7 Services</h2>
                                <p>
                                    Anytime, Anywhere Access: SISPAY is committed to providing round-the-clock services.
                                    Whether it's day or night, weekdays or weekends, our support team is here to assist
                                    you with any inquiries or issues.
                                    
                                </p>
                                <p>
                                    Uninterrupted Convenience: Never worry about time constraints or service
                                    availability. With SISPAY, you can make cashless transactions whenever you need,
                                    ensuring a seamless and uninterrupted payment experience.
                                </p>
                            </div>
                            <a href="" class="btn style1">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="app-wrap style3 ptb-100">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="app-img-wrap">
                            <img class="bounce" src="{{ asset('8.jpg') }}" alt="Image">
                            <img class="app-shape-one" src="assets/img/app/app-shape-1.png" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="app-content">
                            <div class="content-title style1">
                                <span>Download Our Mobile App</span>
                                <h2>You Can Find All Things You Need In Our App</h2>

                            </div>
                            <div class="app-btn">
                                <a href="https://www.apple.com/app-store/"><img src="assets/img/apple-store.png"
                                        alt="Image"></a>
                                <a href="https://play.google.com/store/apps"><img src="assets/img/play-store.png"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer-wrap bg-rock">
            <div class="container">
                <img src="assets/img/footer-shape-1.png" alt="Image" class="footer-shape-one">
                <img src="assets/img/footer-shape-2.png" alt="Image" class="footer-shape-two">
                <div class="row pt-100 pb-75">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <a href="index.html" class="footer-logo">
                                <img src="{{ asset('logo-white.png') }}" alt="Image" style="width:230px;">
                            </a>
                            <p class="comp-desc">
                                We have hardware device inbuilt with the autorun Fintech software that can allow
                                smartphones
                                to read ATM cards. The device will allow users to insert their ATM cards into their
                                smartphones, enabling them to make cashless transactions easily.
                            </p>
                            <div class="social-link">
                                <ul class="social-profile list-style style1">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://instagram.com/">
                                            <i class="ri-pinterest-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Our Company</h3>
                            <ul class="footer-menu list-style">
                                <li>
                                    <a href="about.html">
                                        <i class="flaticon-next"></i>
                                        Company &amp; Team
                                    </a>
                                </li>
                                <li>
                                    <a href="service-one.html">
                                        <i class="flaticon-next"></i>
                                        Our Services
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <i class="flaticon-next"></i>
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">
                                        <i class="flaticon-next"></i>
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget">

                            </a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Suggestion</h3>
                            <p class="newsletter-text">Make your Suggestion here
                                content</p>
                            <form action="#" class="newsletter-form">
                                <input type="email" placeholder="Your Email">
                                <button type="button">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <p> <i class="ri-copyright-line"></i>{{ date('Y') }} SISPAY. All Rights Reserved </p>
            </div>
        </footer>

    </div>


    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>


    <script data-cfasync="false"
        src="https://templates.hibootstrap.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/fancybox.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/tweenmax.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
