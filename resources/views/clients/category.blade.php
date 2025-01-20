@extends('layout.master')
@section('sidebar')
<div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
    <!-- ================================== TOP NAVIGATION ================================== -->
    <div class="side-menu animate-dropdown outer-bottom-xs">
        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Danh Mục</div>
        <nav class="yamm megamenu-horizontal">
            <ul class="nav">
                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>ĐỒ CHƠI STEM</a>
                    <ul class="dropdown-menu mega-menu">
                        <li class="yamm-content">
                            <div class="row">
                                <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                        <li><a href="#">Dresses</a></li>
                                    </ul>
                                </div>
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
    <!-- /.side-menu -->
    <!-- ================================== TOP NAVIGATION : END ================================== -->
    <div class="sidebar-module-container">
        <div class="sidebar-filter">
            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <div class="sidebar-widget">
                <h3 class="section-title">Bộ lọc sản phẩm</h3>
                <form action="{{url()->current()}}">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Từ</label>
                        <input type="text" class="form-control" name="min_price" value="{{$min_price}}" id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Đến</label>
                        <input type="text" class="form-control" value="{{$max_price}}" name="max_price" id="formGroupExampleInput2" placeholder="Another input">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="is_available" type="checkbox" style="transform: scale(1.5);" value="" id="check1">
                        <label class="form-check-label" for="check1">
                            Còn hàng
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Lọc</button>
                </form>
            </div>
        </div>
        <!-- /.sidebar-filter -->
    </div>
    <!-- /.sidebar-module-container -->
</div>
@stop
@section('content')
@if($products->count()==0)
<h1 class='text-center'>Không tìm thấy sản phẩm nào</h1>
@else
<div class="col-xs-12 col-sm-12 col-md-9 rht-col">
    <!-- ========================================== SECTION – HERO ========================================= -->
    <div class="clearfix filters-container m-t-10">
        <div class="row">
            <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
                <div class="filter-tabs">
                    <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                        <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                        <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-bars"></i>List</a></li>
                    </ul>
                </div>
                <!-- /.filter-tabs -->
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-5 col-lg-5 hidden-sm">
                <div class="col col-sm-6 col-md-6 no-padding">
                    <div class="lbl-cnt"> <span class="lbl">Sắp xếp theo</span>
                        <div class="fld inline">
                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Sắp xếp <span class="caret"></span> </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li role="presentation"><a href="{{url()->current()}}?order=asc&min_price={{Request::get('min_price')}}&max_price={{Request::get('max_price')}}">Giá tăng dần</a></li>
                                    <li role="presentation"><a href="{{url()->current()}}?order=desc&min_price={{Request::get('min_price')}}&max_price={{Request::get('max_price')}}">Giá giảm dần</a></li>
                                    <li role="presentation"><a href="{{url()->current()}}?order=desc&sort=views">Lượt xem</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.fld -->
                    </div>
                    <!-- /.lbl-cnt -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <div class="search-result-container ">
        <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
                <div class="category-product">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="item">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="{{route('item-detail')}}/{{$product->ID_Product}}">
                                                    <img src="{{url('images/thumbs/'.$product->sDuongDan1)}}" alt="">
                                                    <img src="{{url('images/thumbs/'.$product->sDuongDan2)}}" alt="" class="hover-image">
                                                </a>
                                            </div>
                                            <!-- /.image -->

                                            <div class="tag new"><span>Mới</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="{{route('item-detail')}}/{{$product->ID_Product}}">{{$product->sTenSanPham}}</a></h3>
                                            <div class="product-price"> <span class="price"> {{number_format($product->fGiaBan, 0, ',', '.')}}VNĐ</span> <span class="price-before-discount">{{number_format($product->fGiaNiemYet, 0, ',', '.')}}VNĐ</span> </div>
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
                                                    <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}/{{$product->ID_Product}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                    <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}/{{$product->ID_Product}}" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
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
                        </div>
                        @endforeach
                        <!-- /.item -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.category-product -->

            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane " id="list-container">
                <div class="category-product">
                    @foreach($products as $product)
                    <div class="category-product-inner">
                        <div class="products">
                            <div class="product-list product">
                                <div class="row product-list-row">
                                    <div class="col col-sm-3 col-lg-3">
                                        <div class="product-image">
                                            <div class="image"> <img src="{{url('images/thumbs/'.$product->sDuongDan2)}}" alt=""> </div>
                                        </div>
                                        <!-- /.product-image -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col col-sm-9 col-lg-9">
                                        <div class="product-info">
                                            <h3 class="name"><a href="{{route('item-detail')}}/{{$product->ID_Product}}">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                            <!-- /.product-price -->
                                            <div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra.</div>
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group">
                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                        </li>
                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="{{route('item-detail')}}/{{$product->ID_Product}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                        <li class="lnk"> <a class="add-to-cart" href="{{route('item-detail')}}/{{$product->ID_Product}}" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                                    </ul>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->

                                        </div>
                                        <!-- /.product-info -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.product-list-row -->
                                <div class="tag new"><span>new</span></div>
                            </div>
                            <!-- /.product-list -->
                        </div>
                        <!-- /.products -->
                    </div>
                    @endforeach
                    <!-- /.category-product-inner -->
                </div>
                <!-- /.category-product -->
            </div>
            <!-- /.tab-pane #list-container -->
        </div>
        <!-- /.tab-content -->
        <div class="clearfix filters-container bottom-row">
            <div class="text-right">
                <div class="pagination-container">
                    <ul class="list-inline list-unstyled">
                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                    <!-- /.list-inline -->
                </div>
                <!-- /.pagination-container -->
            </div>
            <!-- /.text-right -->

        </div>
        <!-- /.filters-container -->

    </div>
    <!-- /.search-result-container -->

</div>
@endif
@stop