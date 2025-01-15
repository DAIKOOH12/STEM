@extends('layout.master')
@section('sidebar')
<div class='col-xs-12 col-sm-12 col-md-3 sidebar'>

    <!-- ============================================== HOT DEALS ============================================== -->
    <div class="sidebar-widget hot-deals outer-bottom-xs">
        <h3 class="section-title">Hot deals</h3>
        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
            <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image">
                            <a href="#">
                                <img src="images/hot-deals/p13.jpg" alt="">
                                <img src="images/hot-deals/p13_hover.jpg" alt="" class="hover-image">
                            </a>
                        </div>
                        <div class="sale-offer-tag"><span>49%<br>
                                off</span></div>
                        <div class="timing-wrapper">
                            <div class="box-wrapper">
                                <div class="date box"> <span class="key">120</span> <span class="value">DAYS</span> </div>
                            </div>
                            <div class="box-wrapper">
                                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                            </div>
                            <div class="box-wrapper">
                                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                            </div>
                            <div class="box-wrapper">
                                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
                        <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                        <div class="action">
                            <div class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                            </div>
                        </div>
                        <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                </div>
            </div>
            <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image">
                            <a href="#">
                                <img src="images/hot-deals/p14.jpg" alt="">
                                <img src="images/hot-deals/p14_hover.jpg" alt="" class="hover-image">
                            </a>
                        </div>
                        <div class="sale-offer-tag"><span>35%<br>
                                off</span></div>
                        <div class="timing-wrapper">
                            <div class="box-wrapper">
                                <div class="date box"> <span class="key">120</span> <span class="value">Days</span> </div>
                            </div>
                            <div class="box-wrapper">
                                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                            </div>
                            <div class="box-wrapper">
                                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                            </div>
                            <div class="box-wrapper">
                                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
                        <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                        <div class="action">
                            <div class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                            </div>
                        </div>
                        <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                </div>
            </div>
            <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image">
                            <a href="#">
                                <img src="images/hot-deals/p15.jpg" alt="">
                                <img src="images/hot-deals/p15_hover.jpg" alt="" class="hover-image">
                            </a>
                        </div>
                        <div class="sale-offer-tag"><span>35%<br>
                                off</span></div>
                        <div class="timing-wrapper">
                            <div class="box-wrapper">
                                <div class="date box"> <span class="key">120</span> <span class="value">Days</span> </div>
                            </div>
                            <div class="box-wrapper">
                                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                            </div>
                            <div class="box-wrapper">
                                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                            </div>
                            <div class="box-wrapper">
                                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
                        <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                        <div class="action">
                            <div class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                            </div>
                        </div>
                        <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                </div>
            </div>
        </div>
        <!-- /.sidebar-widget -->
    </div>
    <!-- ============================================== HOT DEALS: END ============================================== -->
</div>
@stop

@section('content')
<div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
    <div class="detail-block">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="owl-single-product">
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-lightbox="image-1" data-title="Gallery" href="images/products/p1.jpg">
                                <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p1.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide2">
                            <a data-lightbox="image-1" data-title="Gallery" href="images/products/p2.jpg">
                                <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p2.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide3">
                            <a data-lightbox="image-1" data-title="Gallery" href="images/products/p3.jpg">
                                <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p3.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide4">
                            <a data-lightbox="image-1" data-title="Gallery" href="images/products/p4.jpg">
                                <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p4.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide5">
                            <a data-lightbox="image-1" data-title="Gallery" href="images/products/p5.jpg">
                                <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p5.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide6">
                            <a data-lightbox="image-1" data-title="Gallery" href="images/products/p6.jpg">
                                <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p6.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide7">
                            <a data-lightbox="image-1" data-title="Gallery" href="images/products/p7.jpg">
                                <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p7.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide8">
                            <a data-lightbox="image-1" data-title="Gallery" href="images/products/p8.jpg">
                                <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p8.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide9">
                            <a data-lightbox="image-1" data-title="Gallery" href="images/products/p9.jpg">
                                <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p9.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                    </div><!-- /.single-product-slider -->


                    <div class="single-product-gallery-thumbs gallery-thumbs">

                        <div id="owl-single-product-thumbnails">
                            <div class="item">
                                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                    <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p1.jpg" />
                                </a>
                            </div>

                            <div class="item">
                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                                    <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p2.jpg" />
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                                    <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p3.jpg" />
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
                                    <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p4.jpg" />
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="5" href="#slide5">
                                    <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p5.jpg" />
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="6" href="#slide6">
                                    <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p6.jpg" />
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="7" href="#slide7">
                                    <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p7.jpg" />
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="8" href="#slide8">
                                    <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p8.jpg" />
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="9" href="#slide9">
                                    <img class="img-responsive" alt="" src="images/blank.gif" data-echo="images/products/p9.jpg" />
                                </a>
                            </div>
                        </div><!-- /#owl-single-product-thumbnails -->



                    </div><!-- /.gallery-thumbs -->

                </div><!-- /.single-product-gallery -->
            </div><!-- /.gallery-holder -->
            <div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
                <div class="product-info">
                    <h1 class="name">Floral Print Buttoned</h1>

                    <div class="rating-reviews m-t-20">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pull-left">
                                    <div class="rating rateit-small"></div>
                                </div>
                                <div class="pull-left">
                                    <div class="reviews">
                                        <a href="#" class="lnk">(13 Reviews)</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.rating-reviews -->

                    <div class="stock-container info-container m-t-10">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pull-left">
                                    <div class="stock-box">
                                        <span class="label">Availability :</span>
                                    </div>
                                </div>
                                <div class="pull-left">
                                    <div class="stock-box">
                                        <span class="value">In Stock</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.stock-container -->

                    <div class="description-container m-t-20">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div><!-- /.description-container -->

                    <div class="price-container info-container m-t-30">
                        <div class="row">


                            <div class="col-sm-6 col-xs-6">
                                <div class="price-box">
                                    <span class="price">$800.00</span>
                                    <span class="price-strike">$900.00</span>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-6">
                                <div class="favorite-button m-t-5">
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                                        <i class="fa fa-signal"></i>
                                    </a>
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div>
                            </div>

                        </div><!-- /.row -->
                    </div><!-- /.price-container -->

                    <div class="quantity-container info-container">
                        <div class="row">

                            <div class="qty">
                                <span class="label">Qty :</span>
                            </div>

                            <div class="qty-count">
                                <div class="cart-quantity">
                                    <div class="quant-input">
                                        <div class="arrows">
                                            <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                            <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                        </div>
                                        <input type="text" value="1">
                                    </div>
                                </div>
                            </div>

                            <div class="add-btn">
                                <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
                            </div>


                        </div><!-- /.row -->
                    </div><!-- /.quantity-container -->






                </div><!-- /.product-info -->
            </div><!-- /.col-sm-7 -->
        </div><!-- /.row -->
    </div>
</div><!-- /.col -->
@stop