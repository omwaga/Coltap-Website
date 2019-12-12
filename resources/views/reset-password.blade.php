<!DOCTYPE html>
<html class="app-ui" lang="en-US">
  <head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=10" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <!-- Document title -->
    <title>Reset password | Marvel</title>
    <meta name="description" content="Marvel - HTML Template for Product Promotion" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png" />
    <link rel="icon" href="images/favicons/favicon.ico" />
    <!-- Google fonts / Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <!-- jQuery -->
    <script src="vendor/jquery/jquery-2.2.4.min.js"></script>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="vendor/flickity/flickity.min.css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" id="css-font-awesome" href="vendor/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" id="css-styles" href="styles/style.css" />
    <link rel="stylesheet" id="css-fonts" href="styles/fonts-1.css" />
    <!-- End Stylesheets -->
  </head>
  <body class="resetpass-page access-page has-full-screen-bg">
    <div class="layout-canvas">
      <div class="layout-container">
        <!-- Header -->
        <header class="header">
          <div class="container">
            <h1 class="logo">
              <a href="index.html">
                <span class="logo-icon"></span>
                <span class="text">Marvel</span>
              </a>
            </h1>
          </div>
        </header>
        <!-- End header -->
        <div class="bg-img bg-img-full-height bg-overlay" style="background-image: url(images/backgrounds/background-4.jpg);"></div>
        <!-- Login Section -->
        <section class="resetpass-section section section-access">
          <div class="container">
            <div class="row">
              <div class="form-box col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                <div class="form-box-inner">
                  <h2 class="title text-center">Password Reset</h2>
                  <p class="intro">Please enter your email address below and we'll email you a link to a page where you can easily create a new password.</p>
                  <div class="row">
                    <div class="form-container">
                      <form class="resetpass-form">
                        <div class="form-group email">
                          <label class="sr-only" for="reset-email">Email</label>
                          <input id="reset-email" type="email" class="form-control resetpass-email" placeholder="Email" /> </div>
                        <!-- .form-group-->
                        <button type="submit" class="btn btn-block btn-cta-primary">Reset Password</button>
                      </form>
                      <p class="lead text-center">Take me back to the
                        <a href="{{route('userlogin')}}">login</a> page</p>
                    </div>
                    <!-- .form-container-->
                  </div>
                  <!-- .row-->
                </div>
                <!-- .form-box-inner-->
              </div>
              <!-- .form-box-->
            </div>
            <!-- .row-->
          </div>
          <!-- .container-->
        </section>
        <!-- .contact-section -->
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
                    <h3 class="title">Product</h3>
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
              <p class="copyright">Powered by Bootstrap. All rights reserved &copy; rustheme</p>
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
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script src="vendor/flickity/flickity.pkgd.min.js"></script>
    <script src="vendor/froogaloop2/froogaloop2.min.js"></script>
    <script src="vendor/inview/jquery.inview.min.js"></script>
    <script src="vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="vendor/velocity/velocity.min.js"></script>
    <script src="vendor/velocity/velocity.ui.min.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>