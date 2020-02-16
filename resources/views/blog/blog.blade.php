@extends('blog.layouts.master')
@section('content')
        <!-- .header -->
        <div class="blog">
          <!-- Begin Featured posts slider -->
          <section class="featured-blog-posts">
            <!-- Flickity HTML init. For more info please refer to Flickity Documentation: http://flickity.metafizzy.co -->
            <div class="carousel flickity--dots-inner" data-flickity>
              <div class="carousel-cell bg-img bg-overlay" style="background-image: url(images/backgrounds/background-3.jpg);">
                <a href="blog-single.html">
                  <div class="container">
                    <div class="carousel-caption">
                      <h2>Technology for Good</h2>
                      <p>We're here promoting Tech For Good jobs and being a general go-to place for all Tech For Good news</p>
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
                <!-- #post-## -->
                @foreach($articles as $article)
                <article class="post hentry col-md-4 col-sm-6">
                  <div class="post-inner">
                    <figure class="post-thumb">
                      <a href="/blog/{{$article->title}}">
                        <img class="img-responsive" src="images/blog/blog-post-3-sm.jpg" alt="" /> </a>
                    </figure>
                    <!-- .post-thumb -->
                    <div class="content">
                      <h3 class="post-title">
                        <a href="/blog/{{$article->title}}">{{$article->title}}</a>
                      </h3>
                      <ul class="meta-list list-inline">
                        <li class="post-time post_date date updated">{{$article->created_at}}</li>
                        <!-- <li class="post-author"> by
                          <a href="#">Andy Gabriel</a>
                        </li> -->
                        <li class="post-comments-link">
                          <a href="blog-single.html#comment-area">
                            <i class="material-icons">chat_bubble</i>8</a>
                        </li>
                      </ul>
                      <!-- .meta-list -->
                      <div class="post-entry">
                        <p>{!! substr($article->description, 0, 50) !!}</p>
                        <a class="read-more" href="/blog/{{$article->title}}">Read more
                          <i class="material-icons">chevron_right</i>
                        </a>
                      </div>
                    </div>
                    <!-- .content -->
                  </div>
                  <!-- .post-inner -->
                </article>
                <!-- #post-## -->
                @endforeach
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
@endsection