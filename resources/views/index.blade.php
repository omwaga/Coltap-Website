@extends('layouts.master')
@section('content')
        <!-- .header -->
        <div class="bg-img bg-img-fill bg-img-promo bg-overlay" style="background-image: url(images/backgrounds/background-1.jpg);"></div>
        <!-- Promo -->
        <section class="section section-on-bg section-promo section-fill bg-inverse">
          <div class="container text-center">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 js-animate" data-vc-animation="transition.slideUpIn" data-vc-duration="700">
                <h2 class="title">Promote your product or service.
                  <span class="hidden-sm hidden-xs">Professional way.</span>
                </h2>
                <p class="intro">Marvel is a professional Bootstrap template designed to help you
                  <br /> effectively promote your product or service.</p>
                <p>
                  <a class="btn btn-lg btn-cta btn-cta-primary" href="#">Try Product Free</a>
                </p>
                <button type="button" class="play-trigger btn btn-link " data-toggle="modal" data-target="#modal-video">
                  <i class="fa fa-youtube-play"></i> Watch the video</button>
              </div>
            </div>
          </div>
          <!-- .container -->
        </section>
        <!-- End Promo -->
        <div class="sections-wrapper">
          <!-- About -->
          <section id="section-about" class="section section-about">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <h2 class="title text-center">How does it work?</h2>
                  <p class="intro text-center">Explain your product's core idea here. Then, explain your product features or benefits in a few steps.</p>
                </div>
              </div>
              <div class="row item">
                <div class="content col-md-4">
                  <h3 class="title">Designed with business needs in mind</h3>
                  <div class="desc">
                    <p>Accessibility diversity crisis situation growth achieve youth. Global network advancement partner investment collaborative.</p>
                  </div>
                  <div class="quote">
                    <div class="quote-profile">
                      <img class="img-responsive img-thumbnail img-placeholder" src="images/avatars/avatar1.jpg" width="64" height="64" alt="" /> </div>
                    <!-- .profile -->
                    <div class="quote-content">
                      <blockquote>
                        <p>Social entrepreneurship gender rights public-private partnerships protect Angelina Jolie amplify equality.</p>
                      </blockquote>
                      <p class="source">
                        <a href="#">@AlexD</a>, London</p>
                    </div>
                    <!-- .quote-content -->
                  </div>
                  <!-- .quote -->
                </div>
                <!-- .content -->
                <figure class="figure col-md-6 col-md-offset-2 js-animate" data-vc-animation="transition.slideUpIn" data-vc-duration="700">
                  <img class="img-responsive img-placeholder" src="images/figures/figure-1.png" width="555" height="370" alt="" />
                  <div class="control text-center">
                    <button type="button" class="play-trigger material-icons md-36" style="font-size: 36px; vertical-align: middle;" data-toggle="modal" data-target="#modal-video">play_arrow</button>
                  </div>
                  <!-- .control -->
                  <figcaption class="figure-caption">(Screenshot: Responsive Website Template)</figcaption>
                </figure>
              </div>
            </div>
            <!-- .container -->
          </section>
          <!-- End About -->  
