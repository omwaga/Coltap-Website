@extends('layouts.master')
@section('content')
        <div class="bg-img bg-overlay" style="height: 420px; background-image: url(images/backgrounds/background-1.jpg);"></div>
        <!-- Contact Section -->
        <section class="section section-contact section-on-bg">
          <div class="container">
            <div class="caption bg-inverse text-center">
              <h2 class="title">We'd love to talk with you</h2>
              <p class="intro">Brief us your requirements below, and let's connect</p>
            </div>
            @include('errors')
            @include('success')
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
                    <button type="submit" class="btn btn-block btn-cta btn-cta-primary">Send Message</button>
                  </div>
                </div>
                <!-- .row -->
              </div>
              <div id="form-messages"></div>
            </form>
            <!-- .contact-form -->
          </div>
          <!-- .container -->
        </section>
        <!-- .contact-section -->
        <!-- Other Contact Section -->
        <section class="contact-other-section section">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="title">Our contact info</h2>
                <p class="intro m-b-lg">Free expression, invest, inclusive capitalism participatory monitoring approach Kickstarter global network catalytic effect synthesize connect.</p>
              </div>
            </div>
            <div class="row">
              <ul class="other-info list-unstyled col-md-6 col-sm-10 col-xs-12 col-md-offset-3 col-sm-offset-1 xs-offset-0">
                <li>
                  <span>
                    <i class="material-icons">email</i>
                  </span>
                  <a href="#">company@email.com</a>
                </li>
                <li>
                  <span>
                    <i class="material-icons">phone</i>
                  </span>
                  <a href="tel:+0800123456">0800 123 456</a>
                </li>
                <li>
                  <span>
                    <i class="material-icons">place</i>
                  </span>Mobile Style
                  <br /> Highcross St
                  <br />LE1 4AN
                  <br />Leicester
                  <br />UK</li>
              </ul>
            </div>
            <!-- .row -->
          </div>
          <!-- .container -->
        </section>
        <!-- .contact-other-section -->
        <!-- Map Section -->
        <section class="section-map section">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="title">Let's meet in our office</h2>
                <p class="intro m-b-lg">Recognition, social entrepreneurship empowerment support; tackling integrity justice, new approaches organization.</p>
              </div>
            </div>
            <div class="gmap-wrapper">
              <div class="gmap-wrapper" id="map">
                <!-- .You need to embed your own google map below -->
                <!-- https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d370.4760791967736!2d-1.1355767057912627!3d52.636378432944234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xffbe1c7f53b24d1f!2sMOBILE+STYLE!5e0!3m2!1sen!2sru!4v1475226727874"
                  width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <!-- .gmap-wrapper -->
            </div>
            <!-- .gmap-wrapper -->
          </div>
          <!-- .container -->
        </section>
        <!-- .section-map -->
@endsection