@extends('layout.master')

@section('content')
<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row ">
            <div class="shopping-cart">
                <div class="shopping-cart-table ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-romove item">Xóa</th>
                                    <th class="cart-description item">Hình ảnh</th>
                                    <th class="cart-product-name item">Sản phẩm
                                    <th class="cart-qty item">Số lượng</th>
                                    <th class="cart-sub-total item">Giá tiền</th>
                                    <th class="cart-total last-item">Tổng số</th>
                                </tr>
                            </thead><!-- /thead -->

                            <tbody>
                                @php
                                    $tong = 0;
                                @endphp
                                @foreach($cart as $item)
                                <tr>
                                    <td class="romove-item"><a href="{{route('removefromcart')}}/{{$item->ID_Product}}" title="cancel" class="icon"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></a></td>
                                    <td class="cart-image">
                                        <a class="entry-thumbnail" href="detail.html">
                                            <img src="{{url('images/thumbs/'.$item->sDuongDan1)}}" alt="">
                                        </a>
                                    </td>
                                    <td class="cart-product-name-info">
                                        <h4 class='cart-product-description'><a href="{{route('item-detail')}}/{{$item->ID_Product}}">{{$item->sTenSanPham}}</a></h4>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="reviews">
                                                    Lượt xem ({{$item->iLuotXem}})
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </td>
                                    <td class="cart-product-quantity">
                                        <div class="quant-input">
                                            <div class="arrows">
                                                <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                            </div>
                                            <input type="text" value="{{$item->iSoLuong}}">
                                        </div>
                                    </td>
                                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{number_format($item->fGiaBan, 0, ',', '.')}} VNĐ</span></td>
                                    <td class="cart-product-grand-total"><span class="cart-grand-total-price">
                                            @php
                                            $thanhtien=$item->fGiaBan * $item->iSoLuong;
                                            $tong+=$thanhtien;
                                            @endphp
                                            {{number_format($thanhtien, 0, ',', '.')}} VNĐ
                                        </span></td>
                                </tr>
                                @endforeach
                            </tbody><!-- /tbody -->

                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="shopping-cart-btn">
                                            <span class="">
                                                <a href="#" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                                                <a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>
                                            </span>
                                        </div><!-- /.shopping-cart-btn -->
                                    </td>
                                </tr>
                            </tfoot>
                        </table><!-- /table -->
                    </div>
                </div><!-- /.shopping-cart-table -->
                <div class="col-md-4 col-sm-12 estimate-ship-tax">
                </div><!-- /.estimate-ship-tax -->

                <div class="col-md-4 col-sm-12 estimate-ship-tax">
                </div><!-- /.estimate-ship-tax -->

                <div class="col-md-4 col-sm-12 cart-shopping-total">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="cart-grand-total">
                                        Tổng tiền<span class="inner-left-md">{{number_format($tong, 0, ',', '.')}} VNĐ</span>
                                    </div>
                                </th>
                            </tr>
                        </thead><!-- /thead -->
                        <tbody>
                            <tr>
                                <td>
                                    <div class="cart-checkout-btn pull-right">
                                        <button type="submit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button>
                                        <span class="">Checkout with multiples address!</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody><!-- /tbody -->
                    </table><!-- /table -->
                </div><!-- /.cart-shopping-total -->
            </div><!-- /.shopping-cart -->
        </div> <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp">

            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand1.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item m-t-10">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand2.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand3.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand4.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand5.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand6.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand2.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand4.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand1.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand5.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->
                </div><!-- /.owl-carousel #logo-slider -->
            </div><!-- /.logo-slider-inner -->

        </div><!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
</div>
@stop