@extends('master')
@section('content')

<a id="button"></a>
<div class="banner_outer position-relative">
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="index.html">
                    <figure class="logo mb-0"><img src="{{asset('assets/images/logo.png')}}" alt="image" class="img-fluid"></figure>
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
                            <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#"
                               id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false"> Home </a>
                            <div class="dropdown-menu drop-down-content">
                                <ul class="list-unstyled drop-down-pages">
                                    <li class="nav-item active"><a class="dropdown-item nav-link" href="index.html">Law and Order</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="index1.html">Legal Situations</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="index2.html">Legal Matters</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#"
                               id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false"> Pages </a>
                            <div class="dropdown-menu drop-down-content">
                                <ul class="list-unstyled drop-down-pages">
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="practice-area.html">Practice Areas</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="faq.html">Faq’s</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="team.html">Team</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="review.html">Review</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="case-studies.html">Cases</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#"
                               id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false"> Blog </a>
                            <div class="dropdown-menu drop-down-content">
                                <ul class="list-unstyled drop-down-pages">
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="single-blog.html">Single Blog</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="load-more.html">Load More</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="one-column.html">One Column</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="two-column.html">Two Column</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="three-column.html">Three Column</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="three-colum-sidbar.html">Three Column Sidebar</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="four-column.html">Four Column</a></li>
                                    <li class="nav-item"><a class="dropdown-item nav-link" href="six-colum-full-wide.html">Six Column</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <div class="last_list">
                        <figure class="nav-phoneicon mb-0"><img class="img-fluid" src="{{asset('assets/images/nav-phoneicon.png')}}" alt="image"></figure>
                        <a class="text-decoration-none last_list_atag" href="tel:+568925896325">+5689 2589 6325</a>
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
                                        <h1 class="text-white mb-0">Defending Your Rights in the World of Law and Order</h1>
                                    </div>
                                    <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                                        <div class="content">
                                            <p class="text-white text-size-18">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint
                                                occaecat cupidatat non proident, sunt in deserunt mollit anim id est laborum.
                                            </p>
                                            <a href="./contact.html" class="text-decoration-none appointment">Book Appointment<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                                        <h1 class="text-white mb-0">Defending Your Rights in the World of Law and Order</h1>
                                    </div>
                                    <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                                        <div class="content">
                                            <p class="text-white text-size-18">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint
                                                occaecat cupidatat non proident, sunt in deserunt mollit anim id est laborum.
                                            </p>
                                            <a href="./contact.html" class="text-decoration-none appointment">Book Appointment<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                                        <h1 class="text-white mb-0">Defending Your Rights in the World of Law and Order</h1>
                                    </div>
                                    <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                                        <div class="content">
                                            <p class="text-white text-size-18">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint
                                                occaecat cupidatat non proident, sunt in deserunt mollit anim id est laborum.
                                            </p>
                                            <a href="./contact.html" class="text-decoration-none appointment">Book Appointment<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="banner_wrapper position-relative">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <figure class="banner-image1 mb-0">
                                    <img src="{{asset('assets/images/banner-image1.jpg')}}" alt="image" class="img-fluid">
                                </figure>
                            </div>
                            <div class="item">
                                <figure class="banner-image2 mb-0">
                                    <img src="{{asset('assets/images/banner-image2.jpg')}}" alt="image" class="img-fluid">
                                </figure>
                            </div>
                            <div class="item">
                                <figure class="banner-image1 mb-0">
                                    <img src="{{asset('assets/images/banner-image3.jpg')}}" alt="image" class="img-fluid">
                                </figure>
                            </div>
                            <div class="item">
                                <figure class="banner-image2 mb-0">
                                    <img src="{{asset('assets/images/banner-image4.jpg')}}" alt="image" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner_sideicon">
                <a href="#footer" class="scroll text-decoration-none">
                    <figure class="scroll-arrow">
                        <img src="{{asset('assets/images/banner-scrolldownarrow.png')}}" alt="image" class="img-fluid">
                    </figure>
                    <span>Discover<br>More</span>
                </a>
                <ul class="list-unstyled mb-0 social-icons">
                    <li><a href="https://www.facebook.com/login/" class="text-decoration-none"><i class="fa-brands fa-facebook-f social-networks"></i></a></li>
                    <li><a href="https://twitter.com/i/flow/login" class="text-decoration-none"><i class="fa-brands fa-x-twitter social-networks"></i></a></li>
                    <li><a href="https://www.linkedin.com/login" class="text-decoration-none"><i class="fa-brands fa-linkedin social-networks"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
