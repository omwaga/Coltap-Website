<!DOCTYPE html>
<html class="app-ui" lang="en-US">
  <head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=10" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <!-- Document title -->
    <title>The Coltap | Be Inspired By Best</title>
    <meta name="description" content="Acodem, leading software and website development in kenya" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" href="{{ asset('images/favicons/favicon.ico')}}" />
    <!-- Google fonts / Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('vendor/flickity/flickity.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" id="css-font-awesome" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" id="css-styles" href="{{ asset('styles/style.css')}}" />
    <link rel="stylesheet" id="css-fonts" href="{{ asset('styles/fonts-1.css')}}" />
    <!-- End Stylesheets --> 

  </head>
  <body class="home-page">
    <div class="layout-canvas">
      <div class="layout-container">
        <!-- HEADER -->
        <header id="header" class="header navbar-fixed-top">
          <div class="container">
            <h1 class="logo">
              <a href="index.html">
                <span class="logo-icon"></span>
                <span class="text">The Coltap</span>
              </a>
            </h1>
            <!-- .logo -->
            <nav class="main-nav navbar-right" role="navigation">
              <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- .nav-toggle -->
              </div>
              <!-- .navbar-header -->
              <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="nav-item active">
                    <a href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('services')}}">Our Services</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('pricing')}}">Pricing</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Pages
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="{{route('aboutus')}}">About Us</a>
                      </li>
                      <li>
                        <a href="{{route('fromblog')}}">Blog</a>
                      </li>
                      <li>
                        <a href="{{route('contactus')}}">Contact</a>
                      </li>
                      <li>
                        <a href="{{route('download')}}">Download</a>
                      </li>
                    </ul>
                  </li>
                   @guest
                            
                  <li class="nav-item">
                    <a href="{{route('userlogin')}}">Login</a>
                  </li>
                            @if (Route::has('register'))
                                
                  <li class="nav-item nav-item-cta last">
                    <a class="btn btn-cta btn-cta-secondary" href="{{route('signup')}}">Sign Up Free</a>
                  </li>
                            @endif
                        @else
                            <li class="nav-item nav-item-cta last dropdown">
                                <a id="navbarDropdown" class="btn btn-cta btn-cta-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
                <!-- .nav -->
              </div>
              <!-- .navabr-collapse -->
            </nav>
            <!-- .main-nav -->
          </div>
          <!-- .container -->
        </header>

        @yield('content')


        <!-- Footer -->
        <footer class="footer">
          <div class="footer-content">
            <div class="container">
              <div class="row">
                <div class="footer-col links col-md-2 col-sm-4">
                  <div class="footer-col-inner">
                    <h3 class="title">About us</h3>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#">&rsaquo; Who we are</a>
                      </li>
                      <li>
                        <a href="#">&rsaquo; Contact us</a>
                      </li>
                      <li>
                        <a href="#">&rsaquo; Blog</a>
                      </li>
                      <li>
                        <a href="#">&rsaquo; Jobs</a>
                      </li>
                    </ul>
                  </div>
                  <!-- .footer-col-inner -->
                </div>
                <!-- .foooter-col -->
                <div class="footer-col links col-md-2 col-sm-4">
                  <div class="footer-col-inner">
                    <h3 class="title">Products & Services</h3>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#">&rsaquo; How it works</a>
                      </li>
                      <li>
                        <a href="#">&rsaquo; Pricing</a>
                      </li>
                      <li>
                        <a href="#">&rsaquo; API</a>
                      </li>
                      <li>
                        <a href="#">&rsaquo; Download</a>
                      </li>
                    </ul>
                  </div>
                  <!-- .footer-col-inner -->
                </div>
                <!-- .foooter-col -->
                <div class="footer-col links col-md-2 col-sm-4 sm-break">
                  <div class="footer-col-inner">
                    <h3 class="title">Support</h3>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#">&rsaquo; Help</a>
                      </li>
                      <li>
                        <a href="#">&rsaquo; Documentation</a>
                      </li>
                      <li>
                        <a href="#">&rsaquo; Terms of Service</a>
                      </li>
                      <li>
                        <a href="#">&rsaquo; Privacy</a>
                      </li>
                    </ul>
                  </div>
                  <!-- .footer-col-inner -->
                </div>
                <!-- .foooter-col -->
                <div class="footer-col connect col-sm-12 col-md-6">
                  <div class="footer-col-inner">
                    <ul class="social list-inline">
                      <li>
                        <a href="#" target="_blank">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-github"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-google-plus"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                      <li class="row-end">
                        <a href="#">
                          <i class="fa fa-rss"></i>
                        </a>
                      </li>
                    </ul>
                    <div class="form-container">
                      <p class="intro">Get latest news and offers in your inbox.</p>
                      <form class="signup-form navbar-form">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Enter your email address"> </div>
                        <button type="submit" class="btn btn-cta btn-cta-primary">Subscribe</button>
                      </form>
                    </div>
                    <!-- .subscription-form -->
                  </div>
                  <!-- .footer-col-inner -->
                </div>
                <!-- .foooter-col -->
                <div class="clearfix"></div>
              </div>
              <!-- .row -->
            </div>
            <!-- .container -->
          </div>
          <!-- .footer-content -->
          <div class="bottom-bar">
            <div class="container">
              <p class="copyright">All rights reserved &copy; <script>document.write(new Date().getFullYear())</script> AcodeM.</p>
            </div>
            <!-- .container -->
          </div>
          <!-- .bottom-bar -->
        </footer>
        <!-- .footer -->
      </div>
      <!-- .layout-container -->
    </div>
    <!-- .layout-canvas -->
    <!-- Apps Modal -->
    <!-- Opens from the button in the header -->
    <div id="apps-modal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-sm modal-dialog modal-dialog-top">
        <div class="modal-content">
          <!-- Apps card -->
          <div class="card m-b-0">
            <div class="card-header bg-app bg-inverse">
              <h4>Apps</h4>
              <ul class="card-actions">
                <li>
                  <button data-dismiss="modal" type="button">
                    <i class="ion-close"></i>
                  </button>
                </li>
              </ul>
            </div>
            <div class="card-block">
              <div class="row text-center">
                <div class="col-xs-6">
                  <a class="card card-block m-b-0 bg-app-secondary bg-inverse" href="index.html">
                    <i class="ion-speedometer fa-4x"></i>
                    <p>Admin</p>
                  </a>
                </div>
                <div class="col-xs-6">
                  <a class="card card-block m-b-0 bg-app-tertiary bg-inverse" href="frontend_home.html">
                    <i class="ion-laptop fa-4x"></i>
                    <p>Frontend</p>
                  </a>
                </div>
              </div>
            </div>
            <!-- .card-block -->
          </div>
          <!-- End Apps card -->
        </div>
      </div>
    </div>
    <!-- End Apps Modal -->
    <!-- Javascript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}"></script>
    <script src="{{ asset('vendor/flickity/flickity.pkgd.min.js')}}"></script>
    <script src="{{ asset('vendor/froogaloop2/froogaloop2.min.js')}}"></script>
    <script src="{{ asset('vendor/inview/jquery.inview.min.js')}}"></script>
    <script src="{{ asset('vendor/masonry/masonry.pkgd.min.js')}}"></script>
    <script src="{{ asset('vendor/velocity/velocity.min.js')}}"></script>
    <script src="{{ asset('vendor/velocity/velocity.ui.min.js')}}"></script>
    <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('scripts/main.js')}}"></script>
    <script type="text/javascript">
      
  let i=2;

  
  $(document).ready(function(){
    var radius = 200;
    var fields = $('.itemDot');
    var container = $('.dotCircle');
    var width = container.width();
 radius = width/2.5;
 
     var height = container.height();
    var angle = 0, step = (2*Math.PI) / fields.length;
    fields.each(function() {
      var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
      var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
      if(window.console) {
        console.log($(this).text(), x, y);
      }
      
      $(this).css({
        left: x + 'px',
        top: y + 'px'
      });
      angle += step;
    });
    
    
    $('.itemDot').click(function(){
      
      var dataTab= $(this).data("tab");
      $('.itemDot').removeClass('active');
      $(this).addClass('active');
      $('.CirItem').removeClass('active');
      $( '.CirItem'+ dataTab).addClass('active');
      i=dataTab;
      
      $('.dotCircle').css({
        "transform":"rotate("+(360-(i-1)*36)+"deg)",
        "transition":"2s"
      });
      $('.itemDot').css({
        "transform":"rotate("+((i-1)*36)+"deg)",
        "transition":"1s"
      });
      
      
    });
    
    setInterval(function(){
      var dataTab= $('.itemDot.active').data("tab");
      if(dataTab>6||i>6){
      dataTab=1;
      i=1;
      }
      $('.itemDot').removeClass('active');
      $('[data-tab="'+i+'"]').addClass('active');
      $('.CirItem').removeClass('active');
      $( '.CirItem'+i).addClass('active');
      i++;
      
      
      $('.dotCircle').css({
        "transform":"rotate("+(360-(i-2)*36)+"deg)",
        "transition":"2s"
      });
      $('.itemDot').css({
        "transform":"rotate("+((i-2)*36)+"deg)",
        "transition":"1s"
      });
      
      }, 5000);
    
  });



    </script>
  </body>
</html>