<section class="iq-features">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-3 col-md-12">
                    <!-- .item -->
              <div class="feature-lead text-center">
                <h4 class="title">Want to explore more?</h4>
                <p>
                  <a class="btn btn-cta btn-cta-secondary" href="features.html">Take a Tour</a>
                </p>
              </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <div class="holderCircle">
                        <div class="round"></div>
                        <div class="dotCircle">
                           <span class="itemDot active itemDot1" data-tab="1">
                           <i class="fa fa-clock-o"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot2" data-tab="2">
                           <i class="fa fa-comments"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot3" data-tab="3">
                           <i class="fa fa-user"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot4" data-tab="4">
                           <i class="fa fa-tags"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot5" data-tab="5">
                           <i class="fa fa-upload"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot6" data-tab="6">
                           <i class="fa fa-briefcase"></i>
                           <span class="forActive"></span>
                           </span>
                        </div>
                        <div class="contentCircle">
                           <div class="CirItem title-box active CirItem1">
                              <h2 class="title"><span>Consulting</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-clock-o"></i>
                           </div>
                           <div class="CirItem title-box CirItem2">
                              <h2 class="title"><span>Creative Idea </span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-comments"></i>
                           </div>
                           <div class="CirItem title-box CirItem3">
                              <h2 class="title"><span>Development</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-user"></i>
                           </div>
                           <div class="CirItem title-box CirItem4">
                              <h2 class="title"><span>Consulting</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-tags"></i>
                           </div>
                           <div class="CirItem title-box CirItem5">
                              <h2 class="title"><span>Sharing</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-upload"></i>
                           </div>
                           <div class="CirItem title-box CirItem6">
                              <h2 class="title"><span>Support</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-briefcase"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                    <!-- .item -->
              <div class="feature-lead text-center">
                <h4 class="title">Want to explore more?</h4>
                <p>
                  <a class="btn btn-cta btn-cta-secondary" href="features.html">Take a Tour</a>
                </p>
              </div>
                  </div>
               </div>
            </div>
        </section>
          <!-- Testimonials -->
          <section class="section section-testimonials bg-gray">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <h2 class="title m-b-lg text-center">What people say about Marvel?</h2>
                  <!-- Flickity HTML init. For more info please refer to Flickity Documentation: http://flickity.metafizzy.co -->
                  <div id="testimonials-carousel" class="carousel" data-flickity='{ "imagesLoaded": true, "prevNextButtons": false }'>
                    <div class="carousel-cell active">
                      <figure class="profile">
                        <img class="img-responsive img-circle img-placeholder" src="images/avatars/avatar1.jpg" width="130" height="130" alt="" /> </figure>
                      <div class="content">
                        <blockquote>
                          <i class="material-icons">format_quote</i>
                          <p>Best practices accessibility connect global citizens reproductive rights activist our grantees and partners accelerate prevention stakeholders Cesar Chavez.</p>
                        </blockquote>
                        <p class="source">Jan Hopkins
                          <br />
                          <span class="title">Co-Founder, Melony Pub</span>
                        </p>
                      </div>
                      <!-- .content -->
                    </div>
                    <!-- .item -->
                    <div class="carousel-cell">
                      <figure class="profile">
                        <img class="img-responsive img-circle img-placeholder" src="images/avatars/avatar2.jpg" width="130" height="130" alt="" /> </figure>
                      <div class="content">
                        <blockquote>
                          <i class="material-icons">format_quote</i>
                          <p>Smart cities, strengthen democracy, Angelina Jolie revitalize, safeguards, benefit, Millennium Development Goals. Solve dedicated truth inclusive medical frontline solutions.</p>
                        </blockquote>
                        <p class="source">Lisa Hewitt
                          <br />
                          <span class="title">Entrepreneur, Maclindes</span>
                        </p>
                      </div>
                      <!-- .content -->
                    </div>
                    <!-- .item -->
                    <div class="carousel-cell">
                      <figure class="profile">
                        <img class="img-responsive img-circle img-placeholder" src="images/avatars/avatar3.jpg" width="130" height="130" alt="" /> </figure>
                      <div class="content">
                        <blockquote>
                          <i class="material-icons">format_quote</i>
                          <p>Pursue these aspirations livelihoods criteria agriculture provide long-term. Maximize resourceful carbon rights Jane Jacobs significant.</p>
                        </blockquote>
                        <p class="source">Martin Lewis
                          <br />
                          <span class="title">CTO, Aures</span>
                        </p>
                      </div>
                      <!-- .content -->
                    </div>
                    <!-- .item -->
                  </div>
                  <!-- End carousel -->
                </div>
              </div>
            </div>
            <!-- .container -->
          </section>
          <!-- End testimonials -->
          <!-- Press -->
          <section class="section section-press">
            <div class="container text-center">
              <h2 class="title m-b-md">As seen on...</h2>
              <ul class="press-list list-inline row">
                <li class="col-xs-4 col-sm-2">
                  <a href="#">
                    <img class="img-responsive" src="images/press/press-1.png" alt="" />
                  </a>
                </li>
                <li class="col-xs-4 col-sm-2">
                  <a href="#">
                    <img class="img-responsive" src="images/press/press-2.png" alt="" />
                  </a>
                </li>
                <li class="xs-break col-xs-4 col-sm-2">
                  <a href="#">
                    <img class="img-responsive" src="images/press/press-3.png" alt="" />
                  </a>
                </li>
                <li class="col-xs-4 col-sm-2">
                  <a href="#">
                    <img class="img-responsive" src="images/press/press-4.png" alt="" />
                  </a>
                </li>
                <li class="col-xs-4 col-sm-2">
                  <a href="#">
                    <img class="img-responsive" src="images/press/press-5.png" alt="" />
                  </a>
                </li>
                <li class="col-xs-4 col-sm-2">
                  <a href="#">
                    <img class="img-responsive" src="images/press/press-6.png" alt="" />
                  </a>
                </li>
              </ul>
              <!-- .press-list -->
              <ul class="press-list list-inline row last">
                <li class="col-xs-4 col-sm-2">
                  <a href="#">
                    <img class="img-responsive" src="images/press/press-7.png" alt="" />
                  </a>
                </li>
                <li class="col-xs-4 col-sm-2">
                  <a href="#">
                    <img class="img-responsive" src="images/press/press-8.png" alt="" />
                  </a>
                </li>
                <li class="xs-break col-xs-4 col-sm-2">
                  <a href="#">
                    <img class="img-responsive" src="images/press/press-9.png" alt="" />
                  </a>
                </li>
                <li class="col-xs-4 col-sm-2">
                  <a href="#">
                    <img class="img-responsive" src="images/press/press-10.png" alt="" />
                  </a>
                </li>
                <li class="col-xs-4 col-sm-2">
                  <a href="#">
                    <img class="img-responsive" src="images/press/press-11.png" alt="" />
                  </a>
                </li>
                <li class="col-xs-4 col-sm-2">
                  <a href="#">
                    <img class="img-responsive" src="images/press/press-12.png" alt="" />
                  </a>
                </li>
              </ul>
              <!-- .press-list -->
              <div class="press-lead text-center">
                <h3 class="title">Have a press inquiry?</h3>
                <p class="press-links">
                  <a href="#">Download our press kit</a> or
                  <a href="contact.html">contact us</a>
                </p>
              </div>
            </div>
            <!-- .container -->
          </section>
          <!-- End Press -->
          <!-- CTA -->
          <section id="section-cta" class="section section-cta text-center home-section-cta bg-img bg-inverse bg-overlay" style="background-image: url(images/backgrounds/background-2.jpg);">
            <div class="container js-animate" data-vc-animation="transition.slideUpIn" data-vc-duration="700">
              <h2 class="title">Start using Marvel today</h2>
              <p class="intro">Join community with over
                <span class="counting">10,000</span> active users</p>
              <p>
                <a class="btn btn-cta btn-cta-primary btn-lg" href="#">Get Marvel Now</a>
              </p>
            </div>
            <!-- .container -->
          </section>
          <!-- End CTA -->
        </div>
        <!-- .section-wrapper -->
        <!-- Video Modal -->
        <div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
              </div>
              <div class="modal-body">
                <div class="video-container">
                  <iframe id="vimeo-video" src="https://player.vimeo.com/video/74228152?color=ffffff&amp;wmode=transparent" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <!--//video-container-->
              </div>
              <!--//modal-body-->
            </div>
            <!--//modal-content-->
          </div>
          <!--//modal-dialog-->
        </div>
        <!--//modal-->
        @endsection