@extends('blog.layouts.master')
@section('content')
        <!-- Blog list -->
        <div class="blog blog-category container">
          <h2 class="page-title text-center">Category: {{$name}}</h2>
          <div class="row">
            <div class="blog-list blog-list-list-style col-md-offset-1 col-md-10">
              @foreach($articles as $article)
              @if(!$article->category->count())
              <p>Nothing to show in this category yet</p>
              @else
              <article class="post">
                <div class="post-inner row">
                  <div class="col-md-4">
                    <figure class="post-thumb">
                      <a href="blog-single.html">
                        <img class="img-responsive" src="{{asset('images/blog/blog-post-6-sm.jpg')}}" alt="" /> </a>
                    </figure>
                    <!-- .post-thumb -->
                  </div>
                  <div class="content col-md-8">
                    <h3 class="post-title">
                      <a href="{{route('blog', $article->title)}}">{{$article->title}}</a>
                    </h3>
                    <div class="meta">
                      <ul class="meta-list list-inline">
                        <li class="post-time">10 September, 2017</li>
                        <li class="post-author"> by
                          <a href="#">Emma Lawrence</a>
                        </li>
                        <li class="post-comments-link">
                          <a href="blog-single.html#comment-area">
                            <i class="material-icons">chat_bubble</i>10</a>
                        </li>
                      </ul>
                      <!-- .meta-list -->
                    </div>
                    <!--meta -->
                    <div class="post-entry">
                      <p>Tackling, local solutions inspire social change care metrics challenges...</p>
                      <a class="read-more" href="blog-single.html">Read more
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>
                  <!-- .content -->
                </div>
                <!-- .post-inner -->
              </article>
              @endif
              @endforeach
              <!-- .post -->
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
                <a href="#">&raquo;</a>
              </li>
            </ul>
            <!-- .pagination -->
          </div>
          <!-- .pagination-container -->
        </div>
        <!-- .blog -->
@endsection