</div>
<!-- Committed -->
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
                    <h2 class="col-lg-10 col-md-10 col-md-12 p-0">We are committed to providing top-notch <span class="span_borderbootom">legal representation</span> to individuals,
                        families, and businesses.
                    </h2>
                    <p class="col-xl-7 col-lg-8 text-size-16 text1 p-0">Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                        excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia.
                    </p>
                    <p class="col-xl-7 col-lg-8 text-size-16 text2 p-0">Repudiandae sint et molestiae non recusandae itaque earum rerum hic tenetur a sapiente delectus maiores alias soluta
                        nobis est eligendi optio cumque nihil imeit minus id quod maxime placeat facere possimus,.
                    </p>
                    <a href="./practice-area.html" class="text-decoration-none read_more">Read More<i class="fa-solid fa-arrow-right"></i></a>
                    <figure class="committed-image mb-0" data-aos="zoom-in">
                        <img src="{{asset('assets/images/committed-image.png')}}" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
        <div class="committed_wrapper" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="committed-box">
                        <figure class="icon">
                            <img src="{{asset('assets/images/committed-icon1.png')}}" alt="image" class="img-fluid">
                        </figure>
                        <h5>Immigration Law</h5>
                        <a href="./practice-area.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="committed-box">
                        <figure class="icon">
                            <img src="{{asset('assets/images/committed-icon2.png')}}" alt="image" class="img-fluid">
                        </figure>
                        <h5>Business Law</h5>
                        <a href="./practice-area.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="committed-box">
                        <figure class="icon">
                            <img src="{{asset('assets/images/committed-icon3.png')}}" alt="image" class="img-fluid">
                        </figure>
                        <h5>Criminal Law</h5>
                        <a href="./practice-area.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="committed-box">
                        <figure class="icon">
                            <img src="{{asset('assets/images/committed-icon4.png')}}" alt="image" class="img-fluid">
                        </figure>
                        <h5>Real Estate Law</h5>
                        <a href="./practice-area.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="committed-box">
                        <figure class="icon">
                            <img src="{{asset('assets/images/committed-icon5.png')}}" alt="image" class="img-fluid">
                        </figure>
                        <h5>Traffic Violence</h5>
                        <a href="./practice-area.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="committed-box">
                        <figure class="icon">
                            <img src="{{asset('assets/images/committed-icon6.png')}}" alt="image" class="img-fluid">
                        </figure>
                        <h5>Education Law</h5>
                        <a href="./practice-area.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="committed-box">
                        <figure class="icon">
                            <img src="{{asset('assets/images/committed-icon7.png')}}" alt="image" class="img-fluid">
                        </figure>
                        <h5>Family Crimes</h5>
                        <a href="./practice-area.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="committed-box">
                        <figure class="icon">
                            <img src="{{asset('assets/images/committed-icon8.png')}}" alt="image" class="img-fluid">
                        </figure>
                        <h5>Tax Law</h5>
                        <a href="./practice-area.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client -->
