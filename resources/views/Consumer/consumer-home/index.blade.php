@extends('Consumer.consumer-layouts.master')

@section('content')
<div id="home" class="slider-container rev_slider_wrapper" style="height: 100vh;">
    <div id="revolutionSlider" class="slider manual rev_slider">
        <ul>
            <li data-transition="fade">
                <img src="{{asset('ThemeCons/img/demos/one-page-agency/slides/slide-1.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                <div class="tp-caption text-color-light" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['150','100','70','50']" data-start="0" data-fontsize="['18','18','18','25']" data-whitespace="nowrap" data-transform_in="y:[100%];s:500;" data-transform_out="opacity:0;s:500;" data-mask_in="x:0px;y:0px;">SELAMAT DATANG DI TOKO</div>
                <h1 class="tp-caption text-color-light font-weight-bold" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['200','150','120','100']" data-start="500" data-fontsize="80" data-transform_in="y:[-300%];opacity:0;s:500;">RIZKY BUAH</h1>
                <div class="tp-caption text-color-light" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['260','210','180','160']" data-start="1500" data-fontsize="['18','18','18','25']" data-whitespace="nowrap" data-transform_in="y:[100%];s:500;" data-transform_out="opacity:0;s:500;" data-mask_in="x:0px;y:0px;">DAPATKAN PENAWARAN MENARIK DI TOKO KAMI</div>
                <div class="tp-caption text-color-light" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['350','300','270','250']" data-start="1500" data-fontsize="['18','18','18','25']" data-whitespace="nowrap" data-transform_in="y:[100%];s:500;" data-transform_out="opacity:0;s:500;" data-mask_in="x:0px;y:0px;">
                    VERIFIKASI UMUR
                </div>
                <div class="tp-caption text-color-light" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['380','330','300','280']" data-start="1500" data-fontsize="['18','18','18','20']" data-transform_in="y:[100%];s:500;" data-transform_out="opacity:0;s:500;" data-mask_in="x:0px;y:0px;">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> Saya berusia 18+ tahun, perokok, bukan wanita hamil <br />
                            & menyetujui Syarat & Ketentuan ini.
                        </label>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<section id="who-we-are" class="section section-no-border background-color-light m-none" style="display : none">
    <div class="container">
        <div class="row center">
            <div class="col-md-12">
                <h2>Who We Are</h2>
                <p class="custom-section-sub-title">ABOUT PORTO AGENCY</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>
                    <strong class="font-weight-semibold text-color-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas alias id hic odit accusamus veniam illum.</strong><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio excepturi voluptatibus ipsum natus molestiae blanditiis pariatur est molestias ex nostrum. Nobis veritatis, deserunt sint! Ipsa labore aliquam, adipisci minus ex, temporibus aliquid, sapiente aspernatur id, facere dolorem magni placeat cum consectetur officiis ducimus.
                </p>
            </div>
            <div class="col-md-6 custom-margin-3 center">
                <svg id="curved-line-1" x="0px" y="0px" width="545px" height="305px" viewBox="0 0 545 305" enable-background="new 0 0 545 305" xml:space="preserve">
                    <circle class="circle appear-animation" data-appear-animation="circle-anim" fill="none" stroke="#231F20" stroke-miterlimit="10" stroke-dasharray="2.0106,1.0053" cx="10.206" cy="9.91" r="8.167" />
                    <circle class="circle-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" cx="10.206" cy="9.91" r="8.167" />
                    <path class="path appear-animation" data-appear-animation="line-anim" data-appear-animation-delay="800" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="2.0024,2.0024" d="M11.469,21.046
										c3.191,19.81,32.779,130.736,292.756,87.863c280.979-46.337,240.717,145.948,212.215,185.401" />
                    <path class="path-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" d="M11.469,21.046
											c3.191,19.81,32.779,130.736,292.756,87.863c280.979-46.337,240.717,145.948,212.215,185.401" />
                </svg>
                <img src="{{asset('ThemeCons/img/demos/one-page-agency/who-we-are/who-we-are-1.jpg')}}" alt class="custom-image-style-1 _left" data-appear-animation="zoomIn" data-appear-animation-delay="1300" />
                <img src="{{asset('ThemeCons/img/demos/one-page-agency/who-we-are/who-we-are-2.jpg')}}" alt class="custom-image-style-1 _middle" data-appear-animation="zoomIn" data-appear-animation-delay="1800" />
                <img src="{{asset('ThemeCons/img/demos/one-page-agency/who-we-are/who-we-are-3.jpg')}}" alt class="custom-image-style-1 _right" data-appear-animation="zoomIn" data-appear-animation-delay="2300" />
            </div>
        </div>
    </div>
