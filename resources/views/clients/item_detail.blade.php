@extends('layout.master')
@section('sidebar')
<div class='col-xs-12 col-sm-12 col-md-3 sidebar'>

    <!-- ============================================== HOT DEALS ============================================== -->
    <div class="sidebar-widget hot-deals outer-bottom-xs">
        <h3 class="section-title">Hot deals</h3>
        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
            @foreach($hotDeal as $item)
            <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image">
                            <a href="{{route('item-detail')}}/{{$item->ID_Product}}">
                                <img src="{{url('images/thumbs/'.$item->sDuongDan1)}}" alt="">
                                <img src="{{url('images/thumbs/'.$item->sDuongDan2)}}" alt="" class="hover-image">
                            </a>
                        </div>
                        <div class="sale-offer-tag"><span>Hot<br>
                                Deal</span></div>
                    </div>
                    <!-- /.hot-deal-wrapper -->
                    <div class="product-info text-left m-t-20">
                        <h3 class="name"><a href="{{route('item-detail')}}/{{$item->ID_Product}}">{{$item->sTenSanPham}}</a></h3>
                        <div class="product-price"> <span class="price"> {{number_format($item->fGiaBan, 0, ',', '.')}} VNĐ</span> <span class="price-before-discount">{{number_format($item->fGiaNiemYet, 0, ',', '.')}}</span> </div>
                        <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                        <div class="action">
                            <div class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <a href="{{route('item-detail')}}/{{$item->ID_Product}}"><button class="btn btn-primary cart-btn" type="button">Xem thêm</button></a>
                            </div>
                        </div>
                        <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                </div>
            </div>
            @endforeach
        </div>
        <!-- /.sidebar-widget -->
    </div>
    <!-- ============================================== HOT DEALS: END ============================================== -->
</div>
@stop

