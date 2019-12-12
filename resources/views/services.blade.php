@extends('layouts.master')
@section('content')
        <div class="bg-img bg-overlay" style="height: 420px; background-image: url(images/backgrounds/background-1.jpg);"></div>
        <!-- Video Section -->
        <section class="features-video section section-on-bg">
          <div class="container">
            <div class="caption bg-inverse text-center">
              <h2 class="title">Take a tour to see how it works</h2>
              <p class="intro">Frontline small-scale farmers forward-thinking sanitation enable giving rural.</p>
            </div>
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="video-container">
                  <!-- You can use Vimeo iframe embed as well as Youtube -->
                  <iframe src="https://player.vimeo.com/video/74228152?color=ffffff&amp;wmode=transparent" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                  <!--
					<iframe width="720" height="405" src="https://www.youtube.com/embed/youtube_video_id" frameborder="0" allowfullscreen></iframe>
					-->
                </div>
                <!-- .video-container -->
              </div>
            </div>
          </div>
          <!-- .container -->
        </section>
        <!-- End video section -->
        <!-- Features Section -->
        <section class="features-tabbed section">
          <div class="container">
            <h2 class="title m-b-lg text-center">Product features</h2>
            <div class="row">
              <div class=" text-center col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1">
                <!-- Nav tabs  -->
                <ul class="nav nav-tabs text-center" role="tablist">
                  <li class="active">
                    <a href="#feature-1" role="tab" data-toggle="tab">
                      <i class="material-icons">cloud_upload</i>
                      <br />
                      <span class="hidden-sm hidden-xs">Feature One</span>
                    </a>
                  </li>
                  <li>
                    <a href="#feature-2" role="tab" data-toggle="tab">
                      <i class="material-icons">folder</i>
                      <br />
                      <span class="hidden-sm hidden-xs">Feature Two</span>
                    </a>
                  </li>
                  <li>
                    <a href="#feature-3" role="tab" data-toggle="tab">
                      <i class="material-icons">photo</i>
                      <br />
                      <span class="hidden-sm hidden-xs">Feature Three</span>
                    </a>
                  </li>
                  <li class="last">
                    <a href="#feature-4" role="tab" data-toggle="tab">
                      <i class="material-icons">people</i>
                      <br />
                      <span class="hidden-sm hidden-xs">Feature Four</span>
                    </a>
                  </li>
                </ul>
                <!-- .nav-tabs -->
                <!-- Tab panes  -->
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="feature-1">
                    <h3 class="title sr-only">Feature One</h3>
                    <figure class="figure text-center">
                      <!--<img class="img-responsive" src="http://placehold.it/570x360" alt="" />-->
                      <img class="img-responsive img-placehold" src="images/figures/figure-1.png" alt="" width="570" height="360" />
                      <figcaption class="figure-caption">(Screenshot source: Marvel - Website Template)</figcaption>
                    </figure>
                    <div class="desc text-left">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue leo mauris, a fringilla nisi posuere tincidunt. Aliquam elementum lorem eget sollicitudin suscipit.</p>
                      <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
                      <ul class="list-unstyled">
                        <li>
                          <i class="material-icons">star</i>Lorem ipsum dolor sit amet.</li>
                        <li>
                          <i class="material-icons">star</i>Aliquam tincidunt mauris eu risus.</li>
                        <li>
                          <i class="material-icons">star</i>Ultricies eget vel aliquam libero.</li>
                        <li>
                          <i class="material-icons">star</i>Maecenas nec odio.</li>
                      </ul>
                      <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                        rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                    </div>
                    <!-- .desc -->
                  </div>
                  <!-- .tab-pane -->
                  <div class="tab-pane fade" id="feature-2">
                    <h3 class="title sr-only">Feature Two</h3>
                    <figure class="figure text-center">
                      <!--<img class="img-responsive" src="http://placehold.it/570x360" alt="" />-->
                      <img class="img-responsive img-placehold" src="images/figures/figure-2.png" alt="" width="570" height="360" />
                      <figcaption class="figure-caption">(Screenshot source: Marvel - Website Template)</figcaption>
                    </figure>
                    <div class="desc text-left">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue leo mauris, a fringilla nisi posuere tincidunt. Aliquam elementum lorem eget sollicitudin suscipit.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id nulla at libero ultricies tempus. Duis porta justo quam, ut ultrices felis posuere sit amet. Sed imperdiet bibendum est, sit amet sagittis ante sagittis eu.
                        <a href="#">Integer fringilla</a> a purus sit amet laoreet. Ut consequat volutpat sapien sed lobortis. Nullam laoreet vitae justo nec dignissim.</p>
                      <blockquote>
                        <p>Viverra magna pellentesque in magnis gravida sit augue felis vehicula vestibulum semper penatibus justo ornare semper Gravida felis platea arcu mus non. Montes at posuere. Natoque.</p>
                      </blockquote>
                    </div>
                    <!-- .desc -->
                  </div>
                  <!-- .tab-pane -->
                  <div class="tab-pane fade" id="feature-3">
                    <h3 class="title sr-only">Feature Three</h3>
                    <figure class="figure text-center">
                      <!--<img class="img-responsive" src="http://placehold.it/570x360" alt="" />-->
                      <img class="img-responsive img-placehold" src="images/figures/figure-3.png" alt="" width="570" height="360" />
                      <figcaption class="figure-caption">(Screenshot source: Marvel - Website Template)</figcaption>
                    </figure>
                    <div class="desc text-left">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue leo mauris, a fringilla nisi posuere tincidunt. Aliquam elementum lorem eget sollicitudin suscipit.</p>
                      <p>Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                        </p>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>Nullam consequat</th>
                              <th>Commodo metus</th>
                              <th>Dapibus porta</th>
                              <th>Sed porta</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Faucibus purus</td>
                              <td>Aliquam sit</td>
                              <td>Sed porta leo</td>
                              <td>Duis ut ornare dui</td>
                            </tr>
                            <tr>
                              <td>Condimentum</td>
                              <td>Curabitur tempus</td>
                              <td>Fusce vehicula</td>
                              <td>Nasceturs</td>
                            </tr>
                            <tr>
                              <td>Neque a condimentum</td>
                              <td>Cum sociis natoque</td>
                              <td>Penatibus magnis</td>
                              <td>Curabitur</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- .table-responsive -->
                    </div>
                    <!-- .desc -->
                  </div>
                  <!-- .tab-pane -->
                  <div class="tab-pane fade" id="feature-4">
                    <h3 class="title sr-only">Feature Four</h3>
                    <figure class="figure text-center">
                      <!--<img class="img-responsive" src="http://placehold.it/570x360" alt="" />-->
                      <img class="img-responsive img-placehold" src="images/figures/figure-2.png" alt="" width="570" height="360" />
                      <figcaption class="figure-caption">(Screenshot source: Marvel - Website Template)</figcaption>
                    </figure>
                    <div class="desc text-left">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue leo mauris, a fringilla nisi posuere tincidunt. Aliquam elementum lorem eget sollicitudin suscipit.</p>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                        eu</p>
                      <p class="box">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id nulla at libero ultricies tempus. Duis porta justo quam, ut ultrices felis posuere sit amet. Sed imperdiet bibendum est, sit amet sagittis ante sagittis eu. Ut consequat
                        volutpat sapien sed lobortis. Nullam laoreet vitae justo nec dignissim.</p>
                    </div>
                    <!-- .desc -->
                  </div>
                  <!-- .tab-pane -->
                </div>
                <!-- .tab-content -->
              </div>
              <!-- .col-md-x -->
            </div>
            <!-- .row -->
          </div>
          <!-- .container -->
        </section>
        <!-- .features-tabbed -->
        <!-- Steps Section -->
        <section class="section section-steps bg-gray">
          <div class="container">
            <h2 class="title m-b-lg text-center">Get started with Marvel</h2>
            <div class="row js-animate-children" data-vc-animation="transition.slideUpIn" data-vc-duration="750" data-vc-stagger="150">
              <div class="step text-center col-xs-12 col-sm-4">
                <h3 class="title">
                  <span class="number">1</span>
                  <span class="h4 text">Sign up</span>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
              </div>
              <!-- .step -->
              <div class="step text-center col-xs-12 col-sm-4">
                <h3 class="title">
                  <span class="number">2</span>
                  <span class="text">Second step</span>
                </h3>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              </div>
              <!-- .step -->
              <div class="step text-center col-xs-12 col-sm-4">
                <h3 class="title">
                  <span class="number">3</span>
                  <span class="text">Final step</span>
                </h3>
                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet.</p>
              </div>
              <!-- .step -->
            </div>
            <!-- .row -->
            <div class="text-center">
              <a class="btn btn-cta btn-cta-primary btn-lg" href="signup.html">Sign up - It's Free</a>
            </div>
          </div>
          <!-- .container -->
        </section>
        <!-- .steps -->
@endsection