</section>

<!-- <section class="section parallax section-parallax section-no-border custom-z-index m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('ThemeCons/img/demos/one-page-agency/parallax/parallax-1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="counters custom-counters">
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <i class="fa fa-users text-color-secondary"></i>
                        <strong class="text-color-light" data-to="25000" data-append="+">0</strong>
                        <label>HAPPY CLIENTS</label>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <i class="fa fa-tv text-color-secondary"></i>
                        <strong class="text-color-light" data-to="20" data-append="+">0</strong>
                        <label>SUCCESSFULL CASES</label>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <i class="fa fa-support text-color-secondary"></i>
                        <strong class="text-color-light" data-to="3500" data-append="+">0</strong>
                        <label>ANSWERED TICKETS</label>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <i class="fa fa-clock-o text-color-secondary"></i>
                        <strong class="text-color-light" data-to="3000" data-append="+">0</strong>
                        <label>DEVELOPMENT HOURS</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="what-we-do" class="section section-no-border background-color-light m-none pb-none">
    <div class="container custom-pos-rel">
        <svg id="curved-line-2" class="hidden-xs hidden-sm" x="0px" y="0px" width="132px" height="225px" viewBox="0 0 132 225" enable-background="new 0 0 132 225" xml:space="preserve">
            <circle class="circle" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="2,2" data-appear-animation="circle-anim" data-appear-animation-delay="1200" cx="120.888" cy="214.023" r="7.688" />
            <circle class="circle-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" cx="120.888" cy="214.023" r="7.688" />
            <path class="path" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="2,2" data-appear-animation="line-anim-2" d="M113.812,209.406c0,0-193-54.125-72.5-206.125" />
            <path class="path-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" d="M113.812,209.406c0,0-193-54.125-72.5-206.125" />
        </svg>
        <div class="row center">
            <div class="col-md-12">
                <h2>What We Do</h2>
                <p class="custom-section-sub-title">OUR AMAZING SERVICES</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 match-height">
                <div class="feature-box feature-box-style-2 custom-feature-box-style-1">
                    <div class="feature-box-icon">
                        <i class="fa fa-object-group text-color-secondary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-none">WEB DESIGN</h4>
                        <p class="tall">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro dolorem et ut praesentium consectetur, voluptas commodi laboriosam modi suscipit?</p>
                    </div>
                </div>
                <div class="feature-box feature-box-style-2 custom-feature-box-style-1">
                    <div class="feature-box-icon">
                        <i class="fa fa-mobile-phone text-color-secondary _size-1"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-none">MOBILE APPS</h4>
                        <p class="tall">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus tenetur eligendi maxime quasi veritatis modi blanditiis quod doloribus saepe?</p>
                    </div>
                </div>
                <div class="feature-box feature-box-style-2 custom-feature-box-style-1">
                    <div class="feature-box-icon">
                        <i class="fa fa-code text-color-secondary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-none">WEB DEVELOPMENT + ECOMMERCE</h4>
                        <p class="tall">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, nam harum eos sunt, aperiam incidunt ullam possimus earum non!</p>
                    </div>
                </div>
                <a class="btn custom-btn-style-1 custom-margin-1 text-color-dark" href="#contact-us" data-hash>CONTACT US</a>
            </div>
            <div class="col-md-6 match-height">
                <img src="{{asset('ThemeCons/img/demos/one-page-agency/what-we-do/what-we-do-2.jpg')}}" alt class="custom-image-style-2 _big" data-appear-animation="fadeIn" data-appear-animation-delay="1500" data-appear-animation-duration="100" />
                <img src="{{asset('ThemeCons/img/demos/one-page-agency/what-we-do/what-we-do-1.jpg')}}" alt class="custom-image-style-2 _small" data-appear-animation="fadeInUp" data-appear-animation-delay="1900" data-appear-animation-duration="100" data-plugin-options="{'accY': 100}" />
            </div>
        </div>
    </div>