@section('content')
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row single-product'>
            <div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
                <div class="detail-block">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">
                                <div id="owl-single-product">
                                    <div class="single-product-gallery-item" id="slide1">
                                        <a data-lightbox="image-1" data-title="Gallery" href="{{url('images/thumbs')}}/{{$product->sDuongDan2}}">
                                            <img class="img-responsive" alt="" src="{{url('images/thumbs')}}/{{$product->sDuongDan1}}" data-echo="{{url('images/thumbs/'.$product->sDuongDan1)}}" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                    <div class="single-product-gallery-item" id="slide2">
                                        <a data-lightbox="image-1" data-title="Gallery" href="{{url('images/thumbs')}}/{{$product->sDuongDan2}}">
                                            <img class="img-responsive" alt="" src="{{url('images/thumbs')}}/{{$product->sDuongDan2}}" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                    <div class="single-product-gallery-item" id="slide3">
                                        <a data-lightbox="image-1" data-title="Gallery" href="{{url('images/thumbs/').$product->sDuongDan3}}">
                                            <img class="img-responsive" alt="" src="{{url('images/thumbs')}}/{{$product->sDuongDan2}}"
                                                data-echo="{{url('images/thumbs/'.$product->sDuongDan3)}}" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                    <div class="single-product-gallery-item" id="slide4">
                                        <a data-lightbox="image-1" data-title="Gallery" href="{{url('images/thumbs/').$product->sDuongDan4}}">
                                            <img class="img-responsive" alt="" src="{{url('images/thumbs')}}/{{$product->sDuongDan2}}"
                                                data-echo="{{url('images/thumbs/'.$product->sDuongDan4)}}" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                    <div class="single-product-gallery-item" id="slide5">
                                        <a data-lightbox="image-1" data-title="Gallery" href="{{url('images/thumbs/').$product->sDuongDan5}}">
                                            <img class="img-responsive" alt="" src="{{url('images/thumbs')}}/{{$product->sDuongDan2}}"
                                                data-echo="{{url('images/thumbs/'.$product->sDuongDan5)}}" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                </div><!-- /.single-product-slider -->
                                <div class="single-product-gallery-thumbs gallery-thumbs">
                                    <div id="owl-single-product-thumbnails">
                                        <div class="item">
                                            <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1"
                                                href="#slide1">
                                                <img class="img-responsive" alt="" src="{{url('images/thumbs')}}/{{$product->sDuongDan1}}" />
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="2"
                                                href="#slide2">
                                                <img class="img-responsive" alt="" src="{{url('images/thumbs')}}/{{$product->sDuongDan2}}"
                                                    data-echo="{{url('images/thumbs/'.$product->sDuongDan2)}}" />
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="3"
                                                href="#slide3">
                                                <img class="img-responsive" alt=""
                                                    data-echo="{{url('images/thumbs/'.$product->sDuongDan3)}}" />
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="4"
                                                href="#slide4">
                                                <img class="img-responsive" alt=""
                                                    data-echo="{{url('images/thumbs/'.$product->sDuongDan4)}}" />
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="5"
                                                href="#slide4">
                                                <img class="img-responsive" alt=""
                                                    data-echo="{{url('images/thumbs/'.$product->sDuongDan5)}}" />
                                            </a>
                                        </div>
                                    </div><!-- /#owl-single-product-thumbnails -->
                                </div><!-- /.gallery-thumbs -->
                            </div><!-- /.single-product-gallery -->
                        </div><!-- /.gallery-holder -->
                        <div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
                            <div class="product-info">
                                <h1 class="name">{{$product->sTenSanPham}}</h1>
                                <div class="rating-reviews m-t-20">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="pull-left">
                                                <div class="reviews">
                                                    <a href="#" class="lnk"><i class="fa-solid fa-eye"></i> Lượt xem ({{$product->iLuotXem}})</a>
                                                    <a href="#" class="lnk"><i class="fa-solid fa-ticket"></i> Đã bán ({{$product->iLuotMua}})</a>
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
                                                    <span class="label" style="text-align: center;">Trạng thái: </span>
                                                </div>
                                            </div>
                                            <div class="pull-left">
                                                <div class="stock-box">
                                                    <span class="value" style="font-size: large;text-align: center">
                                                        <strong>{{$product->bIsActive?'Còn hàng':'Liên hệ'}}</strong>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.stock-container -->

                                <div class="description-container m-t-20">
                                    <p>{!! $product->sMoTa !!}</p>
                                </div><!-- /.description-container -->

                                <div class="price-container info-container m-t-30">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="price-box">
                                                <span class="price">{{number_format($product->fGiaBan, 0, ',', '.')}} VNĐ</span>
                                                <span class="price-strike">{{number_format($product->fGiaNiemYet, 0, ',', '.')}} VNĐ</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xs-6">
                                            <div class="favorite-button m-t-5">
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist"
                                                    href="#">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare"
                                                    href="#">
                                                    <i class="fa fa-signal"></i>
                                                </a>
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail"
                                                    href="#">
                                                    <i class="fa fa-envelope"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div><!-- /.row -->
                                </div><!-- /.price-container -->

                                <div class="quantity-container info-container">
                                    <div class="row">
                                        @if($product->iSoLuong > 0)
                                        <div class="qty">
                                            <span class="label">Số lượng :</span>
                                        </div>
                                        <div class="qty-count">
                                            <div class="cart-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                        <div class="arrow plus gradient"><span class="ir"><i
                                                                    class="icon fa fa-sort-asc"></i></span></div>
                                                        <div class="arrow minus gradient"><span class="ir"><i
                                                                    class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input type="text" value="1" id="quantity" name="quantity">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-btn">
                                            <button class="btn btn-primary" id="btn-add" data-able="{{$product->ID_Product}}"><i class="fa fa-shopping-cart inner-right-vs"></i> GIỎ HÀNG</button>
                                        </div>
                                        @else
                                        <div class="hold-btn">
                                            <button class="btn btn-primary" id="btn-hold"><i class="fa fa-shopping-cart inner-right-vs"></i> LIÊN HỆ</button>
                                        </div>
                                        @endif
                                    </div><!-- /.row -->
                                </div><!-- /.quantity-container -->
                            </div><!-- /.product-info -->
                        </div><!-- /.col-sm-7 -->
                    </div><!-- /.row -->
                </div>
                <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                <section class="section featured-product">
                    <div class="row">
                        <div class="col-lg-3">
                            <h3 class="section-title">Gợi ý</h3>
                            <div class="ad-imgs">
                                <img class="img-responsive" src="" alt="">
                                <img class="img-responsive" src="" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="owl-carousel homepage-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                                @foreach ($productCate as $item )
                                <div class="item item-carousel">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image">
                                                    <a href="{{route('item-detail')}}/{{$item->ID_Product}}"><img src="{{url('images/thumbs/'.$item->sDuongDan1)}}" alt=""></a>
                                                </div><!-- /.image -->

                                                <div class="tag sale"><span><i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i></span></div>
                                            </div><!-- /.product-image -->


                                            <div class="product-info text-left">
                                                <h3 class="name"><a href="{{route('item-detail')}}/{{$item->ID_Product}}">{{$item->sTenSanPham}}</a></h3>
                                                <div class="product-price">
                                                    <span class="price">
                                                        {{number_format($item->fGiaBan, 0, ',', '.')}} </span>
                                                    <span class="price-before-discount">{{number_format($item->fGiaNiemYet, 0, ',', '.')}}</span>

                                                </div><!-- /.product-price -->

                                            </div><!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group">
                                                            <a href="{{route('addtocart')}}/{{$item->ID_Product}}" data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                        </li>

                                                        <li class="lnk wishlist">
                                                            <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                <i class="icon fa fa-heart"></i>
                                                            </a>
                                                        </li>

                                                        <li class="lnk">
                                                            <a class="add-to-cart" href="detail.html" title="Compare">
                                                                <i class="fa fa-signal"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.action -->
                                            </div><!-- /.cart -->
                                        </div><!-- /.product -->
                                    </div><!-- /.products -->
                                </div><!-- /.item -->
                                @endforeach
                            </div><!-- /.home-owl-carousel -->
                        </div>
                    </div>
                </section><!-- /.section -->
                <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

            </div><!-- /.col -->
            <div class="clearfix"></div>
        </div><!-- /.row -->

    </div><!-- /.container -->
</div><!-- /.body-content -->
@stop

@section('script')
<script src="{{url('js/clients/item-detail.js')}}"></script>
@endsection