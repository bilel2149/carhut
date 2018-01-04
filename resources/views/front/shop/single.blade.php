@extends('front.layouts.app')

@section('content')

<!--Page Title-->
        <section class="page-title" style="background-image:url({{asset('images/background/page-title-1.jpg')}});">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title -->
                    <div class="title-column col-md-6 col-sm-12 col-xs-12">
                        <h1>{{ $product->name }}</h1>
                    </div>
                    <!--Bread Crumb -->
                    <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="">Accueil</a>
                            </li>
                            <li class="active">Boutique</li>
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

                        <!--Shop Single-->
                        <div class="shop-single">
                            <div class="auto-container">

                                <!--Product Details Section-->
                                <section class="product-details">
                                    <!--Basic Details-->
                                    <div class="basic-details">
                                        <div class="row clearfix">
                                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                                <figure class="image-box"><img src="{{asset('/uploads/products/')}}/{{ $product->product_thumbnail }}" alt="{{ $product->name }}">
                                                </figure>
                                            </div>
                                            <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                                <div class="details-header">
                                                    <h4>{{ $product->name }}</h4>
                                                    @if($product->promo > 0)
                                                    <div class="item-price"><span class="strike-through">${{ $product->price }}</span> ${{ $product->price - ($product->price * $product->promo / 100 ) }}</div>
                                                    @else
                                                    <div class="item-price">${{ $product->price }}</div>
                                                    @endif
                                                    <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> (3 Customer Reviews)</div>

                                                </div>

                                                <div class="text">
                                                    <p>{{ $product->detail }}</p>
                                                </div>

                                                <div class="other-options clearfix">
                                                    <div class="item-quantity">
                                                        <input class="quantity-spinner" type="text" value="2" name="quantity">
                                                    </div>
                                                    <button type="button" class="theme-btn btn-style-two add-to-cart">Add To Cart <span class="icon fa fa-long-arrow-right"></span>
                                                    </button>
                                                </div>

                                                <!--Item Meta-->
                                                <ul class="item-meta">
                                                    <li>Categories: <a href="#">Books</a> , <a href="#">Magazine</a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <!--Basic Details-->


                                    <!--Product Info Tabs-->
                                    <div class="product-info-tabs">

                                        <!--Product Tabs-->
                                        <div class="prod-tabs" id="product-tabs">

                                            <!--Tab Btns-->
                                            <div class="tab-btns clearfix">
                                                <a href="#prod-description" class="tab-btn active-btn">Description du produit</a>
                                                <a href="#prod-reviews" class="tab-btn">Avis (03)</a>
                                            </div>

                                            <!--Tabs Container-->
                                            <div class="tabs-container">

                                                <!--Tab / Active Tab-->
                                                <div class="tab active-tab" id="prod-description">
                                                    <h3>Description du produit</h3>
                                                    <div class="content">
                                                        <p>{{ $product->description }}</p>
                                                    </div>
                                                </div>

                                                <!--Tab-->
                                                <div class="tab" id="prod-reviews">
                                                    <h3>3 Reviews Found</h3>

                                                    <!--Reviews Container-->
                                                    <div class="reviews-container">

                                                        <!--Reviews-->
                                                        <article class="review-box clearfix">
                                                            <figure class="rev-thumb"><img src="{{asset('images/resource/author-thumb-1.jpg')}}" alt="">
                                                            </figure>
                                                            <div class="rev-content">
                                                                <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span>
                                                                </div>
                                                                <div class="rev-info">Admin – April 03, 2016: </div>
                                                                <div class="rev-text">
                                                                    <p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis</p>
                                                                </div>
                                                            </div>
                                                        </article>

                                                        <article class="review-box clearfix">
                                                            <figure class="rev-thumb"><img src="{{asset('images/resource/author-thumb-2.jpg')}}" alt="">
                                                            </figure>
                                                            <div class="rev-content">
                                                                <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span>
                                                                </div>
                                                                <div class="rev-info">Ahsan – April 01, 2016: </div>
                                                                <div class="rev-text">
                                                                    <p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis</p>
                                                                </div>
                                                            </div>
                                                        </article>

                                                        <article class="review-box clearfix">
                                                            <figure class="rev-thumb"><img src="{{asset('images/resource/author-thumb-3.jpg')}}" alt="">
                                                            </figure>
                                                            <div class="rev-content">
                                                                <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                                                                </div>
                                                                <div class="rev-info">Sara – March 31, 2016: </div>
                                                                <div class="rev-text">
                                                                    <p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis</p>
                                                                </div>
                                                            </div>
                                                        </article>

                                                    </div>

                                                    <!--Add Review-->
                                                    <div class="add-review">
                                                        <h3>Add a Review</h3>

                                                        <form method="post" action="shop-single.html">
                                                            <div class="row clearfix">
                                                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                                    <label>Name *</label>
                                                                    <input type="text" name="name" value="" placeholder="" required>
                                                                </div>
                                                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                                    <label>Email *</label>
                                                                    <input type="email" name="email" value="" placeholder="" required>
                                                                </div>
                                                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                                    <label>Website *</label>
                                                                    <input type="text" name="website" value="" placeholder="" required>
                                                                </div>
                                                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                                    <label>Rating </label>
                                                                    <div class="rating">
                                                                        <a href="#" class="rate-box" title="1 Out of 5"><span class="fa fa-star"></span></a>
                                                                        <a href="#" class="rate-box" title="2 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                                        <a href="#" class="rate-box" title="3 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"> </span> <span class="fa fa-star"></span></a>
                                                                        <a href="#" class="rate-box" title="4 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                                        <a href="#" class="rate-box" title="5 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                                    <label>Your Review</label>
                                                                    <textarea name="review-message"></textarea>
                                                                </div>
                                                                <div class="form-group text-right col-md-12 col-sm-12 col-xs-12">
                                                                    <button type="button" class="theme-btn btn-style-one">Add Review</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <!--Related Products-->
                                    @include('front.shop.related')

                                </section>

                            </div>
                        </div>


                    </div>
                    <!--Content Side-->

                    <!--Sidebar-->
                    @include('front.shop.sidebar')
                    <!--Sidebar-->



                </div>
            </div>
        </div>

@endsection
