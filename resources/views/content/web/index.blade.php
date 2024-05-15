@extends('layouts/web')

@section('body', 'custom-cursor')

@section('content')
  <!-- Main Sllider Three Start -->
  <section class="main-slider-three" id="home">
      <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
          data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": false, "nav": true, "animateOut": "fadeOut", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

          <div class="item main-slider-three__slide-1">
              <div class="main-slider-three__bg"
                  style="background-image: url(/images/backgrounds/main-slider-three-bg.jpg);"></div>
              <div class="main-slider-three__shape-3 img-bounce">
                  <img src="{{ asset('/images/shapes/ramas_green.svg') }}" alt="">
              </div>
              <div class="main-slider-three__img">
                  <img src="{{ asset('/images/sliders/inicio.png') }}" alt=""> <!-- imagen principal -->
              </div>
              <!--div class="main-slider-three__star-one zoominout">
                  <img src="{{ asset('/images/shapes/main-slider-three-star-1.png') }}" alt="">
              </div>
              <div class="main-slider-three__star-two img-bounce">
                  <img src="{{ asset('/images/shapes/main-slider-three-star-2.png') }}" alt="">
              </div-->
              <div class="container">
                  <div class="main-slider-three__content">
                      <div class="main-slider-three__sub-title-box">
                          <!--div class="main-slider-three__shape-1"
                              style="background-image: url(images/shapes/main-slider-three-shape-1.png);">
                          </div>
                          <p class="main-slider-three__sub-title">Terapia Online</p-->
                      </div>
                      <h2 class="main-slider-three__title">Un espacio seguro,<br>
                          es un espacio de <br> <span>cambios</span></h2>
                      <div class="main-slider-three__btn-founder-box">
                          <a href="make-appointment.html" class="main-slider-two__btn-one thm-btn">Haz un cita</a>
                          <div class="main-slider-three__founder-box">
                              <h4 class="main-slider-three__founder-name">Osiris Morales</h4>
                              <p class="main-slider-three__founder-sub-title">Psicóloga - Terápia Online</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!--div class="item main-slider-three__slide-2">
              <div class="main-slider-three__bg"
                  style="background-image: url(images/backgrounds/main-slider-three-bg.jpg);"></div>
              <div class="main-slider-three__shape-3 img-bounce">
                  <img src="{{ asset('/images/shapes/ramas.png') }}" alt="">
              </div>
              <div class="main-slider-three__img">
                  <img src="{{ asset('/images/sliders/slide_2.png') }}" alt="">
              </div>
              <div class="main-slider-three__star-one zoominout">
                  <img src="{{ asset('/images/shapes/main-slider-three-star-1.png') }}" alt="">
              </div>
              <div class="main-slider-three__star-two img-bounce">
                  <img src="{{ asset('/images/shapes/main-slider-three-star-2.png') }}" alt="">
              </div>
              <div class="container">
                  <div class="main-slider-three__content">
                      <div class="main-slider-three__sub-title-box">
                          <div class="main-slider-three__shape-1"
                              style="background-image: url(images/shapes/main-slider-three-shape-1.png);">
                          </div>
                          <p class="main-slider-three__sub-title">Online</p>
                      </div>
                      <h2 class="main-slider-three__title">Un espacio seguro,<br>
                          es un espacio de <br> <span>cambios</span></h2>
                      <div class="main-slider-three__btn-founder-box">
                          <a href="make-appointment.html" class="main-slider-two__btn-one thm-btn">Make an
                              Appointment</a>
                          <div class="main-slider-three__founder-box">
                              <h4 class="main-slider-three__founder-name">Osiris</h4>
                              <p class="main-slider-three__founder-sub-title">Osiris Morales - Psicóloga</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div-->

          <!--div class="item main-slider-three__slide-3">
              <div class="main-slider-three__bg"
                  style="background-image: url(images/backgrounds/main-slider-three-bg.jpg);"></div>
              <div class="main-slider-three__shape-3 img-bounce">
                  <img src="{{ asset('/images/shapes/ramas.png') }}" alt="">
              </div>
              <div class="main-slider-three__img">
                  <img src="{{ asset('/images/resources/main-slider-three-img-3.png') }}" alt="">
              </div>
              <div class="main-slider-three__star-one zoominout">
                  <img src="{{ asset('/images/shapes/main-slider-three-star-1.png') }}" alt="">
              </div>
              <div class="main-slider-three__star-two img-bounce">
                  <img src="{{ asset('/images/shapes/main-slider-three-star-2.png')}}" alt="">
              </div>
              <div class="container">
                  <div class="main-slider-three__content">
                      <div class="main-slider-three__sub-title-box">
                          <div class="main-slider-three__shape-1"
                              style="background-image: url(images/shapes/main-slider-three-shape-1.png);">
                          </div>
                          <p class="main-slider-three__sub-title">100% Positive Result</p>
                      </div>
                      <h2 class="main-slider-three__title">We’re Ready to <br>
                          Listen Your <span>Issues</span></h2>
                      <div class="main-slider-three__btn-founder-box">
                          <a href="make-appointment.html" class="main-slider-two__btn-one thm-btn">Make an
                              Appointment</a>
                          <div class="main-slider-three__founder-box">
                              <h4 class="main-slider-three__founder-name">Christine</h4>
                              <p class="main-slider-three__founder-sub-title">Christine Eve - Founder</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div-->

      </div>
  </section>
  <!--Main Sllider Three Start -->

  <!--Feature Two Start-->
  <section class="feature-two">
      <div class="container">
          <div class="row">
              <!--Feature Two Single Start-->
              <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                  <div class="feature-two__single">
                      <div class="feature-two__img-box">
                          <div class="feature-two__img">
                              <img src="{{ asset('/images/resources/feature-2-1.jpg') }}" alt="">
                          </div>
                          <div class="feature-two__title-box">
                              <h3><a href="services.html">Individual Therapy</a></h3>
                              <div class="feature-two__icon">
                                  <span class="icon-account"></span>
                              </div>
                          </div>
                          <div class="feature-two__hover-title-box">
                              <h3><a href="services.html">Individual Therapy</a></h3>
                              <p class="feature-two__hover-text">Lorem ipsum dolor sited is amet consectetur
                                  notted.</p>
                              <div class="feature-two__hover-icon">
                                  <span class="icon-account"></span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--Feature Two Single End-->
              <!--Feature Two Single Start-->
              <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                  <div class="feature-two__single">
                      <div class="feature-two__img-box">
                          <div class="feature-two__img">
                              <img src="{{ asset('/images/resources/feature-2-2.jpg') }}" alt="">
                          </div>
                          <div class="feature-two__title-box">
                              <h3><a href="services.html">Couple Therapy</a></h3>
                              <div class="feature-two__icon">
                                  <span class="icon-in-love"></span>
                              </div>
                          </div>
                          <div class="feature-two__hover-title-box">
                              <h3><a href="services.html">Couple Therapy</a></h3>
                              <p class="feature-two__hover-text">Lorem ipsum dolor sited is amet consectetur
                                  notted.</p>
                              <div class="feature-two__hover-icon">
                                  <span class="icon-in-love"></span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--Feature Two Single End-->
              <!--Feature Two Single Start-->
              <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                  <div class="feature-two__single">
                      <div class="feature-two__img-box">
                          <div class="feature-two__img">
                              <img src="{{ asset('/images/resources/feature-2-3.jpg') }}" alt="">
                          </div>
                          <div class="feature-two__title-box">
                              <h3><a href="services.html">Group Therapy</a></h3>
                              <div class="feature-two__icon">
                                  <span class="icon-multiple-user"></span>
                              </div>
                          </div>
                          <div class="feature-two__hover-title-box">
                              <h3><a href="services.html">Group Therapy</a></h3>
                              <p class="feature-two__hover-text">Lorem ipsum dolor sited is amet consectetur
                                  notted.</p>
                              <div class="feature-two__hover-icon">
                                  <span class="icon-multiple-user"></span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--Feature Two Single End-->
          </div>
      </div>
  </section>
  <!--Feature Two End-->

  <!--About Three Start-->
  <section class="about-three" id="about">
      <div class="container">
          <div class="row">
              <div class="col-xl-7">
                  <div class="about-three__left">
                      <div class="section-title text-left">
                          <span class="section-title__tagline">welcome to delogis</span>
                          <h2 class="section-title__title">Providing the Best <span>Quality</span>
                              Psycological Therapies</h2>
                      </div>
                      <p class="about-three__text">At the Good Samaritan Society, you aren’t just a custoer. We
                          believe you’re someone who deserves to simply free text available in be treated with
                          respect, dignity and compassion.</p>
                      <div class="about-three__points-box">
                          <ul class="about-three__points-list list-unstyled">
                              <li>
                                  <div class="icon">
                                      <span class="fa fa-check"></span>
                                  </div>
                                  <div class="text">
                                      <p>Bipolar Disorders</p>
                                  </div>
                              </li>
                              <li>
                                  <div class="icon">
                                      <span class="fa fa-check"></span>
                                  </div>
                                  <div class="text">
                                      <p>Stress Management</p>
                                  </div>
                              </li>
                              <li>
                                  <div class="icon">
                                      <span class="fa fa-check"></span>
                                  </div>
                                  <div class="text">
                                      <p>Depression Therapy</p>
                                  </div>
                              </li>
                              <li>
                                  <div class="icon">
                                      <span class="fa fa-check"></span>
                                  </div>
                                  <div class="text">
                                      <p>Family Therapy</p>
                                  </div>
                              </li>
                          </ul>
                          <ul class="about-three__points-list list-unstyled">
                              <li>
                                  <div class="icon">
                                      <span class="fa fa-check"></span>
                                  </div>
                                  <div class="text">
                                      <p>Anxiety Therapy</p>
                                  </div>
                              </li>
                              <li>
                                  <div class="icon">
                                      <span class="fa fa-check"></span>
                                  </div>
                                  <div class="text">
                                      <p>Executive Coaching</p>
                                  </div>
                              </li>
                              <li>
                                  <div class="icon">
                                      <span class="fa fa-check"></span>
                                  </div>
                                  <div class="text">
                                      <p>Relationship Therapy</p>
                                  </div>
                              </li>
                              <li>
                                  <div class="icon">
                                      <span class="fa fa-check"></span>
                                  </div>
                                  <div class="text">
                                      <p>Brief Therapy</p>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <div class="about-three__btn-box">
                          <a href="make-appointment.html" class="about-three__btn thm-btn">Make an Appointment</a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-5">
                  <div class="about-three__right">
                      <div class="about-three__img-box">
                          <div class="about-three__img">
                              <img src="{{ asset('/images/resources/about-three-img-1.jpg') }}" alt="">
                          </div>
                          <div class="about-three__img-2">
                              <img src="{{ asset('/images/resources/about-three-img-2.jpg') }}" alt="">
                              <div class="about-three__shape-1"></div>
                              <div class="about-three__video-link">
                                  <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                      <div class="about-three__video-icon">
                                          <span class="fa fa-play"></span>
                                          <i class="ripple"></i>
                                      </div>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--About Three End-->

        <!--Services Three Start-->
        <section class="services-three" id="services">
            <div class="services-three__bg-box">
                <div class="services-three__bg"
                    style="background-image: url(images/backgrounds/services-three-bg.png);"></div>
            </div>
            <div class="container">
                <div class="services-three__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="services-three__left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">Services we’re offering</span>
                                    <h2 class="section-title__title">Magical Therapy for <span>the</span>
                                        People Need Help</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="services-three__right">
                                <p class="services-three__text">Lorem ipsum dolor sit amet, con adipiscing elit tiam
                                    convallis elit id impedie. Quisq commodo simply free ornare tortor. If you are going
                                    to use a passage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-three__bottom">
                    <div class="row">
                        <!--Services Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-three__single">
                                <div class="services-three__img-box">
                                    <div class="services-three__img">
                                        <img src="{{ asset('/images/services/services-3-1.jpg') }}" alt="">
                                    </div>
                                    <div class="services-three__icon">
                                        <span class="icon-heart-1"></span>
                                    </div>
                                </div>
                                <div class="services-three__content">
                                    <div class="services-three__content-inner">
                                        <div class="services-three__content-top">
                                            <h3 class="services-three__title"><a href="dating-relationship.html">Dating
                                                    &
                                                    <br> Relationship</a></h3>
                                            <p class="services-three__text">Scelerisque eleifend donec pretium
                                                vulputate
                                                sapien
                                            </p>
                                        </div>
                                        <div class="services-three__btn-box">
                                            <a href="dating-relationship.html" class="services-three__btn"><span
                                                    class="icon-right-arrow"></span>More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single Start-->
                        <!--Services Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-three__single">
                                <div class="services-three__img-box">
                                    <div class="services-three__img">
                                        <img src="{{ asset('/images/services/services-3-2.jpg') }}" alt="">
                                    </div>
                                    <div class="services-three__icon">
                                        <span class="icon-motivated"></span>
                                    </div>
                                </div>
                                <div class="services-three__content">
                                    <div class="services-three__content-inner">
                                        <div class="services-three__content-top">
                                            <h3 class="services-three__title"><a href="self-esteem-issues.html">Self
                                                    Esteem
                                                    <br> Issues</a></h3>
                                            <p class="services-three__text">Scelerisque eleifend donec pretium
                                                vulputate
                                                sapien
                                            </p>
                                        </div>
                                        <div class="services-three__btn-box">
                                            <a href="self-esteem-issues.html" class="services-three__btn"><span
                                                    class="icon-right-arrow"></span>More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single Start-->
                        <!--Services Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-three__single">
                                <div class="services-three__img-box">
                                    <div class="services-three__img">
                                        <img src="{{ asset('/images/services/services-3-3.jpg') }}" alt="">
                                    </div>
                                    <div class="services-three__icon">
                                        <span class="icon-family-2"></span>
                                    </div>
                                </div>
                                <div class="services-three__content">
                                    <div class="services-three__content-inner">
                                        <div class="services-three__content-top">
                                            <h3 class="services-three__title"><a href="family-psycology.html">Kids &
                                                    Family
                                                    <br> Psycology</a></h3>
                                            <p class="services-three__text">Scelerisque eleifend donec pretium
                                                vulputate
                                                sapien
                                            </p>
                                        </div>
                                        <div class="services-three__btn-box">
                                            <a href="family-psycology.html" class="services-three__btn"><span
                                                    class="icon-right-arrow"></span>More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single Start-->
                        <!--Services Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="services-three__single">
                                <div class="services-three__img-box">
                                    <div class="services-three__img">
                                        <img src="{{ asset('/images/services/services-3-4.jpg') }}" alt="">
                                    </div>
                                    <div class="services-three__icon">
                                        <span class="icon-suitcase"></span>
                                    </div>
                                </div>
                                <div class="services-three__content">
                                    <div class="services-three__content-inner">
                                        <div class="services-three__content-top">
                                            <h3 class="services-three__title"><a href="career-counseling.html">Life &
                                                    Career
                                                    <br> Counseling</a></h3>
                                            <p class="services-three__text">Scelerisque eleifend donec pretium
                                                vulputate
                                                sapien
                                            </p>
                                        </div>
                                        <div class="services-three__btn-box">
                                            <a href="career-counseling.html" class="services-three__btn"><span
                                                    class="icon-right-arrow"></span>More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single Start-->
                    </div>
                </div>
            </div>
        </section>
        <!--Services Three End-->

        <!--Feature Three Start-->
        <section class="feature-three">
            <div class="container">
                <div class="row">
                    <!--Feature Three Single Start-->
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-three__single">
                            <div class="feature-three__img-box">
                                <div class="feature-three__img">
                                    <img src="{{ asset('/images/resources/feature-3-1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="feature-three__content">
                                <p class="feature-three__sub-title">COUPLE ISSUES</p>
                                <h3 class="feature-three__title"><a href="services.html">Every Journey Starts with the
                                        First</a>
                                </h3>
                                <div class="feature-three__btn">
                                    <a href="services.html"><span class="icon-right-arrow"></span>More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Three Single End-->
                    <!--Feature Three Single Start-->
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-three__single">
                            <div class="feature-three__img-box">
                                <div class="feature-three__img">
                                    <img src="{{ asset('/images/resources/feature-3-2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="feature-three__content">
                                <p class="feature-three__sub-title">COUPLE ISSUES</p>
                                <h3 class="feature-three__title"><a href="services.html">Scelerisque eleifend donec
                                        pretium</a></h3>
                                <div class="feature-three__btn">
                                    <a href="services.html"><span class="icon-right-arrow"></span>More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Three Single End-->
                </div>
            </div>
        </section>
        <!--Feature Three End-->

        <!--Counter Two Start-->
        <section class="counter-two">
            <div class="counter-two_-shape-1">
                <img src="{{ asset('/images/shapes/counter-two-shape-1.png') }}" alt="">
            </div>
            <div class="container">
                <ul class="counter-two__point-list list-unstyled">
                    <li class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-consulting"></span>
                        </div>
                        <div class="counter-two__count">
                            <h3 class="odometer" data-count="82">00</h3>
                            <span class="">k</span>
                        </div>
                        <p class="counter-two__text">Expert Consultant</p>
                    </li>
                    <li class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-trophy"></span>
                        </div>
                        <div class="counter-two__count">
                            <h3 class="odometer" data-count="170">00</h3>
                        </div>
                        <p class="counter-two__text">Honorable Awards</p>
                    </li>
                    <li class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-recommend"></span>
                        </div>
                        <div class="counter-two__count">
                            <h3 class="odometer" data-count="80">00</h3>
                            <span class="">k</span>
                        </div>
                        <p class="counter-two__text">Satisfied Customers</p>
                    </li>
                    <li class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-psychology-3"></span>
                        </div>
                        <div class="counter-two__count">
                            <h3 class="odometer" data-count="680">00</h3>
                        </div>
                        <p class="counter-two__text">Solve Issues</p>
                    </li>
                </ul>
            </div>
        </section>
        <!--Counter Two End-->

        <!--Pricing One Start-->
        <section class="pricing-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">our pricing plans</span>
                    <h2 class="section-title__title">Select a Plan According <span>to</span>
                        <br> Your Requirements</h2>
                </div>
                <div class="pricing-one__main-tab-box tabs-box">
                    <ul class="tab-buttons list-unstyled">
                        <li data-tab="#monthly" class="tab-btn tab-btn-one"><span>Monthly</span></li>
                        <li data-tab="#yearly" class="tab-btn active-btn tab-btn-two"><span>Yearly</span></li>
                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab" id="monthly">
                            <div class="pricing-one__inner">
                                <div class="row">
                                    <!--Pricing One Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-one__single">
                                            <div class="pricing-one__shape-2"></div>
                                            <div class="pricing-one__icon">
                                                <img src="{{ asset('/images/icon/pricing-icon-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-one__price-box">
                                                <h3 class="pricing-one__price">$69</h3>
                                                <p class="pricing-one__price-sub-title">Individual</p>
                                            </div>
                                            <div class="pricing-one__content">
                                                <ul class="list-unstyled pricing-one__service-list">
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">10 Days Time</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Interview Training</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Guarantee Approval</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Documents Submission</p>
                                                    </li>
                                                </ul>
                                                <div class="pricing-one__btn-box">
                                                    <a href="pricing-plans.html"
                                                        class="thm-btn pricing-one__btn">Purchase Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing One Single End-->
                                    <!--Pricing One Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-one__single">
                                            <div class="pricing-one__shape-2"></div>
                                            <div class="pricing-one__icon">
                                                <img src="{{ asset('/images/icon/pricing-icon-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-one__price-box">
                                                <h3 class="pricing-one__price">$79</h3>
                                                <p class="pricing-one__price-sub-title">couples</p>
                                            </div>
                                            <div class="pricing-one__content">
                                                <ul class="list-unstyled pricing-one__service-list">
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">10 Days Time</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Interview Training</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Guarantee Approval</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Documents Submission</p>
                                                    </li>
                                                </ul>
                                                <div class="pricing-one__btn-box">
                                                    <a href="pricing-plans.html"
                                                        class="thm-btn pricing-one__btn">Purchase Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing One Single End-->
                                    <!--Pricing One Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-one__single">
                                            <div class="pricing-one__shape-2"></div>
                                            <div class="pricing-one__icon">
                                                <img src="{{ asset('/images/icon/pricing-icon-3.png') }}" alt="">
                                            </div>
                                            <div class="pricing-one__price-box">
                                                <h3 class="pricing-one__price">$89</h3>
                                                <p class="pricing-one__price-sub-title">groups</p>
                                            </div>
                                            <div class="pricing-one__content">
                                                <ul class="list-unstyled pricing-one__service-list">
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">10 Days Time</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Interview Training</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Guarantee Approval</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Documents Submission</p>
                                                    </li>
                                                </ul>
                                                <div class="pricing-one__btn-box">
                                                    <a href="pricing-plans.html"
                                                        class="thm-btn pricing-one__btn">Purchase Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing One Single End-->
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab active-tab" id="yearly">
                            <div class="pricing-one__inner">
                                <div class="row">
                                    <!--Pricing One Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-one__single">
                                            <div class="pricing-one__shape-2"></div>
                                            <div class="pricing-one__icon">
                                                <img src="{{ asset('/images/icon/pricing-icon-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-one__price-box">
                                                <h3 class="pricing-one__price">$69</h3>
                                                <p class="pricing-one__price-sub-title">Individual</p>
                                            </div>
                                            <div class="pricing-one__content">
                                                <ul class="list-unstyled pricing-one__service-list">
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">10 Days Time</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Interview Training</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Guarantee Approval</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Documents Submission</p>
                                                    </li>
                                                </ul>
                                                <div class="pricing-one__btn-box">
                                                    <a href="pricing-plans.html"
                                                        class="thm-btn pricing-one__btn">Purchase Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing One Single End-->
                                    <!--Pricing One Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-one__single">
                                            <div class="pricing-one__shape-2"></div>
                                            <div class="pricing-one__icon">
                                                <img src="{{ asset('/images/icon/pricing-icon-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-one__price-box">
                                                <h3 class="pricing-one__price">$79</h3>
                                                <p class="pricing-one__price-sub-title">couples</p>
                                            </div>
                                            <div class="pricing-one__content">
                                                <ul class="list-unstyled pricing-one__service-list">
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">10 Days Time</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Interview Training</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Guarantee Approval</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Documents Submission</p>
                                                    </li>
                                                </ul>
                                                <div class="pricing-one__btn-box">
                                                    <a href="pricing-plans.html"
                                                        class="thm-btn pricing-one__btn">Purchase Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing One Single End-->
                                    <!--Pricing One Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-one__single">
                                            <div class="pricing-one__shape-2"></div>
                                            <div class="pricing-one__icon">
                                                <img src="{{ asset('/images/icon/pricing-icon-3.png') }}" alt="">
                                            </div>
                                            <div class="pricing-one__price-box">
                                                <h3 class="pricing-one__price">$89</h3>
                                                <p class="pricing-one__price-sub-title">groups</p>
                                            </div>
                                            <div class="pricing-one__content">
                                                <ul class="list-unstyled pricing-one__service-list">
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">10 Days Time</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Interview Training</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Guarantee Approval</p>
                                                    </li>
                                                    <li>
                                                        <div class="pricing-one__shape-1"></div>
                                                        <p class="pricing-one__text">Documents Submission</p>
                                                    </li>
                                                </ul>
                                                <div class="pricing-one__btn-box">
                                                    <a href="pricing-plans.html"
                                                        class="thm-btn pricing-one__btn">Purchase Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing One Single End-->
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                    </div>
                </div>
            </div>
        </section>
        <!--Pricing One End-->

        <!--Testimonial Three Start-->
        <section class="testimonial-three">
            <div class="testimonial-three__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(images/backgrounds/testimonial-three-bg.jpg);"></div>
            <div class="container">
                <div class="testimonial-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": true,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 1
                        },
                        "992": {
                            "items": 1
                        },
                        "1200": {
                            "items": 1
                        }
                    }
                }'>
                    <!--Testimonial one Single Start-->
                    <div class="item">
                        <div class="testimonial-three__single">
                            <div class="testimonial-three__img">
                                <img src="{{ asset('/images/testimonial/testimonial-3-1.jpg') }}" alt="">
                                <div class="testimonial-three__quote">
                                    <img src="{{ asset('/images/icon/icon-quote.png') }}" alt="">
                                </div>
                            </div>
                            <div class="testimonial-three__content">
                                <p class="testimonial-three__text">This is due to their excellent service, competitive
                                    pricing and customer support. It’s throughly refresing to get such a personal touch
                                    at this stage to magical & Inspirational lessons for people seeking help. enable us
                                    to quote as necessary.</p>
                                <div class="testimonial-three__client-name">
                                    <h4>Christine Eve .<span>Customer</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial one Single End-->
                    <!--Testimonial one Single Start-->
                    <div class="item">
                        <div class="testimonial-three__single">
                            <div class="testimonial-three__img">
                                <img src="{{ asset('/images/testimonial/testimonial-3-2.jpg') }}" alt="">
                                <div class="testimonial-three__quote">
                                    <img src="{{ asset('/images/icon/icon-quote.png') }}" alt="">
                                </div>
                            </div>
                            <div class="testimonial-three__content">
                                <p class="testimonial-three__text">This is due to their excellent service, competitive
                                    pricing and customer support. It’s throughly refresing to get such a personal touch
                                    at this stage to magical & Inspirational lessons for people seeking help. enable us
                                    to quote as necessary.</p>
                                <div class="testimonial-three__client-name">
                                    <h4>Alisha Martin .<span>Customer</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial one Single End-->
                    <!--Testimonial one Single Start-->
                    <div class="item">
                        <div class="testimonial-three__single">
                            <div class="testimonial-three__img">
                                <img src="{{ asset('/images/testimonial/testimonial-3-3.jpg') }}" alt="">
                                <div class="testimonial-three__quote">
                                    <img src="{{ asset('/images/icon/icon-quote.png') }}" alt="">
                                </div>
                            </div>
                            <div class="testimonial-three__content">
                                <p class="testimonial-three__text">This is due to their excellent service, competitive
                                    pricing and customer support. It’s throughly refresing to get such a personal touch
                                    at this stage to magical & Inspirational lessons for people seeking help. enable us
                                    to quote as necessary.</p>
                                <div class="testimonial-three__client-name">
                                    <h4>David kapor .<span>Customer</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial one Single End-->
                </div>
            </div>
        </section>
        <!--Testimonial Three End-->

        <!--Cases Three Start-->
        <section class="cases-three" id="cases">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our recent work</span>
                    <h2 class="section-title__title">Explore Our <span>Succesfully</span>
                        <br> Completed Cases</h2>
                </div>
                <div class="row">
                    <!--Cases Three Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="cases-three__single">
                            <div class="cases-three__img-box">
                                <div class="cases-three__img">
                                    <img src="{{ asset('/images/project/cases-3-1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="cases-three__content">
                                <h3 class="cases-three__title"><a href="case-details.html">Depression and
                                        <br> Anxiety</a></h3>
                                <ul class="cases-three__points list-unstyled">
                                    <li>
                                        <p><span>Signs:</span> Low Confidence</p>
                                    </li>
                                    <li>
                                        <p><span>Customer:</span> Mike Hardson</p>
                                    </li>
                                    <li>
                                        <p><span>Result:</span> 100% Stable</p>
                                    </li>
                                </ul>
                                <p class="cases-three__text">Lorem ipsum dolor sit amet, con tiam convallis elit id
                                    impedie.</p>
                                <div class="cases-three__btn-box">
                                    <a href="case-details.html" class="cases-three__btn thm-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cases Three Single End-->
                    <!--Cases Three Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="cases-three__single">
                            <div class="cases-three__img-box">
                                <div class="cases-three__img">
                                    <img src="{{ asset('/images/project/cases-3-2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="cases-three__content">
                                <h3 class="cases-three__title"><a href="case-details.html">Low Self Esteem
                                        <br> Issues</a></h3>
                                <ul class="cases-three__points list-unstyled">
                                    <li>
                                        <p><span>Signs:</span> Low Confidence</p>
                                    </li>
                                    <li>
                                        <p><span>Customer:</span> Mike Hardson</p>
                                    </li>
                                    <li>
                                        <p><span>Result:</span> 100% Stable</p>
                                    </li>
                                </ul>
                                <p class="cases-three__text">Lorem ipsum dolor sit amet, con tiam convallis elit id
                                    impedie.</p>
                                <div class="cases-three__btn-box">
                                    <a href="case-details.html" class="cases-three__btn thm-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cases Three Single End-->
                    <!--Cases Three Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="cases-three__single">
                            <div class="cases-three__img-box">
                                <div class="cases-three__img">
                                    <img src="{{ asset('/images/project/cases-3-3.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="cases-three__content">
                                <h3 class="cases-three__title"><a href="case-details.html">Personal Family
                                        <br> Problem</a></h3>
                                <ul class="cases-three__points list-unstyled">
                                    <li>
                                        <p><span>Signs:</span> Low Confidence</p>
                                    </li>
                                    <li>
                                        <p><span>Customer:</span> Mike Hardson</p>
                                    </li>
                                    <li>
                                        <p><span>Result:</span> 100% Stable</p>
                                    </li>
                                </ul>
                                <p class="cases-three__text">Lorem ipsum dolor sit amet, con tiam convallis elit id
                                    impedie.</p>
                                <div class="cases-three__btn-box">
                                    <a href="case-details.html" class="cases-three__btn thm-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cases Three Single End-->
                </div>
            </div>
        </section>
        <!--Cases Three End-->

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="container">
                <div class="brand-one__inner">
                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100,
                    "slidesPerView": 5,
                    "loop": true,
                    "navigation": {
                        "nextEl": "#brand-one__swiper-button-next",
                        "prevEl": "#brand-one__swiper-button-prev"
                    },
                    "autoplay": { "delay": 5000 },
                    "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 4
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 5
                        },
                        "1199": {
                            "spaceBetween": 100,
                            "slidesPerView": 5
                        }
                    }}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('/images/brand/brand-1-1.png') }}" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('/images/brand/brand-1-2.png') }}" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('/images/brand/brand-1-3.png') }}" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('/images/brand/brand-1-4.png') }}" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('/images/brand/brand-1-5.png') }}" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('/images/brand/brand-1-1.png') }}" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('/images/brand/brand-1-2.png') }}" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('/images/brand/brand-1-3.png') }}" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('/images/brand/brand-1-4.png') }}" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="{{ asset('/images/brand/brand-1-5.png') }}" alt="">
                            </div><!-- /.swiper-slide -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--Why Choose Three Start-->
        <section class="why-choose-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-three__left">
                            <div class="why-choose-three__img">
                                <img src="images/resources/why-choose-three-img-1.jpg" alt="">
                                <div class="why-choose-three__experience">
                                    <div class="why-choose-three__experience-icon">
                                        <img src="{{ asset('/images/icon/experience-icon-1.png') }}" alt="">
                                    </div>
                                    <div class="why-choose-three__count">
                                        <h3 class="odometer" data-count="26">00</h3>
                                        <span class="">+</span>
                                    </div>
                                    <p class="why-choose-three__count-text">Years
                                        <br> Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-three__right">
                            <div class="why-choose-three__shape-1 img-bounce"
                                style="background-image: url(images/shapes/why-choose-three-shape-1.png);"></div>
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Why Choose</span>
                                <h2 class="section-title__title">Leading Mental <span>Health</span>
                                    <br> Counseling Center</h2>
                            </div>
                            <p class="why-choose-three__text">Lorem ipsum dolorsit amet, adipiscing elit, sed eiusmod
                                tempor incididunt labore dolore magna aliqua. Quis ipsum suspend isse ultrices gravida.
                                Risus commodo viverra maecenas accumsan lacusvel facilisis.</p>
                            <div class="why-choose-three__progress-box">
                                <div class="why-choose-three__progress-box-img">
                                    <img src="{{ asset('/images/resources/why-choose-three-img-2.jpg') }}" alt="">
                                    <div class="why-choose-three__result-box">
                                        <div class="why-choose-three__result">
                                            <div class="why-choose-three__result-count">
                                                <h3 class="odometer" data-count="99">00</h3>
                                                <span class="">%</span>
                                            </div>
                                            <p class="why-choose-three__result-text">Treatment
                                                <br> Results</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="why-choose-three__progress-list list-unstyled">
                                    <li class="why-choose-three__progress">
                                        <h4 class="why-choose-three__progress-title">Counseling</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="77%">
                                                <div class="count-text">77%</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="why-choose-three__progress">
                                        <h4 class="why-choose-three__progress-title">Psychology</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="68%">
                                                <div class="count-text">68%</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose Three End-->

        <!--Blog Two Start-->
        <section class="blog-two" id="blog">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">From the Blog</span>
                    <h2 class="section-title__title">Latest News <span>&</span>
                        <br> Articles From the Blog</h2>
                </div>
                <div class="row">
                    <!--Blog Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                    <img src="{{ asset('/images/blog/blog-2-1.jpg') }}" alt="">
                                    <div class="blog-two__date">
                                        <p>20
                                            <br> Mar</p>
                                    </div>
                                    <h3 class="blog-two__title"><a href="blog-details.html">Patient-Led Advocacy
                                            Group Shares Patient
                                            Perspective</a></h3>
                                </div>
                            </div>
                            <div class="blog-two__comment-and-btn">
                                <div class="blog-two__comment">
                                    <a href="blog-details.html"><span class="fas fa-comments"></span>2 Comments</a>
                                </div>
                                <div class="blog-one__btn">
                                    <a href="blog-details.html"><span class="icon-right-arrow"></span>More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Two Single End-->
                    <!--Blog Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                    <img src="{{ asset('/images/blog/blog-2-2.jpg') }}" alt="">
                                    <div class="blog-two__date">
                                        <p>20
                                            <br> Mar</p>
                                    </div>
                                    <h3 class="blog-two__title"><a href="blog-details.html">Quis ipsum suspend isse
                                            ultrices gravida. Risus commodo</a></h3>
                                </div>
                            </div>
                            <div class="blog-two__comment-and-btn">
                                <div class="blog-two__comment">
                                    <a href="blog-details.html"><span class="fas fa-comments"></span>2 Comments</a>
                                </div>
                                <div class="blog-one__btn">
                                    <a href="blog-details.html"><span class="icon-right-arrow"></span>More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Two Single End-->
                    <!--Blog Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                    <img src="{{ asset('/images/blog/blog-2-3.jpg') }}" alt="">
                                    <div class="blog-two__date">
                                        <p>20
                                            <br> Mar</p>
                                    </div>
                                    <h3 class="blog-two__title"><a href="blog-details.html">Risus commodo viverra
                                            maecenas accumsan lacusvel facilisis. </a></h3>
                                </div>
                            </div>
                            <div class="blog-two__comment-and-btn">
                                <div class="blog-two__comment">
                                    <a href="blog-details.html"><span class="fas fa-comments"></span>2 Comments</a>
                                </div>
                                <div class="blog-one__btn">
                                    <a href="blog-details.html"><span class="icon-right-arrow"></span>More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Two Single End-->
                </div>
            </div>
        </section>
        <!--Blog Two End-->

        <!--CTA One Start-->
        <section class="cta-one">
            <div class="cta-one__shape-1 float-bob-x">
                <img src="{{ asset('/images/shapes/cta-one-shape-1.png') }}" alt="">
            </div>
            <div class="container">
                <div class="cta-one__inner">
                    <p class="cta-one__text">Let’s open your heart story to us, We’ll listen to you</p>
                    <div class="cta-one__btn-box">
                        <a href="make-appointment.html" class="cta-one__btn thm-btn">Make an Appointment</a>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->
@endsection