</section>

<section class="section section-no-border background-color-tertiary m-none">
    <div class="container">
        <div class="row center">
            <div class="col-md-12">
                <h2>Testimonials</h2>
                <p class="custom-section-sub-title">HAPPY CLIENTS</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel mb-none" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': false}">
                    <div>
                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                            <div class="testimonial testimonial-with-quotes testimonial-style-2 custom-testimonial-style-1 center mb-none">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dicta culpa esse eius provident qui animi in reprehenderit eos impedit dolorem possimus, optio et odio cum accusamus sed. Nam sed voluptatum officiis vitae corporis eaque.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p>
                                        <strong class="font-weight-semibold">JOHN ALBERT DOE</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="section section-no-border background-color-light m-none pb-xlg">
    <div class="container">
        <div class="row center">
            <div class="col-md-12">
                <h2>Portfolio</h2>
                <p class="custom-section-sub-title">OUR WORKS</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-pills sort-source custom-nav-filter custom-center-pills" data-sort-id="portfolio" data-option-key="filter">
                <li data-option-value="*" class="active"><a href="#">SHOW ALL</a></li>
                <li data-option-value=".website"><a href="#">WEBSITE</a></li>
                <li data-option-value=".brands"><a href="#">BRANDS</a></li>
                <li data-option-value=".mobile-app"><a href="#">MOBILE APP</a></li>
                <li data-option-value=".others"><a href="#">OTHERS</a></li>
            </ul>
            <div class="sort-destination-loader sort-destination-loader-showing">
                <ul id="loadMoreWrapper" class="image-gallery sort-destination lightbox" data-sort-id="portfolio" data-total-pages="2" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                    <li class="isotope-item col-sm-6 col-md-3 website p-none">
                        <div class="image-gallery-item mb-none">
                            <a href="{{asset('ThemeCons/img/projects/project-6.jpg')}}" class="lightbox-portfolio">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders custom-thumb-info-style-1">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{asset('ThemeCons/img/projects/project.jpg')}}" class="img-responsive" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">PORTO DOCUMENT</span>
                                            <span class="thumb-info-type">WEBSITES</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </li>
                    <li class="isotope-item col-sm-6 col-md-3 brands p-none">
                        <div class="image-gallery-item mb-none">
                            <a href="{{asset('ThemeCons/img/projects/project-6.jpg')}}" class="lightbox-portfolio">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders custom-thumb-info-style-1">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{asset('ThemeCons/img/projects/project-2.jpg')}}" class="img-responsive" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">PORTO BRAND</span>
                                            <span class="thumb-info-type">BRANDS</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </li>
                    <li class="isotope-item col-sm-6 col-md-3 mobile-app p-none">
                        <div class="image-gallery-item mb-none">
                            <a href="{{asset('ThemeCons/img/projects/project-6.jpg')}}" class="lightbox-portfolio">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders custom-thumb-info-style-1">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{asset('ThemeCons/img/projects/project-4.jpg')}}" class="img-responsive" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">PORTO BOTTLE</span>
                                            <span class="thumb-info-type">MOBILE APP</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </li>
                    <li class="isotope-item col-sm-6 col-md-3 others p-none">
                        <div class="image-gallery-item mb-none">
                            <a href="{{asset('ThemeCons/img/projects/project-6.jpg')}}" class="lightbox-portfolio">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders custom-thumb-info-style-1">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{asset('ThemeCons/img/projects/project-5.jpg')}}" class="img-responsive" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">PORTO T-SHIRT</span>
                                            <span class="thumb-info-type">OTHERS</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </li>
                    <li class="isotope-item col-sm-6 col-md-3 website p-none">
                        <div class="image-gallery-item mb-none">
                            <a href="{{asset('ThemeCons/img/projects/project-6.jpg')}}" class="lightbox-portfolio">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders custom-thumb-info-style-1">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{asset('ThemeCons/img/projects/project-6.jpg')}}" class="img-responsive" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner text-color-light">PORTO SHOWCASE</span>
                                            <span class="thumb-info-type">WEBSITES</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </li>
                    <li class="isotope-item col-sm-6 col-md-3 website p-none">
                        <div class="image-gallery-item mb-none">
                            <a href="{{asset('ThemeCons/img/projects/project-6.jpg')}}" class="lightbox-portfolio">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders custom-thumb-info-style-1">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{asset('ThemeCons/img/projects/project-25.jpg')}}" class="img-responsive" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">PORTO SMART</span>
                                            <span class="thumb-info-type">WEBSITES</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </li>
                    <li class="isotope-item col-sm-6 col-md-3 others p-none">
                        <div class="image-gallery-item mb-none">
                            <a href="{{asset('ThemeCons/img/projects/project-6.jpg')}}" class="lightbox-portfolio">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders custom-thumb-info-style-1">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{asset('ThemeCons/img/projects/project-7.jpg')}}" class="img-responsive" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">PORTO TAG</span>
                                            <span class="thumb-info-type">OTHERS</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </li>
                    <li class="isotope-item col-sm-6 col-md-3 brands p-none">
                        <div class="image-gallery-item mb-none">
                            <a href="{{asset('ThemeCons/img/projects/project-6.jpg')}}" class="lightbox-portfolio">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders custom-thumb-info-style-1">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{asset('ThemeCons/img/projects/project-1.jpg')}}" class="img-responsive" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">PORTO WATCHES</span>
                                            <span class="thumb-info-type">BRANDS</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container">
            <div class="row center mt-xlg pt-lg mb-lg">
                <div class="col-md-12">
                    <div id="loadMoreLoader" class="load-more-loader">
                        <div class="bounce-loader">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div>
                    <button id="loadMore" type="button" class="btn custom-btn-style-1 text-color-dark">LOAD MORE</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cases" class="section section-no-border background-color-tertiary m-none">
    <div class="container">
        <div class="row center">
            <div class="col-md-12">
                <h2>Cases</h2>
                <p class="custom-section-sub-title">SUCCESFULL PROJECTS</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel show-nav-title custom-arrows-style-1" data-plugin-options="{'responsive': {'767': {'items': 1}, '1200': {'items': 3}}, 'margin': 15, 'loop': false, 'dots': false, 'nav': true}">
                    <div class="center">
                        <article class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper m-none">
                                <a href="#" class="text-decoration-none" title="Porto Website">
                                    <img src="{{asset('ThemeCons/img/demos/one-page-agency/cases/case-1.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#" class="text-decoration-none text-color-dark">
                                        PORTO WEBSITE
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">WEBSITE</p>
                            </span>
                        </article>
                        <a href="#" class="btn custom-btn-style-1 text-color-dark mt-md">VIEW MORE</a>
                    </div>
                    <div class="center">
                        <article class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper m-none">
                                <a href="#" class="text-decoration-none" title="Porto Website">
                                    <img src="{{asset('ThemeCons/img/demos/one-page-agency/cases/case-2.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#" class="text-decoration-none text-color-dark">
                                        PORTO APP
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">MOBILE APP</p>
                            </span>
                        </article>
                        <a href="#" class="btn custom-btn-style-1 text-color-dark mt-md">VIEW MORE</a>
                    </div>
                    <div class="center">
                        <article class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper m-none">
                                <a href="#" class="text-decoration-none" title="Porto Website">
                                    <img src="{{asset('ThemeCons/img/demos/one-page-agency/cases/case-3.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#" class="text-decoration-none text-color-dark">
                                        PORTO BRAND
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">BRAND</p>
                            </span>
                        </article>
                        <a href="#" class="btn custom-btn-style-1 text-color-dark mt-md">VIEW MORE</a>
                    </div>
                    <div class="center">
                        <article class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper m-none">
                                <a href="#" class="text-decoration-none" title="Porto Website">
                                    <img src="{{asset('ThemeCons/img/demos/one-page-agency/cases/case-1.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#" class="text-decoration-none text-color-dark">
                                        PORTO WEBSITE
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">WEBSITE</p>
                            </span>
                        </article>
                        <a href="#" class="btn custom-btn-style-1 text-color-dark mt-md">VIEW MORE</a>
                    </div>
                    <div class="center">
                        <article class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper m-none">
                                <a href="#" class="text-decoration-none" title="Porto Website">
                                    <img src="{{asset('ThemeCons/img/demos/one-page-agency/cases/case-2.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#" class="text-decoration-none text-color-dark">
                                        PORTO APP
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">MOBILE APP</p>
                            </span>
                        </article>
                        <a href="#" class="btn custom-btn-style-1 text-color-dark mt-md">VIEW MORE</a>
                    </div>
                    <div class="center">
                        <article class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper m-none">
                                <a href="#" class="text-decoration-none" title="Porto Website">
                                    <img src="{{asset('ThemeCons/img/demos/one-page-agency/cases/case-3.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#" class="text-decoration-none text-color-dark">
                                        PORTO BRAND
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">BRAND</p>
                            </span>
                        </article>
                        <a href="#" class="btn custom-btn-style-1 text-color-dark mt-md">VIEW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-primary section-no-border m-none">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('ThemeCons/img/demos/one-page-agency/purchase/purchase-1.png')}}" alt class="img-responsive" />
            </div>
            <div class="col-md-5">
                <h2 class="text-color-light mt-xlg pt-md">Purchase Porto</h2>
                <p class="custom-section-sub-title text-color-light">GET READY NOW</p>
                <p class="text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore iure, incidunt, in aspernatur error nostrum obcaecati velit doloremque praesentium soluta est. Atque, esse expedita, dicta, possimus voluptate alias porro pariatur beatae.</p>
                <a href="#" class="btn custom-btn-style-1 _color-2 text-color-light mt-xlg">PURCHASE NOW</a>
            </div>
        </div>
    </div>