<section class="client-con position-relative">
    <figure class="client-sideimage mb-0">
        <img src="{{asset('assets/images/client-sideimage.png')}}" alt="image" class="img-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="client_content text-center" data-aos="fade-up">
                    <h6>Who We Are</h6>
                    <h2 class="col-xl-6 col-lg-8 col-md-10 mx-auto">Committed to helping our <span
                            class="span_borderbootom">clients</span> succeed</h2>
                    <p class="col-xl-8 col-lg-10 mx-auto text-size-16">Nucimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores ruas molestias excepturi
                        sint occaecati cupiditate non provident.
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <div class="value">
                                <span class="counter number">250</span>
                                <span class="plus">+</span>
                            </div>
                            <span class="text">Business Partners</span>
                        </li>
                        <li>
                            <div class="value">
                                <span class="counter number">180</span>
                                <span class="plus">+</span>
                            </div>
                            <span class="text">Cases Done</span>
                        </li>
                        <li>
                            <div class="value">
                                <span class="counter number">370</span>
                                <span class="plus">+</span>
                            </div>
                            <span class="text">Happy Clients</span>
                        </li>
                        <li>
                            <div class="value">
                                <span class="counter number">90</span>
                                <span class="plus">+</span>
                            </div>
                            <span class="text">Awards Won</span>
                        </li>
                    </ul>
                    <div class="client_wrapper position-relative">
                        <figure class="client-image mb-0">
                            <img src="{{asset('assets/images/client-image.jpg')}}" alt="image" class="image-fluid">
                        </figure>
                        <div class="video_icon">
                            <a class="popup-vimeo" href="https://video-previews.elements.envatousercontent.com/a4464fc1-719e-45da-bf4b-f3ad0e517555/watermarked_preview/watermarked_preview.mp4">
                                <figure class="mb-0">
                                    <img class="thumb img-fluid" style="cursor: pointer" src="{{asset('assets/images/client-videoicon.png')}}" alt="image">
                                </figure>
                            </a>
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
                        <img src="{{asset('assets/images/consultation-image.jpg')}}" alt="image" class="image-fluid">
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
                        <button id="submit" type="submit" class="appointment">Book Appointment<i class="fa-solid fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Case -->
<section class="case-con">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="case_content text-center" data-aos="fade-up">
                    <h6>Our Portfolio</h6>
                    <h2>Our latest <span class="span_borderbootom">case</span> studies</h2>
                    <p class="text-size-16 mb-0">Auit zaser aut odit aut fugit sen quia conseauntur magni eos rui ratione voluptatem serui magni dolor eos rui ratione voluptatem.</p>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image1.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Car Insurance</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image2.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Business & Family</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image3.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Taxes & Civil</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image4.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Corporate Security</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image5.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Property & Real Estate</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image1.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Car Insurance</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image2.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Business & Family</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image3.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Taxes & Civil</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image4.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Corporate Security</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image5.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Property & Real Estate</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image1.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Car Insurance</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image2.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Business & Family</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image3.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Taxes & Civil</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image4.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Corporate Security</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/case-image5.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <span class="field">Property & Real Estate</span>
                                <span class="law">Law & Attorney</span>
                                <a href="./case-studies.html" class="text-decoration-none arrow_button"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial -->
