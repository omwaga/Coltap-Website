@extends('layouts.home')
@section('content')
        
    <!-- START CONTACT FORM DESIGN -->
    <section id="contact" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="section-title text-center wow zoomIn">
            <h1>Let's talk about what we can build together</h1>
            <span></span>
            <h4>We make your ideas a reality!</h4>
          </div>
        </div><!--- END ROW --> 
        <div class="row">
            @include('errors')
            @include('success')
          <div class="col-md-8 col-md-offset-2">
            <div class="contact-form wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
              <!-- *****  Contact form ***** -->
              <form id="contact-form" class="contact-form" method="post" action="/leads">
              @csrf
              <div class="contact-form-inner col-md-offset-2 col-md-8">
                <div class="row">
                  <div class="form-group col-xs-12 col-sm-6">
                    <label class="sr-only" for="cname">Your name</label>
                    <input type="text" class="form-control login-email" id="cname" name="name" placeholder="Your name" minlength="2" value="{{old('name')}}" required> </div>
                  <div class="form-group col-xs-12 col-sm-6">
                    <label class="sr-only" for="cemail">Email address</label>
                    <input type="email" class="form-control" value="{{old('email')}}" id="cemail" name="email" placeholder="Your email address" required> </div>
                    <div class="form-group col-xs-12 col-sm-12">
                    <label class="sr-only" for="cemail">Phone Number</label>
                    <input type="text" class="form-control" id="cemail" name="phone" value="{{old('phone')}}" placeholder="Your phone number" required> </div>
                  <div class="form-group col-xs-12">
                    <label class="sr-only" for="cmessage">Your message</label>
                    <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="12" required>{{old('message')}}</textarea>
                  </div>
                  <div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-default btn-theme-bg"><i class="fa fa-paper-plane-o"></i>Send Message</button>
                  </div>
                </div>
                <!-- .row -->
              </div>
              <div id="form-messages"></div>
            </form>
            <!-- .contact-form -->
            </div>
          </div><!-- END COL -->
        </div><!-- END ROW -->
      </div><!-- END CONTAINER -->
    </section>
    <!-- END CONTACT FORM DESIGN -->
    
    
    <!-- START CONTACT ADDRESS DESIGN -->
    <div id="contact_address" class="section-padding">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-6 col-sm-6 col-xs-12"> 
            <div class="single_address wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
              <i class="fa fa-envelope-o color-icon-fifteen"></i>
              <p>mail@example.com</p>             
            </div>
          </div><!--- END COL -->
          <!--<div class="col-md-6 col-sm-6 col-xs-12"> -->
          <!--  <div class="single_address wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">-->
          <!--    <i class="fa fa-home color-icon-sixteen"></i>-->
          <!--    <p>3481 Melrose Place, Beverly Hills CA 90210</p>-->
          <!--  </div>-->
          <!--</div><!--- END COL -->-->
          <div class="col-md-6 col-sm-6 col-xs-12"> 
            <div class="single_address wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
              <i class="fa fa-phone color-icon-seventeen"></i>
              <p>(+254) 713577210</p>
            </div>
          </div><!--- END COL -->
        </div>
      </div><!--- END CONTAINER -->
    </div>
    <!-- END CONTACT ADDRESS DESIGN -->
@endsection