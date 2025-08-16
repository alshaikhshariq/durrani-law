@extends('master')
@section('content')

    <a id="button"></a>
    <div class="banner_outer position-relative">
        <header class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a class="navbar-brand" href="index.html">
                        <figure class="logo mb-0"><img src="{{asset('assets/images/logo.png')}}" alt="image"
                                                       class="img-fluid"></figure>
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-color navbar-text-color" href="#"
                                   id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false"> Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-color navbar-text-color" href="#"
                                   id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Practice Areas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                        <div class="last_list">
                            <figure class="nav-phoneicon mb-0"><img class="img-fluid"
                                                                    src="{{asset('assets/images/nav-phoneicon.png')}}"
                                                                    alt="image"></figure>
                            <a class="text-decoration-none last_list_atag" href="tel:+568925896325">(+92)
                                0321-2433780-81</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Banner -->
        <section class="banner-con position-relative">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12">
                        <div class="banner_content">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                                            <h1 class="text-white mb-0">Defending Your Rights in the World of Law and
                                                Order</h1>
                                        </div>
                                        <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="content">
                                                <p class="text-white text-size-18">Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur excepteur sint
                                                    occaecat cupidatat non proident, sunt in deserunt mollit anim id est
                                                    laborum.
                                                </p>
                                                <a href="./contact.html" class="text-decoration-none appointment">Book
                                                    Appointment<i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                                            <h1 class="text-white mb-0">Defending Your Rights in the World of Law and
                                                Order</h1>
                                        </div>
                                        <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="content">
                                                <p class="text-white text-size-18">Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur excepteur sint
                                                    occaecat cupidatat non proident, sunt in deserunt mollit anim id est
                                                    laborum.
                                                </p>
                                                <a href="./contact.html" class="text-decoration-none appointment">Book
                                                    Appointment<i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                                            <h1 class="text-white mb-0">Defending Your Rights in the World of Law and
                                                Order</h1>
                                        </div>
                                        <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="content">
                                                <p class="text-white text-size-18">Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur excepteur sint
                                                    occaecat cupidatat non proident, sunt in deserunt mollit anim id est
                                                    laborum.
                                                </p>
                                                <a href="./contact.html" class="text-decoration-none appointment">Book
                                                    Appointment<i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_sideicon">
                    <a href="#footer" class="scroll text-decoration-none">
                        <figure class="scroll-arrow">
                            <img src="{{asset('assets/images/banner-scrolldownarrow.png')}}" alt="image"
                                 class="img-fluid">
                        </figure>
                        <span>Discover<br>More</span>
                    </a>
                    <ul class="list-unstyled mb-0 social-icons">
                        <li><a href="https://www.facebook.com/login/" class="text-decoration-none"><i
                                    class="fa-brands fa-facebook-f social-networks"></i></a></li>
                        <li><a href="https://twitter.com/i/flow/login" class="text-decoration-none"><i
                                    class="fa-brands fa-x-twitter social-networks"></i></a></li>
                        <li><a href="https://www.linkedin.com/login" class="text-decoration-none"><i
                                    class="fa-brands fa-linkedin social-networks"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <!-- What we do -->
    <section class="committed-con position-relative">
        <figure class="committed-rightimage mb-0">
            <img src="{{asset('assets/images/committed-rightimage.png')}}" alt="image" class="img-fluid">
        </figure>
        <figure class="committed-leftimage mb-0">
            <img src="{{asset('assets/images/committed-leftimage.png')}}" alt="image" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="committed_content" data-aos="fade-up">
                        <h6>What We Do</h6>
                        <h2 class="col-lg-10 col-md-10 col-md-12 p-0">
                            We are committed to delivering exceptional <span
                                class="span_borderbootom">legal solutions</span>
                            across corporate, commercial, litigation, and advisory services for individuals,
                            families, and businesses.
                        </h2>
                        <p class="col-xl-7 col-lg-8 text-size-16 text1 p-0">
                            Our practice covers a wide range of legal areas including corporate structuring,
                            commercial contracts, dispute resolution, intellectual property protection, real estate
                            transactions,
                            and employment law. We provide strategic advice and meticulous documentation to protect
                            our clients’ interests and help them achieve their goals.
                        </p>
                        <p class="col-xl-7 col-lg-8 text-size-16 text2 p-0">
                            With expertise in high-stakes litigation, contract negotiations, property law,
                            and regulatory compliance, we combine in-depth legal knowledge with practical business
                            insight. From court representation to company incorporation, we work closely with our
                            clients to offer reliable, efficient, and results-driven legal support.
                        </p>
                        <a href="./practice-area.html" class="text-decoration-none read_more">
                            Read More<i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <figure class="committed-image mb-0" data-aos="zoom-in">
                            <img src="{{asset('assets/images/committed-image.png')}}" alt="S&B Durrani Law Associates"
                                 class="img-fluid">
                        </figure>
                    </div>

                </div>
            </div>
            <div class="committed_wrapper" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="committed-box">
                            <figure class="icon">
                                <img src="{{asset('assets/images/committed-icon1.png')}}" alt="image" class="img-fluid">
                            </figure>
                            <h5>Litigation & Dispute Resolution</h5>
                            <a href="./practice-area.html" class="text-decoration-none"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="committed-box">
                            <figure class="icon">
                                <img src="{{asset('assets/images/committed-icon2.png')}}" alt="image" class="img-fluid">
                            </figure>
                            <h5>Corporate & Commercial Law</h5>
                            <a href="./practice-area.html" class="text-decoration-none"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="committed-box">
                            <figure class="icon">
                                <img src="{{asset('assets/images/committed-icon6.png')}}" alt="image" class="img-fluid">
                            </figure>
                            <h5>Intellectual Property (IP) Law</h5>
                            <a href="./practice-area.html" class="text-decoration-none"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="committed-box">
                            <figure class="icon">
                                <img src="{{asset('assets/images/committed-icon4.png')}}" alt="image" class="img-fluid">
                            </figure>
                            <h5>Real Estate & Property Law</h5>
                            <a href="./practice-area.html" class="text-decoration-none"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="committed-box">
                            <figure class="icon">
                                <img src="{{asset('assets/images/committed-icon5.png')}}" alt="image" class="img-fluid">
                            </figure>
                            <h5>Employment & Human Resources (HR) Law</h5>
                            <a href="./practice-area.html" class="text-decoration-none"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="committed-box">
                            <figure class="icon">
                                <img src="{{asset('assets/images/committed-icon7.png')}}" alt="image" class="img-fluid">
                            </figure>
                            <h5>Accounting & Taxation Support</h5>
                            <a href="./practice-area.html" class="text-decoration-none"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="case-con">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="case_content text-center" data-aos="fade-up">
                        <h6>Our Clients</h6>
                        <h2>Trusted by <span class="span_borderbootom">leading businesses</span> and individuals</h2>
                        <p class="text-size-16 mb-0">
                            We are proud to serve a diverse portfolio of clients, from growing enterprises to
                            entrepreneurs and private individuals, delivering legal
                            solutions tailored to their unique needs.
                        </p>
                    </div>
                </div>

            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="{{asset('assets/images/clients/AWWAL-MODARABA.jpg')}}"
                                               alt="Awwal Modaraba" class="img-fluid"></div>
                        <div class="item"><img
                                src="{{asset('assets/images/clients/BankIslami_logo_without_Motive.png')}}"
                                alt="BankIslami" class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/FEROZE-1888-LOGO.jpg')}}"
                                               alt="Feroze 1888" class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/FHM-LOGO.svg')}}" alt="FHM"
                                               class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/GTML-LOGO.png')}}" alt="GTML"
                                               class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/HMB-LOGO.jpeg')}}" alt="HMB"
                                               class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/LIQUIBOX.png')}}" alt="Liquibox"
                                               class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/Logo-Trust-Modaraba-scaled.jpg')}}"
                                               alt="Trust Modaraba" class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/lucky_commodities_cover.jpeg')}}"
                                               alt="Lucky Commodities" class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/Lucky-Knits.png')}}"
                                               alt="Lucky Knits" class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/MACYS.png')}}" alt="Macys"
                                               class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/MCB-Bank-Logo.jpg')}}" alt="MCB Bank"
                                               class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/MIDAS-LOGO.png')}}" alt="Midas"
                                               class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/new-logo-2017.png')}}"
                                               alt="New Logo 2017" class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/NGC-LOGO.png')}}" alt="NGC"
                                               class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/OLP-LOGO.jpg')}}" alt="OLP"
                                               class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/POWER-CEMENT.png')}}"
                                               alt="Power Cement" class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/SAIMA-ARABIAN.webp')}}"
                                               alt="Saima Arabian" class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/SEALED-AIR.jpg')}}" alt="Sealed Air"
                                               class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/Seatrade_logo.jpg')}}" alt="Seatrade"
                                               class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/SHAHBAZ-GARMENTS-LOGO.png')}}"
                                               alt="Shahbaz Garments" class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/SINDH-BANK-LOGO.png')}}"
                                               alt="Sindh Bank" class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/SINDH-NOORIABAD.png')}}"
                                               alt="Sindh Nooriabad" class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/SUGIH.jpeg')}}" alt="Sugih"
                                               class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/SYSTEMS-LTD-LOGO.png')}}"
                                               alt="Systems Ltd" class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/UBL-LOGO.png')}}" alt="UBL"
                                               class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/YB-HOLDINGS.jpeg')}}"
                                               alt="YB Holdings" class="img-fluid"></div>
                        <div class="item"><img src="{{asset('assets/images/clients/YTML-LOGO.png')}}" alt="YTML"
                                               class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Violence -->
    <section class="violence-con position-relative">
        <div class="container">
            <div class="row">
                <div class="violence_wrapper position-relative">
                    <div class="violence_content" data-aos="fade-up">
                        <h1 class="text-white">We are here to fight against any violence</h1>
                        <p class="text-white text-size-16">Repudiandae sint et molestiae non recusandae itaque earum
                            rerum hic tenetur a sapiente delectus maiores alias soluta nobis
                            est eligendi optio cumque nihil imeit minus id quod maxime placeat facere possimus,.
                        </p>
                        <a href="./contact.html" class="text-decoration-none appointment">Book Appointment<i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="testimonial-con position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="testimonial_wrapper position-relative">
                        <div class="image-bg"></div>
                        <figure class="testimonial-image mb-0">
                            <img src="./assets/images/testimonial-image.png" alt="image" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="owl-carousel owl-theme" data-aos="fade-up">
                        <div class="item">
                            <div class="testimonial_content">
                                <div class="content">
                                    <figure class="testimonial-quote mb-0">
                                        <img src="./assets/images/testimonial-quote.png" alt="image" class="img-fluid">
                                    </figure>
                                    <h2 class="mb-0">What our <span class="span_borderbootom">clients</span> are saying</h2>
                                </div>
                                <p class="text-size-18">”Quisruam est rui dolorem ipsum ruia dolor sit consecteturexer non numa eius modi tempora incidunt ut labore et doraeria aure
                                    uat volupta rem inciu nar aute irure dolor in reprehenderullaein voluptate velit esse maiores alias consequatur aut perferendis
                                    doloribus asperiores ecessitatibus eveniet.”
                                </p>
                                <div class="review-content">
                                    <figure class="testimonial-personimage mb-0">
                                        <img src="./assets/images/testimonial-personimage.jpg" alt="image" class="img-fluid">
                                    </figure>
                                    <div class="detail">
                                        <span class="name">Kevin Andrew</span>
                                        <span class="position">CEO, of the company</span>
                                        <figure class="testimonial-starimage mb-0">
                                            <img src="./assets/images/testimonial-starimage.png" alt="image" class="img-fluid">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_content">
                                <div class="content">
                                    <figure class="testimonial-quote mb-0">
                                        <img src="./assets/images/testimonial-quote.png" alt="image" class="img-fluid">
                                    </figure>
                                    <h2 class="mb-0">What our <span class="span_borderbootom">clients</span> are saying</h2>
                                </div>
                                <p class="text-size-18">”Quisruam est rui dolorem ipsum ruia dolor sit consecteturexer non numa eius modi tempora incidunt ut labore et doraeria aure
                                    uat volupta rem inciu nar aute irure dolor in reprehenderullaein voluptate velit esse maiores alias consequatur aut perferendis
                                    doloribus asperiores ecessitatibus eveniet.”
                                </p>
                                <div class="review-content">
                                    <figure class="testimonial-personimage mb-0">
                                        <img src="./assets/images/testimonial-personimage.jpg" alt="image" class="img-fluid">
                                    </figure>
                                    <div class="detail">
                                        <span class="name">Kevin Andrew</span>
                                        <span class="position">CEO, of the company</span>
                                        <figure class="testimonial-starimage mb-0">
                                            <img src="./assets/images/testimonial-starimage.png" alt="image" class="img-fluid">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Consultation -->
    <section class="consultation-con position-relative">
        <figure class="consultation-sideimage mb-0">
            <img src="{{asset('assets/images/consultation-sideimage.png')}}" alt="image" class="image-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="consultation_wrapper position-relative">
                        <figure class="consultation-image mb-0">
                            <img src="{{asset('assets/images/consultation-image.jpg')}}" alt="image"
                                 class="image-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="consultation_content" data-aos="fade-up">
                        <h6>Get in touch</h6>
                        <h2 class="text-white">Book a free <span class="span_borderbootom">consultation</span></h2>
                        <form id="contactpage" method="post" class="position-relative">
                            <div class="form-group input1 float-left">
                                <input type="text" class="form_style" placeholder="Name" name="fname" id="fname">
                            </div>
                            <div class="form-group float-left">
                                <input type="tel" class="form_style" placeholder="Phone" name="phone" id="phone">
                            </div>
                            <div class="form-group input1 float-left">
                                <input type="email" class="form_style" placeholder="Email" name="email" id="email">
                            </div>
                            <div class="form-group float-left">
                                <select class="form-control">
                                    <option>Practice Area</option>
                                    <option>Immigration Law</option>
                                    <option>Business Law</option>
                                    <option>Criminal Law</option>
                                </select>
                            </div>
                            <div class="form-group message">
                                <textarea class="form_style" placeholder="Message" rows="3" name="msg"></textarea>
                            </div>
                            <button id="submit" type="submit" class="appointment">Book Appointment<i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