<section class="testimonial-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="testimonial_wrapper position-relative">
                    <div class="image-bg"></div>
                    <figure class="testimonial-image mb-0">
                        <img src="{{asset('assets/images/testimonial-image.png')}}" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="owl-carousel owl-theme" data-aos="fade-up">
                    <div class="item">
                        <div class="testimonial_content">
                            <div class="content">
                                <figure class="testimonial-quote mb-0">
                                    <img src="{{asset('assets/images/testimonial-quote.png')}}" alt="image" class="img-fluid">
                                </figure>
                                <h2 class="mb-0">What our <span class="span_borderbootom">clients</span> are saying</h2>
                            </div>
                            <p class="text-size-18">”Quisruam est rui dolorem ipsum ruia dolor sit consecteturexer non numa eius modi tempora incidunt ut labore et doraeria aure
                                uat volupta rem inciu nar aute irure dolor in reprehenderullaein voluptate velit esse maiores alias consequatur aut perferendis
                                doloribus asperiores ecessitatibus eveniet.”
                            </p>
                            <div class="review-content">
                                <figure class="testimonial-personimage mb-0">
                                    <img src="{{asset('assets/images/testimonial-personimage.jpg')}}" alt="image" class="img-fluid">
                                </figure>
                                <div class="detail">
                                    <span class="name">Kevin Andrew</span>
                                    <span class="position">CEO, of the company</span>
                                    <figure class="testimonial-starimage mb-0">
                                        <img src="{{asset('assets/images/testimonial-starimage.png')}}" alt="image" class="img-fluid">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_content">
                            <div class="content">
                                <figure class="testimonial-quote mb-0">
                                    <img src="{{asset('assets/images/testimonial-quote.png')}}" alt="image" class="img-fluid">
                                </figure>
                                <h2 class="mb-0">What our <span class="span_borderbootom">clients</span> are saying</h2>
                            </div>
                            <p class="text-size-18">”Quisruam est rui dolorem ipsum ruia dolor sit consecteturexer non numa eius modi tempora incidunt ut labore et doraeria aure
                                uat volupta rem inciu nar aute irure dolor in reprehenderullaein voluptate velit esse maiores alias consequatur aut perferendis
                                doloribus asperiores ecessitatibus eveniet.”
                            </p>
                            <div class="review-content">
                                <figure class="testimonial-personimage mb-0">
                                    <img src="{{asset('assets/images/testimonial-personimage.jpg')}}" alt="image" class="img-fluid">
                                </figure>
                                <div class="detail">
                                    <span class="name">Kevin Andrew</span>
                                    <span class="position">CEO, of the company</span>
                                    <figure class="testimonial-starimage mb-0">
                                        <img src="{{asset('assets/images/testimonial-starimage.png')}}" alt="image" class="img-fluid">
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
<!-- Violence -->
<section class="violence-con position-relative">
    <div class="container">
        <div class="row">
            <div class="violence_wrapper position-relative">
                <div class="violence_content" data-aos="fade-up">
                    <h1 class="text-white">We are here to fight against any violence</h1>
                    <p class="text-white text-size-16">Repudiandae sint et molestiae non recusandae itaque earum rerum hic tenetur a sapiente delectus maiores alias soluta nobis
                        est eligendi optio cumque nihil imeit minus id quod maxime placeat facere possimus,.
                    </p>
                    <a href="./contact.html" class="text-decoration-none appointment">Book Appointment<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Lawyer -->
<section class="lawyer-con position-relative">
    <figure class="lawyer-sideimage mb-0">
        <img src="{{asset('assets/images/lawyer-sideimage.png')}}" alt="image" class="img-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="lawyer_content text-center" data-aos="fade-up">
                    <h6>Team Members</h6>
                    <h2>Team of our expert <span class="span_borderbootom">lawyers</span></h2>
                    <p class="col-xl-8 col-lg-10 mx-auto text-size-16 mb-0">Qucimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores ruas molestias excepturi
                        sint occaecati cupiditate non provident.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="lawyer-box">
                    <figure class="lawyer-image">
                        <img src="{{asset('assets/images/lawyer-image1.jpg')}}" alt="image" class="img-fluid">
                    </figure>
                    <div class="content">
                        <h4>Marvin Joner</h4>
                        <span class="text-size-14">Senior Lawyer</span>
                        <ul class="list-unstyled mb-0">
                            <li class="icons"><a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li class="icons"><a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li class="icons"><a href="https://www.linkedin.com/login"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="lawyer-box">
                    <figure class="lawyer-image">
                        <img src="{{asset('assets/images/lawyer-image2.jpg')}}" alt="image" class="img-fluid">
                    </figure>
                    <div class="content">
                        <h4>Patricia Woodrum</h4>
                        <span class="text-size-14">Assistant Lawyer</span>
                        <ul class="list-unstyled mb-0">
                            <li class="icons"><a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li class="icons"><a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li class="icons"><a href="https://www.linkedin.com/login"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="lawyer-box mb-0">
                    <figure class="lawyer-image">
                        <img src="{{asset('assets/images/lawyer-image3.jpg')}}" alt="image" class="img-fluid">
                    </figure>
                    <div class="content">
                        <h4>Hannaz Stone</h4>
                        <span class="text-size-14">Junior Lawyer</span>
                        <ul class="list-unstyled mb-0">
                            <li class="icons"><a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li class="icons"><a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li class="icons"><a href="https://www.linkedin.com/login"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Article -->
