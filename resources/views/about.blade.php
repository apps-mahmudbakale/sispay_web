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
    <link rel="icon" type="image/png" href="{{asset('favicon.png')}}">
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
                            <img class="logo-dark" src="{{ asset('logo-white.png') }}" alt="logo" style="width:230px;">
                        </a>
                        <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                            <div class="menu-close xl-none">
                                <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                            </div>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{route('welcome')}}" class="nav-link active">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('about')}}" class="nav-link">
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


     <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
          <img
            src="assets/img/breadcrumb/br-shape-1.png"
            alt="Image"
            class="br-shape-one xs-none"
          />
          <img
            src="assets/img/breadcrumb/br-shape-2.png"
            alt="Image"
            class="br-shape-two xs-none"
          />
          <img
            src="assets/img/breadcrumb/br-shape-3.png"
            alt="Image"
            class="br-shape-three moveHorizontal sm-none"
          />
          <img
            src="assets/img/breadcrumb/br-shape-4.png"
            alt="Image"
            class="br-shape-four moveVertical sm-none"
          />
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 col-md-8 col-sm-8">
                <div class="breadcrumb-title">
                  <h2>About Us</h2>
                  <ul class="breadcrumb-menu list-style">
                    <li><a href="{{route('about')}}">Home </a></li>
                    <li>About Us</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                <div class="breadcrumb-img">
                  <img
                    src="assets/img/breadcrumb/br-shape-5.png"
                    alt="Image"
                    class="br-shape-five animationFramesTwo"
                  />
                  <img
                    src="assets/img/breadcrumb/br-shape-6.png"
                    alt="Image"
                    class="br-shape-six bounce"
                  />
                  <img
                    src="assets/img/breadcrumb/breadcrumb-1.png"
                    alt="Image"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container" style="text-align:justify; line-spacing:7px; padding-top:28px;">
        <h4>About Us</h4>
        <p style="line-height:40px">
        The name of the company is SISPAY which is the acronym of Secured Integrated System Payment, we developed hardware device inbuilt with the autorun Fintech software that can allow smartphones to read ATM cards. The device will allow users to insert their ATM cards into their smartphones, enabling them to make cashless transactions easily. Our solution addresses a significant problem faced by small and medium businesses in the country, which is the difficulty of performing cashless transactions as a result of new cashless policy in the Nation.
        Our product offers a convenient and secure alternative to traditional point-of-sale (POS) systems, which can be expensive and difficult to set up. By simply plugging in our hardware device to a smartphone and using our software, businesses can accept payments from ATM cards quickly and easily.
        </p>
        <p style="line-height:40px">
       Our target market includes small and medium businesses that are looking for an affordable and easy-to-use cashless payment solution. We anticipate strong demand for our product, given the increasing trend towards cashless transactions and the growing number of businesses looking for alternative payment methods.
        </p>

        <p style="line-height:40px;">
        In summary, our product offers a simple, affordable, and secure cashless payment solution for small and medium businesses. We are confident that our hardware and software will help businesses streamline their operations and improve their bottom line. 
        </p>
        <h4>Mission</h4>
        <p>
        To provide small and medium-sized businesses with a simple, affordable, and secured solution for accepting electronic payments, enabling them to increase sales and reach more customers.
        </p>
        <h4>Vision</h4>
        <p>
        To become the leading provider of hardware and software solutions for small and medium-sized businesses, empowering them to compete in a rapidly evolving digital economy.
        </p>
        </div>
        
        <section class="team-wrap pt-100 pb-75">
          <div class="container">
        <h4>Team</h4>

          <p style="text-align:justify; line-height:40px;">
          SISPAY NIG. LIMITED have a very strong team, including Founder, cofounder, partners, and board of advisers which are highly dedicated, experience personals from different perspectives and have unique skills which are currently participants of the progressive development in the world. "Our team has extensive experience in software and business development. We are passionate about using technology to solve real-world problems, and we believe that our solution can make a significant impact on small and medium businesses in Nigeria."
          </p>
            <div class="row justify-content-center">
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-card style1">
                  <div class="team-img">
                    <img src="{{asset('imran.jpeg')}}" alt="Image" />
                    <ul class="social-profile list-style style1">
                      <li>
                        <a target="_blank" href="https://facebook.com/">
                          <i class="ri-facebook-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://linkedin.com/">
                          <i class="ri-linkedin-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://twitter.com/">
                          <i class="ri-twitter-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://pinterest.com/">
                          <i class="ri-pinterest-fill"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="team-info">
                    <h3>Imran Lawan</h3>
                    <span>CEO / Founder</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-card style1">
                  <div class="team-img">
                    <img src="{{asset('mahmud.jpeg')}}" alt="Image" />
                    <ul class="social-profile list-style style1">
                      <li>
                        <a target="_blank" href="https://facebook.com/">
                          <i class="ri-facebook-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://linkedin.com/">
                          <i class="ri-linkedin-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://twitter.com/">
                          <i class="ri-twitter-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://pinterest.com/">
                          <i class="ri-pinterest-fill"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="team-info">
                    <h3>Mahmud Bakale</h3>
                    <span>Co-Founder & Software Developer</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-card style1">
                  <div class="team-img">
                    <img src="{{asset('fatima.jpeg')}}" alt="Image" />
                    <ul class="social-profile list-style style1">
                      <li>
                        <a target="_blank" href="https://facebook.com/">
                          <i class="ri-facebook-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://linkedin.com/">
                          <i class="ri-linkedin-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://twitter.com/">
                          <i class="ri-twitter-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://pinterest.com/">
                          <i class="ri-pinterest-fill"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="team-info">
                    <h3>Fatima Ahmad Sani</h3>
                    <span>Co-Founder & Chartered Financial Analyst</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-card style1">
                  <div class="team-img">
                    <img src="{{asset('abdul.jpeg')}}" alt="Image" />
                    <ul class="social-profile list-style style1">
                      <li>
                        <a target="_blank" href="https://facebook.com/">
                          <i class="ri-facebook-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://linkedin.com/">
                          <i class="ri-linkedin-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://twitter.com/">
                          <i class="ri-twitter-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://pinterest.com/">
                          <i class="ri-pinterest-fill"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="team-info">
                    <h3>Abdulrazak Opeyemi</h3>
                    <span>Senior Software Engineer</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-card style1">
                  <div class="team-img">
                    <img src="{{asset('mustapha.jpeg')}}" alt="Image" />
                    <ul class="social-profile list-style style1">
                      <li>
                        <a target="_blank" href="https://facebook.com/">
                          <i class="ri-facebook-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://linkedin.com/">
                          <i class="ri-linkedin-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://twitter.com/">
                          <i class="ri-twitter-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://pinterest.com/">
                          <i class="ri-pinterest-fill"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="team-info">
                    <h3>Mustapha Wakili</h3>
                    <span>Project Manager</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-card style1">
                  <div class="team-img">
                    <img src="{{asset('hassan.jpeg')}}" alt="Image" />
                    <ul class="social-profile list-style style1">
                      <li>
                        <a target="_blank" href="https://facebook.com/">
                          <i class="ri-facebook-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://linkedin.com/">
                          <i class="ri-linkedin-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://twitter.com/">
                          <i class="ri-twitter-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://pinterest.com/">
                          <i class="ri-pinterest-fill"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="team-info">
                    <h3>Hassan Muhammad</h3>
                    <span>Board of Advisors</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-card style1">
                  <div class="team-img">
                    <img src="{{asset('murtala.jpg')}}" alt="Image" />
                    <ul class="social-profile list-style style1">
                      <li>
                        <a target="_blank" href="https://facebook.com/">
                          <i class="ri-facebook-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://linkedin.com/">
                          <i class="ri-linkedin-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://twitter.com/">
                          <i class="ri-twitter-fill"></i>
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="https://pinterest.com/">
                          <i class="ri-pinterest-fill"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="team-info">
                    <h3>Mal. Murtala Lawan</h3>
                    <span>Board of Advisors</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
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
                            We have hardware device inbuilt with the autorun Fintech software that can allow smartphones
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
