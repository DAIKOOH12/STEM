@extends('layout.master')
@section('sidebar')
<!-- ============================================== SIDEBAR ============================================== -->
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">

    <!-- ================================== TOP NAVIGATION ================================== -->
    <div class="side-menu animate-dropdown outer-bottom-xs">
        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
        <nav class="yamm megamenu-horizontal">
            <ul class="nav">
                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>ĐỒ CHƠI STEM</a>
                    <ul class="dropdown-menu mega-menu">
                        <li class="yamm-content">
                            <div class="row">
                                <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shoes </a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Sunglasses</a></li>
                                        <li><a href="#">Sport Wear</a></li>
                                        <li><a href="#">Blazers</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shorts</a></li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                        <li><a href="#">Handbags</a></li>
                                        <li><a href="#">Jwellery</a></li>
                                        <li><a href="#">Swimwear </a></li>
                                        <li><a href="#">Tops</a></li>
                                        <li><a href="#">Flats</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Winter Wear</a></li>
                                        <li><a href="#">Night Suits</a></li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                        <li><a href="#">Toys &amp; Games</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">School Bags</a></li>
                                        <li><a href="#">Lunch Box</a></li>
                                        <li><a href="#">Footwear</a></li>
                                        <li><a href="#">Wipes</a></li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                        <li><a href="#">Sandals </a></li>
                                        <li><a href="#">Shorts</a></li>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Jwellery</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Night Dress</a></li>
                                        <li><a href="#">Swim Wear</a></li>
                                        <li><a href="#">Toys</a></li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- /.yamm-content -->
                    </ul>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.menu-item -->
            </ul>
            <!-- /.nav -->
        </nav>
        <!-- /.megamenu-horizontal -->
    </div>