<section class="article-con">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="article_content text-center" data-aos="fade-up">
                    <h6>News & Articles</h6>
                    <h2>Latest <span class="span_borderbootom">blog</span> posts</h2>
                    <p class="col-xl-8 col-lg-10 mx-auto text-size-16 mb-0">Kucimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores ruas molestias excepturi
                        sint occaecati cupiditate non provident.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="article-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/article-image1.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <div class="span_wrapper">
                                    <span>March 18, 2019</span>
                                    <span class="dash">-</span>
                                    <span>0 Comments</span>
                                </div>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <h5>Maiores alias consequatur perferendis doloribus</h5>
                                </a>
                                <p class="text-size-14">Aute irure dolor in reprehenderit in voluptate velit esse cillum...</p>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="article-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/article-image2.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <div class="span_wrapper">
                                    <span>March 18, 2019</span>
                                    <span class="dash">-</span>
                                    <span>0 Comments</span>
                                </div>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <h5>Eiusmod tempor incididunt labore aet dolore</h5>
                                </a>
                                <p class="text-size-14">Rute irure dolor in reprehenderit in voluptate velit esse cillum...</p>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="article-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/article-image3.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <div class="span_wrapper">
                                    <span>March 18, 2019</span>
                                    <span class="dash">-</span>
                                    <span>0 Comments</span>
                                </div>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <h5>Dolore aeu fugiat nulla paria sint occaecat</h5>
                                </a>
                                <p class="text-size-14">Gute irure dolor in reprehenderit in voluptate velit esse cillum...</p>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="article-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/article-image1.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <div class="span_wrapper">
                                    <span>March 18, 2019</span>
                                    <span class="dash">-</span>
                                    <span>0 Comments</span>
                                </div>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <h5>Maiores alias consequatur perferendis doloribus</h5>
                                </a>
                                <p class="text-size-14">Aute irure dolor in reprehenderit in voluptate velit esse cillum...</p>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="article-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/article-image2.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <div class="span_wrapper">
                                    <span>March 18, 2019</span>
                                    <span class="dash">-</span>
                                    <span>0 Comments</span>
                                </div>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <h5>Eiusmod tempor incididunt labore aet dolore</h5>
                                </a>
                                <p class="text-size-14">Rute irure dolor in reprehenderit in voluptate velit esse cillum...</p>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="article-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/article-image3.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <div class="span_wrapper">
                                    <span>March 18, 2019</span>
                                    <span class="dash">-</span>
                                    <span>0 Comments</span>
                                </div>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <h5>Dolore aeu fugiat nulla paria sint occaecat</h5>
                                </a>
                                <p class="text-size-14">Gute irure dolor in reprehenderit in voluptate velit esse cillum...</p>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="article-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/article-image1.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <div class="span_wrapper">
                                    <span>March 18, 2019</span>
                                    <span class="dash">-</span>
                                    <span>0 Comments</span>
                                </div>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <h5>Maiores alias consequatur perferendis doloribus</h5>
                                </a>
                                <p class="text-size-14">Aute irure dolor in reprehenderit in voluptate velit esse cillum...</p>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="article-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/article-image2.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <div class="span_wrapper">
                                    <span>March 18, 2019</span>
                                    <span class="dash">-</span>
                                    <span>0 Comments</span>
                                </div>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <h5>Eiusmod tempor incididunt labore aet dolore</h5>
                                </a>
                                <p class="text-size-14">Rute irure dolor in reprehenderit in voluptate velit esse cillum...</p>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="article-box">
                            <figure class="mb-0">
                                <img src="{{asset('assets/images/article-image3.jpg')}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="box-content">
                                <div class="span_wrapper">
                                    <span>March 18, 2019</span>
                                    <span class="dash">-</span>
                                    <span>0 Comments</span>
                                </div>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <h5>Dolore aeu fugiat nulla paria sint occaecat</h5>
                                </a>
                                <p class="text-size-14">Gute irure dolor in reprehenderit in voluptate velit esse cillum...</p>
                                <a href="single-blog.html" class="text-decoration-none">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
