<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-left-40">
    <aside class="sidebar shop-sidebar">

        <!-- Search Form -->
        <div class="sidebar-widget search-box itm-mgn-top-40">

            <form method="GET" action="/shopsearch/">
                <div class="form-group">
                    <input type="search" name="s" value="{{ Request::query('s') }}" placeholder="Chercher un produit">
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
            <?php $categories = Helper::get_categoriesshop(); ?>
            <ul class="list">
              <?php
                if( $categories ) {
                  foreach( $categories as $category ) {
                    ?>
                  <li><a href="/shopcategory/{{$category->id}}">{{$category->category_name}}</a></li>
                  <?php
                }
              }
            ?>
            </ul>

        </div>


        <!-- Price Filters -->
        <div class="sidebar-widget price-filters rangeslider-widget wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="sidebar-title">
                <h3>Filtre de prix</h3>
            </div>

            <div class="outer-box">
                <form methode="GET" action="/shopfilter/">
                  <div class="range-slider-price" id="range-slider-price"></div>
                  <div class="form-group clearfix">
                      <div class="pull-right">
                          <span class="left-val">$<input type="text" class="val-box text-left" id="min-value-rangeslider" name="min"></span> - <span class="right-val">$<input type="text" class="val-box text-right" id="max-value-rangeslider" name="max"></span>
                      </div>
                      <div class="pull-left">
                          <button type="submit" class="theme-btn btn-style-one">Filtre</button>
                      </div>
                  </div>
                </form>
            </div>

        </div>

    </aside>


</div>
