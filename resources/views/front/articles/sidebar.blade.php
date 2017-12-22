<!--Sidebar-->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-left-40">
    <aside class="sidebar">

        <!-- Search Form -->
        <div class="sidebar-widget search-box">

            <form method="post" action="blog.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search Here">
                    <button type="submit"><span class="icon fa fa-search"></span>
                    </button>
                </div>
            </form>

        </div>


        <!-- Recent Articles -->
        <div class="sidebar-widget recent-articles wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="sidebar-title">
                <h3>Categories</h3>
            </div>

            <ul class="list">
                <li><a href="#">cooling kit</a>
                </li>
                <li><a href="#">Engine kit</a>
                </li>
                <li><a href="#">car Engine</a>
                </li>
                <li><a href="#">single parts</a>
                </li>
                <li><a href="#">break Kit</a>
                </li>
            </ul>

        </div>

        @if( $recentPosts->count() )
        <!-- Popular Posts -->
        <div class="sidebar-widget popular-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="sidebar-title">
                <h3>Recent Posts</h3>
            </div>
            @foreach( $recentPosts as $post )
              <article class="post">
                  <figure class="post-thumb">
                      <a href="#"><img src="{{asset('images/resource/post-thumb-4.jpg')}}" alt="">
                      </a>
                  </figure>
                  <h4><a href="/article/{{ $post->post_slug }}">
                    @if ( strlen( $post->post_content ) > 50 )
                      {{ substr( $post->post_content, 0, 50 ) }} ...
                    @else
                      {{ $post->post_content }}
                    @endif
                  </a></h4>
                  <div class="post-info"> {{ date('j M, Y', strtotime( $post->created_at )) }}</div>
              </article>
            @endforeach

        </div>
        @endif

        <!-- Popular Tags -->
        <div class="sidebar-widget popular-tags">
            <div class="sidebar-title">
                <h3>Tags</h3>
            </div>

            <a href="#">repair</a>
            <a href="#">Cleaning</a>
            <a href="#">checkup</a>
            <a href="#">modify</a>
            <a href="#">Service</a>
        </div>

    </aside>


</div>
<!--Sidebar-->
