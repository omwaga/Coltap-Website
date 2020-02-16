@extends('blog.layouts.master')
@section('content')
        <!-- BLOG -->
        <div class="blog blog-entry-wrapper">
          <div class="blog-entry">
            <article class="post">
              <header class="blog-entry-heading bg-img bg-inverse bg-overlay" style="background-image: url({{asset('images/backgrounds/background-3.jpg')}});">
                <div class="container text-center">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <h2 class="title">{{$blog->title}}</h2>
                      <div class="meta">
                        <ul class="meta-list list-inline">
                          <li class="post-time">25th May, 2017</li>
                          <li class="post-author">by
                            <a href="#">Emma Lawrence</a>
                          </li>
                          <li class="post-cat">in
                            <a href="#">Technology</a>
                          </li>
                        </ul>
                        <!-- .meta-list -->
                      </div>
                      <!--meta -->
                    </div>
                  </div>
                </div>
                <!-- .container -->
                <nav class="post-nav post-nav-top">
                  <span class="nav-previous">
                    <a href="#" rel="prev">
                      <i class="material-icons md-18">keyboard_arrow_left</i> Previous post</a>
                  </span>
                  <span class="nav-next">
                    <a href="#" rel="next">Next post
                      <i class="material-icons md-18">keyboard_arrow_right</i>
                    </a>
                  </span>
                </nav>
                <!-- .post-nav -->
              </header>
              <div class="container">
                <div class="row">
                  <div class="blog-entry-content col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1">
                    <p>{!!$blog->description!!}</p>
                  </div>
                  <!-- .blog-entry-content -->
                  <!-- .Soical media buttons-->
                  <div class="col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1">
                    <div class="m-b">Share this:</div>
                    <!-- Replace href with your meta and URL information -->
                    <ul class="social list-inline">
                      <li>
                        <a href="http://twitter.com/home?status=Ridiculously%20Responsive%20Social%20Sharing%20Buttons%20by%20@joshuatuscan%20and%20@dbox%20http://kurtnoble.com/labs/rrssb" target="_blank">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <!-- Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header:
								https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://kurtnoble.com/labs/rrssb/index.html">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://plus.google.com/share?url=Check%20out%20how%20ridiculously%20responsive%20these%20social%20buttons%20are%20http://kurtnoble.com/labs/rrssb/index.html">
                          <i class="fa fa-google-plus"></i>
                        </a>
                      </li>
                      <li>
                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://kurtnoble.com/labs/rrssb/index.html&amp;title=Ridiculously%20Responsive%20Social%20Sharing%20Buttons&amp;summary=Responsive%20social%20icons%20by%20KNI%20Labs">
                          <i class="fa fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- .share-container -->
                  <nav class="post-nav col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1">
                    <span class="nav-previous">
                      <a href="#" rel="prev">
                        <i class="material-icons">chevron_left</i>Previous</a>
                    </span>
                    <span class="nav-next">
                      <a href="#" rel="next">Next
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </span>
                  </nav>
                  <!-- .post-nav -->
                  <div id="comment-area" class="comment-area  col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1">
                    <!-- .DISQUS script starts -->
                    <div id="disqus_thread"></div>
                    <script type="text/javascript">
                      /* CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE */
                      var disqus_shortname = 'shapebootstrap'; // required: replace example with your forum shortname
                      /* DON'T EDIT CODE BELOW */
                      (function()
                      {
                        var dsq = document.createElement('script');
                        dsq.type = 'text/javascript';
                        dsq.async = true;
                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                      })();
                    </script>
                    <noscript>Please enable JavaScript to view the
                      <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a>
                    </noscript>
                    <!-- .DISQUS script ends -->
                  </div>
                  <!-- .comment-area -->
                </div>
                <!-- .row -->
              </div>
              <!-- .container -->
            </article>
            <!-- .post -->
          </div>
          <!-- .blog-entry -->
        </div>
        <!-- .blog-entry-wrapper -->
        @endsection