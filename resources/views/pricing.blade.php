@extends('layouts.master')
@section('content')
        <div class="bg-img bg-overlay" style="height: 420px; background-image: url(images/backgrounds/background-1.jpg);"></div>
        <!-- Pricing Section -->
        <section class="section section-pricing section-on-bg">
          <div class="container">
            <div class="caption bg-inverse text-center">
              <h2 class="title">14 day
                <span class="highlight">FREE</span> trial for each plan!</h2>
              <p class="intro">You can change your plan or cancel subscription at any time.</p>
            </div>
            <div class="price-cols row">
              <div class="items-wrapper col-md-10 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                <div class="item price-1 col-sm-4 text-center">
                  <div class="item-inner">
                    <div class="heading">
                      <h3 class="title">Freelancer</h3>
                      <p class="price-figure">
                        <span class="price-figure-inner">
                          <span class="currency">$</span>
                          <span class="h4 number">19</span>
                          <br />
                          <span class="unit"> per month</span>
                        </span>
                      </p>
                    </div>
                    <div class="content">
                      <ul class="list-unstyled feature-list">
                        <li>
                          <i class="material-icons">check</i>1 user</li>
                        <li>
                          <i class="material-icons">check</i>10 GB storage</li>
                        <li>
                          <i class="material-icons">check</i>Forum support</li>
                        <li class="disabled">
                          <i class="material-icons">close</i>Free update</li>
                        <li class="disabled">
                          <i class="material-icons">close</i>24/7 support</li>
                      </ul>
                      <a class="btn btn-cta btn-cta-primary btn-lg" href="{{route('contactus')}}">Quick Enquiry</a>
                    </div>
                    <!-- .content -->
                  </div>
                  <!-- .item-inner -->
                </div>
                <!-- .item -->
                <div class="item price-2 col-sm-4 text-center best-buy">
                  <div class="item-inner">
                    <div class="heading">
                      <h3 class="title">Agency</h3>
                      <p class="price-figure">
                        <span class="price-figure-inner">
                          <span class="currency">$</span>
                          <span class="h4 number">49</span>
                          <br />
                          <span class="unit">per month</span>
                        </span>
                      </p>
                    </div>
                    <div class="content">
                      <ul class="list-unstyled feature-list">
                        <li>
                          <i class="material-icons">check</i>10 users</li>
                        <li>
                          <i class="material-icons">check</i>30 GB storage</li>
                        <li>
                          <i class="material-icons">check</i>Email support</li>
                        <li>
                          <i class="material-icons">check</i>Free update</li>
                        <li class="disabled">
                          <i class="material-icons">close</i>24/7 support</li>
                      </ul>
                      <a class="btn btn-cta btn-cta-primary btn-lg" href="{{route('contactus')}}">Quick Enquiry</a>
                    </div>
                    <!-- .content -->
                    <div class="ribbon">
                      <div class="h4 text">Popular</div>
                    </div>
                    <!-- .ribbon -->
                  </div>
                  <!-- .item-inner -->
                </div>
                <!-- .item -->
                <div class="item price-3 col-sm-4 text-center">
                  <div class="item-inner">
                    <div class="heading">
                      <h3 class="title">Network</h3>
                      <p class="price-figure">
                        <span class="price-figure-inner">
                          <span class="currency">$</span>
                          <span class="h4 number">99</span>
                          <br />
                          <span class="unit">per month</span>
                        </span>
                      </p>
                    </div>
                    <div class="content">
                      <ul class="list-unstyled feature-list">
                        <li>
                          <i class="material-icons">check</i>Unlimited user</li>
                        <li>
                          <i class="material-icons">check</i>100 GB storage</li>
                        <li>
                          <i class="material-icons">check</i>Email support</li>
                        <li>
                          <i class="material-icons">check</i>Free update</li>
                        <li>
                          <i class="material-icons">check</i>24/7 support</li>
                      </ul>
                      <a class="btn btn-cta btn-cta-primary btn-lg" href="{{route('contactus')}}">Quick Enquiry</a>
                    </div>
                    <!-- .content -->
                  </div>
                  <!-- .item-inner -->
                </div>
                <!-- .item -->
              </div>
              <!-- .items-wrapper -->
            </div>
            <!-- .row -->
          </div>
          <!-- .container -->
        </section>
        <!-- .pricing -->
        <!-- FAQ Section -->
        <section class="section-faq section bg-gray">
          <div class="container">
            <h2 class="title text-center m-b-lg">Frequently asked questions</h2>
            <div class="row">
              <div class="col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1">
                <div class="panel">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq1">
                        <i class="material-icons">add</i>Viverra sit amet quam eget lacinia?</a>
                    </h4>
                  </div>
                  <div class="panel-collapse collapse" id="faq1">
                    <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                      sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                      occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                  </div>
                </div>
                <!-- .panel -->
                <div class="panel">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq2">
                        <i class="material-icons">add</i>Lorem ipsum dolor sit amet quam tortor?</a>
                    </h4>
                  </div>
                  <div class="panel-collapse collapse" id="faq2">
                    <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                      sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                      occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                  </div>
                </div>
                <!-- .panel -->
                <div class="panel">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq3">
                        <i class="material-icons">add</i>The morbi quam tortor work?</a>
                    </h4>
                  </div>
                  <div class="panel-collapse collapse" id="faq3">
                    <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                      sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                      occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                  </div>
                </div>
                <!-- .panel -->
                <div class="panel">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq4">
                        <i class="material-icons">add</i>Ipsum dolor sit amet nascetur ridiculus?</a>
                    </h4>
                  </div>
                  <div class="panel-collapse collapse" id="faq4">
                    <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                      sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                      occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                  </div>
                </div>
                <!-- .panel -->
                <div class="panel">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq5">
                        <i class="material-icons">add</i>Tellus eget auctor condimentum?</a>
                    </h4>
                  </div>
                  <div class="panel-collapse collapse" id="faq5">
                    <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                      sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                      occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                  </div>
                </div>
                <!-- .panel -->
                <div class="panel">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq6">
                        <i class="material-icons">add</i>Elementum turpis semper imperdiet?</a>
                    </h4>
                  </div>
                  <div class="panel-collapse collapse" id="faq6">
                    <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                      sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                      occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                  </div>
                </div>
                <!-- .panel -->
              </div>
            </div>
            <!-- .row -->
            <div class="contact-lead text-center">
              <h4 class="title">Still have questions?</h4>
              <a class="btn btn-cta btn-cta-secondary" href="contact.html">Get in touch</a>
            </div>
          </div>
          <!-- .container -->
        </section>
        <!-- .faq -->
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
  @endsection