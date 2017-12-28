<!--Sidebar-->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-left-40">
    <aside class="sidebar">

        <!-- Search Form -->
        <div class="sidebar-widget search-box">

            <form method="GET" action="/search/">
                <div class="form-group">
                    <input type="search" name="s" value="{{ Request::query('s') }}" placeholder="Chercher un article">
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
            <?php $categories = Helper::get_categories(); ?>
            <ul class="list">
              <?php
                if( $categories ) {
                  foreach( $categories as $category ) {
                    ?>
                  <li><a href="#">{{$category->category_name}}</a></li>
                  <?php
                }
              }
            ?>
            </ul>

        </div>

        @if( $recentPosts->count() )
        <!-- Popular Posts -->
        <div class="sidebar-widget popular-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="sidebar-title">
                <h3>Articles récents</h3>
            </div>
            @foreach( $recentPosts as $post )
              <article class="post">
                  <figure class="post-thumb">
                      <a href="/article/{{ $post->post_slug }}">
                        <img src="{{asset('/uploads/')}}/{{ $post->post_thumbnail }}" alt="{{ $post->post_title }}"/>
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
            <?php $tags = Helper::get_tags(); ?>
            <?php
              if( $tags ) {
                foreach ($post->tags as $postTag) {
                  ?>
                    <a href="#">{{ $postTag->name }}</a>
                  <?php
                }
              }
            ?>
        </div>

    </aside>


</div>
<!--Sidebar-->