</section>

<section id="our-team" class="section section-no-border background-color-light m-none">
    <div class="container">
        <div class="row center">
            <div class="col-md-12">
                <h2>Our Team</h2>
                <p class="custom-section-sub-title">THE DREAM TEAM</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel custom-arrows-style-1 custom-nav-pos-1 mb-none" data-plugin-options="{'items': 4, 'margin': 90, 'loop': false, 'dots': false, 'nav': true, 'stagePadding': 40}">
                    <div>
                        <span class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper _rounded m-none">
                                <a href="#team-content-1" class="popup-with-zoom-anim text-decoration-none" title="John Doe">
                                    <img src="{{asset('ThemeCons/img/team/team-15.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#team-content-1" class="popup-with-zoom-anim text-decoration-none text-color-dark" title="John Doe">
                                        JOHN DOE
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">CEO & WEB DESIGNER</p>
                            </span>
                        </span>
                        <div id="team-content-1" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-xlg">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img src="{{asset('ThemeCons/img/team/team-15.jpg')}}" class="custom-rounded-image img-responsive mb-lg mt-xlg" alt="">
                                    <ul class="social-icons custom-social-icons-style-2 center">
                                        <li class="social-icons-facebook">
                                            <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-twitter">
                                            <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-google">
                                            <a href="http://www.plus.google.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-linkedin">
                                            <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h2 class="font-weight-semibold text-color-dark">John Doe</h2>
                                    <p>CEO & Web Designer</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper _rounded m-none">
                                <a href="#team-content-2" class="popup-with-zoom-anim text-decoration-none" title="Robert Doe">
                                    <img src="{{asset('ThemeCons/img/team/team-19.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#team-content-2" class="popup-with-zoom-anim text-decoration-none text-color-dark">
                                        ROBERT DOE
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">WEB DESIGNER</p>
                            </span>
                        </span>
                        <div id="team-content-2" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-xlg">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img src="img/team/team-19.jpg" class="custom-rounded-image img-responsive mb-lg mt-xlg" alt="">
                                    <ul class="social-icons custom-social-icons-style-2 center">
                                        <li class="social-icons-facebook">
                                            <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-twitter">
                                            <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-google">
                                            <a href="http://www.plus.google.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-linkedin">
                                            <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h2 class="font-weight-semibold text-color-dark">Robert Doe</h2>
                                    <p>Web Designer</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper _rounded m-none">
                                <a href="#team-content-3" class="popup-with-zoom-anim text-decoration-none" title="Brian Doe">
                                    <img src="{{asset('ThemeCons/img/team/team-12.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#team-content-3" class="popup-with-zoom-anim text-decoration-none text-color-dark">
                                        BRIAN DOE
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">DEVELOPER</p>
                            </span>
                        </span>
                        <div id="team-content-3" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-xlg">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img src="img/team/team-12.jpg" class="custom-rounded-image img-responsive mb-lg mt-xlg" alt="">
                                    <ul class="social-icons custom-social-icons-style-2 center">
                                        <li class="social-icons-facebook">
                                            <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-twitter">
                                            <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-google">
                                            <a href="http://www.plus.google.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-linkedin">
                                            <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h2 class="font-weight-semibold text-color-dark">Brian Doe</h2>
                                    <p>Developer</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper _rounded m-none">
                                <a href="#team-content-4" class="popup-with-zoom-anim text-decoration-none" title="Greg Doe">
                                    <img src="{{asset('ThemeCons/img/team/team-11.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#team-content-4" class="popup-with-zoom-anim text-decoration-none text-color-dark">
                                        GREG DOE
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">MARKETING</p>
                            </span>
                        </span>
                        <div id="team-content-4" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-xlg">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img src="img/team/team-11.jpg" class="custom-rounded-image img-responsive mb-lg mt-xlg" alt="">
                                    <ul class="social-icons custom-social-icons-style-2 center">
                                        <li class="social-icons-facebook">
                                            <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-twitter">
                                            <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-google">
                                            <a href="http://www.plus.google.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-linkedin">
                                            <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h2 class="font-weight-semibold text-color-dark">Greg Doe</h2>
                                    <p>Marketing</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper _rounded m-none">
                                <a href="#team-content-5" class="popup-with-zoom-anim text-decoration-none" title="John Doe">
                                    <img src="{{asset('ThemeCons/img/team/team-15.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#team-content-5" class="popup-with-zoom-anim text-decoration-none text-color-dark">
                                        JOHN DOE
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">CEO & WEB DESIGNER</p>
                            </span>
                        </span>
                        <div id="team-content-5" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-xlg">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img src="img/team/team-15.jpg" class="custom-rounded-image img-responsive mb-lg mt-xlg" alt="">
                                    <ul class="social-icons custom-social-icons-style-2 center">
                                        <li class="social-icons-facebook">
                                            <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-twitter">
                                            <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-google">
                                            <a href="http://www.plus.google.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-linkedin">
                                            <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h2 class="font-weight-semibold text-color-dark">John Doe</h2>
                                    <p>CEO & Web Designer</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper _rounded m-none">
                                <a href="#team-content-6" class="popup-with-zoom-anim text-decoration-none" title="Robert Doe">
                                    <img src="{{asset('ThemeCons/img/team/team-19.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#team-content-6" class="popup-with-zoom-anim text-decoration-none text-color-dark">
                                        ROBERT DOE
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">WEB DESIGNER</p>
                            </span>
                        </span>
                        <div id="team-content-6" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-xlg">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img src="img/team/team-19.jpg" class="custom-rounded-image img-responsive mb-lg mt-xlg" alt="">
                                    <ul class="social-icons custom-social-icons-style-2 center">
                                        <li class="social-icons-facebook">
                                            <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-twitter">
                                            <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-google">
                                            <a href="http://www.plus.google.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-linkedin">
                                            <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h2 class="font-weight-semibold text-color-dark">Robert Doe</h2>
                                    <p>Web Designer</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper _rounded m-none">
                                <a href="#team-content-7" class="popup-with-zoom-anim text-decoration-none" title="Brian Doe">
                                    <img src="{{asset('ThemeCons/img/team/team-12.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#team-content-7" class="popup-with-zoom-anim text-decoration-none text-color-dark">
                                        BRIAN DOE
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">DEVELOPER</p>
                            </span>
                        </span>
                        <div id="team-content-7" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-xlg">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img src="img/team/team-12.jpg" class="custom-rounded-image img-responsive mb-lg mt-xlg" alt="">
                                    <ul class="social-icons custom-social-icons-style-2 center">
                                        <li class="social-icons-facebook">
                                            <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-twitter">
                                            <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-google">
                                            <a href="http://www.plus.google.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-linkedin">
                                            <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h2 class="font-weight-semibold text-color-dark">Brian Doe</h2>
                                    <p>Developer</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper _rounded m-none">
                                <a href="#team-content-8" class="text-decoration-none" title="Greg Doe">
                                    <img src="{{asset('ThemeCons/img/team/team-11.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light center p-md">
                                <h4>
                                    <a href="#team-content-8" class="text-decoration-none text-color-dark">
                                        GREG DOE
                                    </a>
                                </h4>
                                <p class="custom-thumb-info-category">MARKETING</p>
                            </span>
                        </span>
                        <div id="team-content-8" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-xlg">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img src="img/team/team-11.jpg" class="custom-rounded-image img-responsive mb-lg mt-xlg" alt="">
                                    <ul class="social-icons custom-social-icons-style-2 center">
                                        <li class="social-icons-facebook">
                                            <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-twitter">
                                            <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-google">
                                            <a href="http://www.plus.google.com/" target="_blank" title="Twitter">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="social-icons-linkedin">
                                            <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h2 class="font-weight-semibold text-color-dark">Greg Doe</h2>
                                    <p>Marketing</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>
                                    <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet faucibus congue. Donec at volutpat nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas risus dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="section section-no-border background-color-tertiary m-none">
    <div class="container">
        <div class="row center">
            <div class="col-md-12">
                <h2>Our Blog</h2>
                <p class="custom-section-sub-title">RECENT POSTS</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel show-nav-title custom-arrows-style-1" data-plugin-options="{'responsive': {'767': {'items': 1}, '1200': {'items': 3}}, 'margin': 15, 'loop': false, 'dots': false, 'nav': true, 'autoHeight': true}">
                    <div>
                        <article class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper m-none">
                                <a href="#" class="text-decoration-none" title="Innovation is the key">
                                    <img src="{{asset('ThemeCons/img/demos/one-page-agency/blog/blog-1.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light p-md">
                                <span class="date background-color-dark text-color-light">FEB-8-2017</span>
                                <p class="custom-thumb-info-category">WEB DESIGN</p>
                                <h4 class="mb-sm">
                                    <a href="#" class="text-decoration-none text-color-dark">
                                        INNOVATION IS THE KEY
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ut, laboriosam.</p>
                            </span>
                        </article>
                    </div>
                    <div>
                        <article class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper m-none">
                                <a href="#" class="text-decoration-none" title="Creative moments">
                                    <img src="{{asset('ThemeCons/img/demos/one-page-agency/blog/blog-2.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light p-md">
                                <span class="date background-color-dark text-color-light">FEB-1-2017</span>
                                <p class="custom-thumb-info-category">WEB DESIGN</p>
                                <h4 class="mb-sm">
                                    <a href="#" class="text-decoration-none text-color-dark">
                                        CREATIVE MOMENTS
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ut, laboriosam.</p>
                            </span>
                        </article>
                    </div>
                    <div>
                        <article class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper m-none">
                                <a href="#" class="text-decoration-none" title="Back in Business">
                                    <img src="{{asset('ThemeCons/img/demos/one-page-agency/blog/blog-3.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light p-md">
                                <span class="date background-color-dark text-color-light">JAN-19-2017</span>
                                <p class="custom-thumb-info-category">OTHER</p>
                                <h4 class="mb-sm">
                                    <a href="#" class="text-decoration-none text-color-dark">
                                        BACK IN BUSINESS
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ut, laboriosam.</p>
                            </span>
                        </article>
                    </div>
                    <div>
                        <article class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper m-none">
                                <a href="#" class="text-decoration-none" title="Innovation is the key">
                                    <img src="{{asset('ThemeCons/img/demos/one-page-agency/blog/blog-1.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light p-md">
                                <span class="date background-color-dark text-color-light">FEB-8-2017</span>
                                <p class="custom-thumb-info-category">WEB DESIGN</p>
                                <h4 class="mb-sm">
                                    <a href="#" class="text-decoration-none text-color-dark">
                                        INNOVATION IS THE KEY
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ut, laboriosam.</p>
                            </span>
                        </article>
                    </div>
                    <div>
                        <article class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper m-none">
                                <a href="#" class="text-decoration-none" title="Creative moments">
                                    <img src="{{asset('ThemeCons/img/demos/one-page-agency/blog/blog-2.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light p-md">
                                <span class="date background-color-dark text-color-light">FEB-1-2017</span>
                                <p class="custom-thumb-info-category">WEB DESIGN</p>
                                <h4 class="mb-sm">
                                    <a href="#" class="text-decoration-none text-color-dark">
                                        CREATIVE MOMENTS
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ut, laboriosam.</p>
                            </span>
                        </article>
                    </div>
                    <div>
                        <article class="thumb-info custom-thumb-info-style-2">
                            <span class="thumb-info-wrapper m-none">
                                <a href="#" class="text-decoration-none" title="Back in Business">
                                    <img src="{{asset('ThemeCons/img/demos/one-page-agency/blog/blog-3.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </span>
                            <span class="thumb-info-caption background-color-light p-md">
                                <span class="date background-color-dark text-color-light">JAN-19-2017</span>
                                <p class="custom-thumb-info-category">OTHER</p>
                                <h4 class="mb-sm">
                                    <a href="#" class="text-decoration-none text-color-dark">
                                        BACK IN BUSINESS
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ut, laboriosam.</p>
                            </span>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="row center">
            <div class="col-md-12">
                <a href="#" class="btn custom-btn-style-1 text-color-dark">VIEW OUR BLOG</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-no-border background-color-light m-none">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-6 custom-margin-4-sm">
                <img src="{{asset('ThemeCons/img/logos/logo-1.png')}}" alt class="img-responsive" />
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 custom-margin-4-sm">
                <img src="{{asset('ThemeCons/img/logos/logo-2.png')}}" alt class="img-responsive" />
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 custom-margin-4-sm">
                <img src="{{asset('ThemeCons/img/logos/logo-3.png')}}" alt class="img-responsive" />
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 custom-margin-4-sm">
                <img src="{{asset('ThemeCons/img/logos/logo-4.png')}}" alt class="img-responsive" />
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
                <img src="{{asset('ThemeCons/img/logos/logo-5.png')}}" alt class="img-responsive" />
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
                <img src="{{asset('ThemeCons/img/logos/logo-6.png')}}" alt class="img-responsive" />
            </div>
        </div>
    </div>
