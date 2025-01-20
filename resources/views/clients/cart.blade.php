@extends('layout.master')

@section('content')
<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row ">
            @if(count($cart)>0)
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
                                    <td class="romove-item">
                                        <button title="cancel" class="icon btn-del btn btn-danger" data-able="{{$item->ID_Product}}"><i class="fa-solid fa-trash" style="color: #fff;"></i></button>
                                    </td>
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
                                                <div class="arrow plus gradient" data-able="{{$item->ID_Product}}"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                <div class="arrow minus gradient" data-able="{{$item->ID_Product}}"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                            </div>
                                            <input type="text" value="{{$item->iSoLuong}}" class="quantity">
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
                                                <a href="{{route('homepage')}}" class="btn btn-upper btn-primary outer-left-xs">Tiếp tục mua sắm</a>
                                                <button class="btn btn-upper btn-primary pull-right outer-right-xs">Cập nhật giỏ hàng</button>
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
                                        <button type="submit" class="btn btn-primary checkout-btn">Thanh toán</button>
                                        <span class="">Thanh toán nhanh chóng!</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody><!-- /tbody -->
                    </table><!-- /table -->
                </div><!-- /.cart-shopping-total -->
            </div><!-- /.shopping-cart -->
            @else
            <div class="shopping-cart text-center">
                <h1 class="text-center">Bạn chưa có sản phẩm nào!!!</h1>
                <a href="{{route('homepage')}}" class="btn btn-info">Mua ngay</a>
            </div>
            @endif
        </div> <!-- /.row -->
    </div><!-- /.container -->
</div>
@stop

@section('script')
<script src="{{url('js/clients/cart.js')}}"></script>
@endsection