</div>
<!-- /.sidemenu-holder -->
<!-- ============================================== SIDEBAR : END ============================================== -->
@stop
@section('content')
<!-- ============================================== CONTENT ============================================== -->
<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
    <!-- ========================================== SECTION – HERO ========================================= -->

    <div id="hero">
        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url(images/225617-lego-education.jpg);">
            </div>
            <!-- /.item -->

            <div class="item" style="background-image: url(images/225617-lego-education.jpg);">
            </div>
            <!-- /.item -->

        </div>
        <!-- /.owl-carousel -->
    </div>

    <!-- ========================================= SECTION – HERO : END ========================================= -->


    <!-- ============================================== SCROLL TABS ============================================== -->
    <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
        <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">Đồ chơi STEM</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
                <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a></li>
                <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
                <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li>
            </ul>
            <!-- /.nav-tabs -->
        </div>
        <div class="tab-content outer-top-xs">
            <div class="tab-pane in active" id="all">
                <div class="product-slider">
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p1.jpg" alt="">
                                                <img src="images/products/p1_hover.jpg" alt="" class="hover-image">
                                            </a>
                                        </div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p4.jpg" alt="">
                                                <img src="images/products/p4_hover.jpg" alt="" class="hover-image">
                                            </a>
                                        </div>
                                        <!-- /.image -->


                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p3.jpg" alt="">
                                                <img src="images/products/p3_hover.jpg" alt="" class="hover-image">
                                            </a>
                                        </div>
                                        <!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p2.jpg" alt="">
                                                <img src="images/products/p2_hover.jpg" alt="" class="hover-image">
                                            </a>
                                        </div>
                                        <!-- /.image -->


                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p6.jpg" alt="">
                                                <img src="images/products/p6_hover.jpg" alt="" class="hover-image">
                                            </a>
                                        </div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p5.jpg" alt="">
                                                <img src="images/products/p5_hover.jpg" alt="" class="hover-image">
                                            </a>
                                        </div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="smartphone">
                <div class="product-slider">
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p7.jpg" alt="">
                                                <img src="images/products/p7_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p8.jpg" alt="">
                                                <img src="images/products/p8_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p9.jpg" alt="">
                                                <img src="images/products/p9_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p10.jpg" alt="">
                                                <img src="images/products/p10_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p11.jpg" alt="">
                                                <img src="images/products/p11_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p12.jpg" alt="">
                                                <img src="images/products/p12_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="laptop">
                <div class="product-slider">
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p15.jpg" alt="">
                                                <img src="images/products/p15_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p2.jpg" alt="">
                                                <img src="images/products/p2_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p8.jpg" alt="">
                                                <img src="images/products/p8_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="image">
                                        <a href="{{route('item-detail')}}">
                                            <img src="images/products/p14.jpg" alt="">
                                            <img src="images/products/p14_hover.jpg" alt="" class="hover-image">
                                        </a>

                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p12.jpg" alt="">
                                                <img src="images/products/p12_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p9.jpg" alt="">
                                                <img src="images/products/p9_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Apple Iphone 5s 32GB</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="apple">
                <div class="product-slider">
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p13.jpg" alt="">
                                                <img src="images/products/p13_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p11.jpg" alt="">
                                                <img src="images/products/p11_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p4.jpg" alt="">
                                                <img src="images/products/p4_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p1.jpg" alt="">
                                                <img src="images/products/p1_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p10.jpg" alt="">
                                                <img src="images/products/p10_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{route('item-detail')}}">
                                                <img src="images/products/p6.jpg" alt="">
                                                <img src="images/products/p6_hover.jpg" alt="" class="hover-image">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('item-detail')}}">Samsung Galaxy S4</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
            </div>
            <!-- /.tab-pane -->

        </div>
        <!-- /.tab-content -->
    </div>
    <!-- /.scroll-tabs -->
    <!-- ============================================== SCROLL TABS : END ============================================== -->
    <!-- ============================================== BLOG SLIDER ============================================== -->
    <section class="section latest-blog outer-bottom-vs">
        <h3 class="section-title">Tin tức</h3>
        <div class="blog-slider-container outer-top-xs">
            <div class="owl-carousel blog-slider custom-carousel">
                <div class="item">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image"> <a href="blog.html"><img src="images/blog-post/blog_big_01.jpg" alt=""></a> </div>
                        </div>
                        <!-- /.blog-post-image -->

                        <div class="blog-post-info text-left">
                            <h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>
                            <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                            <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        </div>
                        <!-- /.blog-post-info -->

                    </div>
                    <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <div class="item">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image"> <a href="blog.html"><img src="images/blog-post/blog_big_02.jpg" alt=""></a> </div>
                        </div>
                        <!-- /.blog-post-image -->

                        <div class="blog-post-info text-left">
                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                            <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        </div>
                        <!-- /.blog-post-info -->

                    </div>
                    <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <!-- /.item -->

                <div class="item">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image"> <a href="blog.html"><img src="images/blog-post/blog_big_03.jpg" alt=""></a> </div>
                        </div>
                        <!-- /.blog-post-image -->

                        <div class="blog-post-info text-left">
                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        </div>
                        <!-- /.blog-post-info -->

                    </div>
                    <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <div class="item">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image"> <a href="blog.html"><img src="images/blog-post/blog_big_01.jpg" alt=""></a> </div>
                        </div>
                        <!-- /.blog-post-image -->

                        <div class="blog-post-info text-left">
                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        </div>
                        <!-- /.blog-post-info -->

                    </div>
                    <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <div class="item">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image"> <a href="blog.html"><img src="images/blog-post/blog_big_02.jpg" alt=""></a> </div>
                        </div>
                        <!-- /.blog-post-image -->

                        <div class="blog-post-info text-left">
                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        </div>
                        <!-- /.blog-post-info -->

                    </div>
                    <!-- /.blog-post -->
                </div>
                <!-- /.item -->

            </div>
            <!-- /.owl-carousel -->
        </div>
        <!-- /.blog-slider-container -->
    </section>
    <!-- /.section -->
    <!-- ============================================== BLOG SLIDER : END ============================================== -->
</div>
<!-- /.homebanner-holder -->
<!-- ============================================== CONTENT : END ============================================== -->
</div>
<!-- /.row -->
<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider">
    <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
            <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="images/brands/brand1.png" src="images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="images/brands/brand2.png" src="images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="images/brands/brand3.png" src="images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="images/brands/brand4.png" src="images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="images/brands/brand5.png" src="images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="images/brands/brand6.png" src="images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="images/brands/brand2.png" src="images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="images/brands/brand4.png" src="images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="images/brands/brand1.png" src="images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="images/brands/brand5.png" src="images/blank.gif" alt=""> </a> </div>
            <!--/.item-->
        </div>
        <!-- /.owl-carousel #logo-slider -->
    </div>
    <!-- /.logo-slider-inner -->

</div>
<!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
@stop