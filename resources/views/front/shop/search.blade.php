@extends('front.layouts.app')

@section('content')

<!--Page Title-->
        <section class="page-title" style="background-image:url({{asset('images/background/page-title-1.jpg')}});">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title -->
                    <div class="title-column col-md-6 col-sm-12 col-xs-12">
                        <h1>Recherche : {{ $s }}</h1>
                    </div>
                    <!--Bread Crumb -->
                    <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="">Home</a>
                            </li>
                            <li class="active">Recherche</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <!--Sidebar Page / Shop Container-->
        <div class="sidebar-page-container shop-container sec-pdd-90">
            <div class="auto-container">
                <div class="row clearfix">


                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">

                        <section class="shop-section">

                            <!--Sort By-->
                            <div class="items-sorting">
                                <div class="row clearfix">
                                    <div class="results-column col-md-6 col-sm-6 col-xs-12">
                                        <h4> Showing 1–9 of 15 results</h4>
                                    </div>
                                    <div class="select-column pull-right col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <select name="sort-by">
                                                <option>Default Sorting</option>
                                                <option>By Order</option>
                                                <option>By Price</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Shop Items-->
                            <div class="shop-items">
                                <div class="row clearfix">
                                  @if( $products->count() )
                                    @foreach($products as $product)
                                    <!--Shop Item-->
                                    <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <!--Image Box-->
                                            <div class="image-box">
                                                <figure class="image">
                                                    <a href="/shop/{{ $product->slug }}"><img src="{{asset('/uploads/products/')}}/{{ $product->product_thumbnail }}" alt="{{ $product->name }}">
                                                    </a>
                                                </figure>
                                                <div class="item-options clearfix">
                                                    <a href="#" class="option-btn"><span class="fa fa-shopping-cart"></span><div class="tool-tip">Add to cart</div></a>
                                                    <a href="#" class="option-btn"><span class="fa fa-heart-o"></span><div class="tool-tip">Add to Fav</div></a>
                                                    <a href="/shop/{{ $product->slug }}" class="option-btn"><span class="fa fa-eye"></span><div class="tool-tip">Quick View</div></a>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <h3><a href="/shop/{{ $product->slug }}">{{ $product->name }}</a></h3>
                                                @if($product->promo > 0)
                                                <div class="price"><span class="strike-through">${{ $product->price }}</span> ${{ $product->price - ($product->price * $product->promo / 100 ) }}</div>
                                                @else
                                                <div class="price">${{ $product->price }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else

                                        <p>Aucun produit trouvé</p>

                                    @endif

                                </div>
                            </div>

                            <!-- Styled Pagination -->
                            <div class="styled-pagination text-center">
                                {{ $products->links() }}
                            </div>


                        </section>


                    </div>
                    <!--Content Side-->

                    <!--Sidebar-->
                    @include('front.shop.sidebar')
                    <!--Sidebar-->



                </div>
            </div>
        </div>

@endsection
