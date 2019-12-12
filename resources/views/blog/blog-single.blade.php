@extends('blog.layouts.master')
@section('content')
        <!-- BLOG -->
        <div class="blog blog-entry-wrapper">
          <div class="blog-entry">
            <article class="post">
              <header class="blog-entry-heading bg-img bg-inverse bg-overlay" style="background-image: url(images/backgrounds/background-3.jpg);">
                <div class="container text-center">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <h2 class="title">Powerful design prototyping tools</h2>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis mattis erat, dictum facilisis magna posuere ac. Curabitur consectetur magna mauris, et aliquam lectus ornare nec. Cum sociis natoque penatibus et magnis dis parturient
                      montes, nascetur ridiculus mus. Mauris quis tellus magna.</p>
                    <p>Pellentesque mattis scelerisque nibh eu tincidunt. Phasellus feugiat arcu eget sem tincidunt aliquam. Integer eleifend risus quis venenatis scelerisque. Nulla egestas commodo dignissim. Curabitur vel imperdiet diam.</p>
                    <h3 class="section-heading">Section Heading</h3>
                    <p>Cras adipiscing ipsum vel molestie cursus. In ultrices tristique vestibulum. Aenean ut dui diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut bibendum ipsum nec sagittis ultrices. Vestibulum
                      ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                    <figure class="figure">
                      <img class="img-responsive" src="images/blog/blog-content.jpg" alt="" />
                      <figcaption class="figure-caption">Image Source:
                        <a href="#" onclick="return false;">Cras pharetra dolor dui</a>
                      </figcaption>
                    </figure>
                    <p>Morbi vulputate bibendum fringilla. Sed fermentum nisi laoreet, porttitor ipsum et, vehicula diam. Fusce iaculis turpis dolor, et cursus arcu cursus vel. Ut lobortis tellus ornare ultrices tristique. Praesent cursus, mi ac rutrum ultrices,
                      lectus erat pellentesque urna, at placerat eros nisi vitae ligula.</p>
                    <ul class="custom-list-style">
                      <li>
                        <i class="material-icons">check_circle</i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                      <li>
                        <i class="material-icons">check_circle</i>Aliquam tincidunt mauris eu risus.</li>
                      <li>
                        <i class="material-icons">check_circle</i>Vestibulum auctor dapibus neque.</li>
                      <li>
                        <i class="material-icons">check_circle</i>Sagittis tempus lacus enim ac dui.</li>
                    </ul>
                    <p>Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. </p>
                    <blockquote class="custom-quote">
                      <p>
                        <i class="material-icons">format_quote</i>Leverage expanding community ownership cross-agency coordination global network enable impact. Women's rights; prosperity tackling, fundraising campaign indicator. Hack worldwide frontline committed empowerment
                        focus on impact global health replicable generosity.</strong>
                      </p>
                      <p> Advancement, empower dialogue humanitarian; resourceful, clean water promising development legitimize.</p>
                      <p class="source">
                        <span class="name">Albert Epstein</span>
                        <br>
                        <span class="title">
                          <a href="http://sethgodin.typepad.com/seths_blog/2007/09/big-ideas.html" target="_blank">
                            <i class="fa fa-external-link"></i> Lorem Ipsum</a>
                        </span>
                      </p>
                    </blockquote>
                    <h3 class="section-heading">Section Heading</h3>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                      mi vitae est. Mauris placerat eleifend leo.</p>
                    <ol>
                      <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                      <li>Aliquam tincidunt mauris eu risus.</li>
                      <li>Vestibulum auctor dapibus neque.</li>
                    </ol>
                    <p>Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue.</p>
                    <p class="video-container">
                      <iframe src="//player.vimeo.com/video/50134267?color=ffffff&amp;wmode=transparent" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </p>
                    <p class="box">Quisque adipiscing tincidunt tellus a vehicula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque ornare lorem elit, a aliquet nisl auctor vitae.</p>
                    <h3 class="section-heading">Section Heading</h3>
                    <p>Phasellus ligula dolor, fringilla at tincidunt non, fringilla eu justo. Sed hendrerit mauris quis hendrerit mollis. Vivamus vitae ultrices quam. Duis sed mi leo. Curabitur facilisis, erat vel egestas tincidunt, nisi ipsum ultricies
                      velit, non scelerisque magna mi non nibh.</p>
                    <ul>
                      <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
                      <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
                      <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
                    </ul>
                    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>
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