</section>

<section class="section section-no-border m-none p-none">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6 custom-contact-box custom-contact-pos background-color-quaternary">
                <h2 class="text-color-light">Contact Us</h2>
                <div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-lg">
                    <div class="feature-box-icon">
                        <i class="icon-call-in icons text-color-secondary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h6 class="mb-none text-sm">Call us</h6>
                        <a href="tel:+88934567898" class="text-color-light text-decoration-none">+800 123 4567</a>
                    </div>
                </div>
                <div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-xlg">
                    <div class="feature-box-icon">
                        <i class="icon-location-pin icons text-color-secondary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h6 class="mb-none text-sm">Our Location</h6>
                        <p class="tall text-color-light">123 PORTO AVE PORTO, 1235</p>
                    </div>
                </div>
                <h5 class="text-color-light">SEND A MESSAGE</h5>
                <form id="contactForm" class="custom-contact-form-style-1" action="php/contact-form.php" method="POST">
                    <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="alert alert-danger hidden mt-lg" id="contactError">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                    </div>
                    <div class="row">
                        <div class="form-group _divider">
                            <div class="col-md-6 col-sm-6">
                                <input type="text" value="" maxlength="100" class="form-control" name="name" id="name" placeholder="YOUR NAME" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" value="" maxlength="100" class="form-control" name="phone" id="phone" placeholder="PHONE" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" value="" maxlength="100" class="form-control" name="email" id="email" placeholder="EMAIL ADDRESS" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea maxlength="5000" rows="7" class="form-control" name="message" id="message" placeholder="COMMENT" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="SUBMIT" class="btn btn-primary custom-btn-style-2 text-color-light custom-margin-2 pull-right" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> -->
@endsection