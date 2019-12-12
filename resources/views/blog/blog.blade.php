@extends('blog.layouts.master')
@section('content')
        <div class="blog">
          <!-- Begin Featured posts slider -->
          <section class="featured-blog-posts">
            <!-- Flickity HTML init. For more info please refer to Flickity Documentation: http://flickity.metafizzy.co -->
            <div class="carousel flickity--dots-inner" data-flickity>
              <div class="carousel-cell bg-img bg-overlay" style="background-image: url(images/backgrounds/background-3.jpg);">
                <a href="blog-single.html">
                  <div class="container">
                    <div class="carousel-caption">
                      <h2>Powerful design prototyping tools</h2>
                      <p>Tackling, local solutions inspire social change care metrics challenges...</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="carousel-cell bg-img bg-overlay" style="background-image: url(images/backgrounds/background-4.jpg);">
                <a href="blog-single.html">
                  <div class="container">
                    <div class="carousel-caption">
                      <h2>Digital agency rebels</h2>
                      <p>Tackling, local solutions inspire social change care metrics challenges...</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </section>
          <!-- End featured posts slider -->
          <!-- BLOG LIST -->
          <div class="container">
            <div class="row">
              <div id="blog-masonry" class="blog-list blog-list-card-style">
                <article class="post hentry col-md-4 col-sm-6">
                  <div class="post-inner">
                    <figure class="post-thumb">
                      <a href="blog-single.html">
                        <img class="img-responsive" src="images/blog/blog-post-1-sm.jpg" alt="" /> </a>
                    </figure>
                    <!-- .post-thumb -->
                    <div class="content">
                      <h3 class="post-title">
                        <a href="{{route('blog')}}">It's an art backed by science</a>
                      </h3>
                      <ul class="meta-list list-inline">
                        <li class="post-time post_date date updated">2017-08-24</li>
                        <li class="post-author"> by
                          <a href="#">Emma Lawrence</a>
                        </li>
                        <li class="post-comments-link">
                          <a href="blog-single.html#comment-area">
                            <i class="material-icons">chat_bubble</i>8</a>
                        </li>
                      </ul>
                      <!-- .meta-list -->
                      <div class="post-entry">
                        <p>Tackling, local solutions inspire social change care metrics challenges...</p>
                        <a class="read-more" href="{{route('blog')}}">Read more
                          <i class="material-icons">chevron_right</i>
                        </a>
                      </div>
                    </div>
                    <!-- .content -->
                  </div>
                  <!-- .post-inner -->
                </article>
                <!-- #post-## -->
                <article class="post hentry col-md-4 col-sm-6">
                  <div class="post-inner">
                    <figure class="post-thumb">
                      <a href="blog-single.html">
                        <img class="img-responsive" src="images/blog/blog-post-2-sm.jpg" alt="" /> </a>
                    </figure>
                    <!-- .post-thumb -->
                    <div class="content">
                      <h3 class="post-title">
                        <a href="blog-single.html">You set the goal, we get the results</a>
                      </h3>
                      <ul class="meta-list list-inline">
                        <li class="post-time post_date date updated">2017-08-24</li>
                        <li class="post-author"> by
                          <a href="#">Emma Lawrence</a>
                        </li>
                        <li class="post-comments-link">
                          <a href="blog-single.html#comment-area">
                            <i class="material-icons">chat_bubble</i>8</a>
                        </li>
                      </ul>
                      <!-- .meta-list -->
                      <div class="post-entry">
                        <p>Carbon emissions reductions prosperity voice, Nelson Mandela United Nations Global South donate growth...</p>
                        <a class="read-more" href="{{route('blog')}}">Read more
                          <i class="material-icons">chevron_right</i>
                        </a>
                      </div>
                    </div>
                    <!-- .content -->
                  </div>
                  <!-- .post-inner -->
                </article>
                <!-- #post-## -->
                <article class="post hentry col-md-4 col-sm-6">
                  <div class="post-inner">
                    <figure class="post-thumb">
                      <a href="blog-single.html">
                        <img class="img-responsive" src="{{route('blog')}}" alt="" /> </a>
                    </figure>
                    <!-- .post-thumb -->
                    <div class="content">
                      <h3 class="post-title">
                        <a href="blog-single.html">Digital agency rebels</a>
                      </h3>
                      <ul class="meta-list list-inline">
                        <li class="post-time post_date date updated">2017-04-21</li>
                        <li class="post-author"> by
                          <a href="#">Andy Gabriel</a>
                        </li>
                        <li class="post-comments-link">
                          <a href="blog-single.html#comment-area">
                            <i class="material-icons">chat_bubble</i>8</a>
                        </li>
                      </ul>
                      <!-- .meta-list -->
                      <div class="post-entry">
                        <p>Aenean interdum ligula sed sollicitudin scelerisque. Morbi sed purus erat...</p>
                        <a class="read-more" href="blog-single.html">Read more
                          <i class="material-icons">chevron_right</i>
                        </a>
                      </div>
                    </div>
                    <!-- .content -->
                  </div>
                  <!-- .post-inner -->
                </article>
                <!-- #post-## -->
                <article class="post hentry col-md-4 col-sm-6">
                  <div class="post-inner">
                    <figure class="post-thumb">
                      <a href="blog-single.html">
                        <img class="img-responsive" src="images/blog/blog-post-4-sm.jpg" alt="" /> </a>
                    </figure>
                    <!-- .post-thumb -->
                    <div class="content">
                      <h3 class="post-title">
                        <a href="blog-single.html">Proin lobortis mattis erat</a>
                      </h3>
                      <ul class="meta-list list-inline">
                        <li class="post-time post_date date updated">2017-08-17</li>
                        <li class="post-author"> by
                          <a href="#">Emma Lawrence</a>
                        </li>
                        <li class="post-comments-link">
                          <a href="blog-single.html#comment-area">
                            <i class="material-icons">chat_bubble</i>8</a>
                        </li>
                      </ul>
                      <!-- .meta-list -->
                      <div class="post-entry">
                        <p>Benefit cooperation conflict resolution invest; recognize potential disrupt, nascetur ridiculus...</p>
                        <a class="read-more" href="blog-single.html">Read more
                          <i class="material-icons">chevron_right</i>
                        </a>
                      </div>
                    </div>
                    <!-- .content -->
                  </div>
                  <!-- .post-inner -->
                </article>
                <!-- #post-## -->
                <article class="post hentry col-md-4 col-sm-6">
                  <div class="post-inner">
                    <figure class="post-thumb">
                      <a href="blog-single.html">
                        <img class="img-responsive" src="images/blog/blog-post-5-sm.jpg" alt="" /> </a>
                    </figure>
                    <!-- .post-thumb -->
                    <div class="content">
                      <h3 class="post-title">
                        <a href="blog-single.html">Jane Jacobs community theory</a>
                      </h3>
                      <ul class="meta-list list-inline">
                        <li class="post-time post_date date updated">2017-05-03</li>
                        <li class="post-author"> by
                          <a href="#">Emma Lawrence</a>
                        </li>
                        <li class="post-comments-link">
                          <a href="blog-single.html#comment-area">
                            <i class="material-icons">chat_bubble</i>8</a>
                        </li>
                      </ul>
                      <!-- .meta-list -->
                      <div class="post-entry">
                        <p>Proin lobortis mattis erat, dictum facilisis magna posuere ac. Curabitur consect et magnis dis...</p>
                        <a class="read-more" href="blog-single.html">Read more
                          <i class="material-icons">chevron_right</i>
                        </a>
                      </div>
                    </div>
                    <!-- .content -->
                  </div>
                  <!-- .post-inner -->
                </article>
                <!-- #post-## -->
                <article class="post hentry col-md-4 col-sm-6">
                  <div class="post-inner">
                    <figure class="post-thumb">
                      <a href="blog-single.html">
                        <img class="img-responsive" src="images/blog/blog-post-6-sm.jpg" alt="" /> </a>
                    </figure>
                    <!-- .post-thumb -->
                    <div class="content">
                      <h3 class="post-title">
                        <a href="blog-single.html">Mauris quis tellus magna</a>
                      </h3>
                      <ul class="meta-list list-inline">
                        <li class="post-time post_date date updated">2017-05-03</li>
                        <li class="post-author"> by
                          <a href="#">Emma Lawrence</a>
                        </li>
                        <li class="post-comments-link">
                          <a href="blog-single.html#comment-area">
                            <i class="material-icons">chat_bubble</i>8</a>
                        </li>
                      </ul>
                      <!-- .meta-list -->
                      <div class="post-entry">
                        <p>Cum sociis natoque penatibus et parturient montes. Jane Jacobs community theory of social change economic development...</p>
                        <a class="read-more" href="blog-single.html">Read more
                          <i class="material-icons">chevron_right</i>
                        </a>
                      </div>
                    </div>
                    <!-- .content -->
                  </div>
                  <!-- .post-inner -->
                </article>
                <!-- #post-## -->
              </div>
              <!-- .blog-list -->
            </div>
            <!-- .row -->
            <div class="pagination-container text-center">
              <ul class="pagination">
                <li class="disabled">
                  <a href="#">&laquo;</a>
                </li>
                <li class="active">
                  <a href="#">1
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li>
                  <a href="#">2</a>
                </li>
                <li>
                  <a href="#">3</a>
                </li>
                <li>
                  <a href="#">4</a>
                </li>
                <li>
                  <a href="#">5</a>
                </li>
                <li>
                  <a href="#">&raquo;</a>
                </li>
              </ul>
              <!-- .pagination -->
            </div>
            <!-- .pagination-container -->
          </div>
        </div>
        <!-- .blog -->
        <!-- Video Modal  -->
        <div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
              </div>
              <div class="modal-body">
                <div class="video-container">
                  <iframe src="//player.vimeo.com/video/28872840?color=ffffff&amp;wmode=transparent" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <!-- .video-container -->
              </div>
              <!-- .modal-body -->
            </div>
            <!-- .modal-content -->
          </div>
          <!-- .modal-dialog -->
        </div>
        <!-- .modal -->
@endsection