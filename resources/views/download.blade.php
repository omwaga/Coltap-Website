@extends('layouts.master')
@section('content')
        <div class="bg-img bg-img-full-height bg-overlay" style="background-image: url(images/backgrounds/background-3.jpg);"></div>
        <!-- Apps Section -->
        <section class="section-apps section section-on-bg bg-inverse">
          <div class="container">
            <div class="row">
              <div class="content-area col-md-push-5 col-sm-push-6 col-sm-6">
                <div class="download-area">
                  <h2 class="title">Get started with one install</h2>
                  <p class="intro">Download app for your device.</p>
                  <ul class="list-unstyled download-list">
                    <li>
                      <a class="btn btn-ghost" href="#">
                        <i class="fa fa-apple"></i>
                        <span class="text">Download for iOS</span>
                      </a>
                    </li>
                    <li>
                      <a class="btn btn-ghost" href="#">
                        <i class="fa fa-android"></i>
                        <span class="text">Download for Android</span>
                      </a>
                    </li>
                    <li>
                      <a class="btn btn-ghost" href="#">
                        <i class="fa fa-windows"></i>
                        <span class="text">Windows coming soon...</span>
                      </a>
                    </li>
                  </ul>
                  <!-- .Only show QR code on desktop  -->
                  <div class="qrcode-holder hidden-sm hidden-xs text-center">
                    <figure class="qrcode">
                      <img class="img-responsive" src="images/mobile/QR-code.png" alt="QR code" />
                      <figcaption class="caption">Scan the QR code
                        <br /> to download</figcaption>
                    </figure>
                    <!-- .qrcode -->
                  </div>
                </div>
                <!-- .download-area -->
                <div class="info">
                  <div class="info-inner">
                    <h3 class="title">Important!</h3>
                    <p>You can generate a single QR code for your app download
                      <a href="http://www.appqr.mobi/" id="link-ext-qrgenerator" target="_blank">here</a>.</p>
                    <p>Also you can use this section for any app announcement, e.g. future updates or upcoming changes.</p>
                  </div>
                </div>
              </div>
              <!-- .content-area -->
              <div class="phone-holder-wrapper col-md-4 col-md-offset-1 col-md-pull-6 col-sm-offset-1 col-sm-5 col-sm-pull-6">
                <div class="phone-holder" style="background-image: url(images/mobile/iphone.png)">
                  <img class="screenshot" src="images/mobile/screenshot.png" alt="" /> </div>
                <!-- .phone-holder -->
              </div>
              <!-- .phone-holder-wrapper -->
            </div>
            <!-- .row -->
          </div>
          <!-- .container -->
        </section>
        <!-- .feature-video -->
@endsection