@extends('layout.master')

@section('content')

<div class="body-content outer-top-xs">
    <div class="container">
        @if (session('error'))
        <div class="alert alert-danger" role="alert" style="margin-top: 20px;">
            {{ session('error') }}
            <button class="btn close" type="button"><a href="{{ route('clear-error-session') }}" class="btn btn-sm btn-light ms-3" style="float:right;"><i class="fa-solid fa-x"></i></a></button>
        </div>
        @endif
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
                                            $thanhtien=$thanhtien - ($thanhtien * $item->sale_off);
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
                                            </span>
                                        </div><!-- /.shopping-cart-btn -->
                                    </td>
                                </tr>
                            </tfoot>
                        </table><!-- /table -->
                    </div>
                </div><!-- /.shopping-cart-table -->
                <div class="col-md-4 col-sm-12 estimate-ship-tax">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" colspan="4">Thông tin khách hàng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{$cusInfo->sHoTen}} ({{$cusInfo->sSoDienThoai}})</th>
                                <td colspan="2">{{$cusInfo->sDiaChi}}</td>
                                <td colspan="2">HẠNG:
                                    @php
                                    $disRanking=0;
                                    @endphp
                                    @if ($rank=="hat")
                                    {{ 'HẠT' }}
                                    @endif
                                    @if ($rank=="mam")
                                    {{ 'MẦM' }}
                                    @php
                                    $disRanking=0.01;
                                    @endphp
                                    @endif
                                    @if ($rank=="choi")
                                    {{ 'CHỒI' }}
                                    @php
                                    $disRanking=0.02;
                                    @endphp
                                    @endif
                                    @if ($rank=="la")
                                    {{ 'LÁ' }}
                                    @php
                                    $disRanking=0.05;
                                    @endphp
                                    @endif
                                    @if ($rank=="hoa")
                                    {{ 'HOA' }}
                                    @php
                                    $disRanking=0.1;
                                    @endphp
                                    @endif
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.estimate-ship-tax -->

                <div class="col-md-4 col-sm-12 estimate-ship-tax">
                </div><!-- /.estimate-ship-tax -->

                <div class="col-md-4 col-sm-12 cart-shopping-total">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="cart-grand-total" style="color:black">
                                        <span class="inner-right-md">Tổng tiền</span><span class="inner-left-md" style="color: #84b943;">{{number_format($tong, 0, ',', '.')}} VNĐ</span>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div class="cart-grand-total" style="color:black">
                                        <span class="inner-right-md">Hạng ({{ $disRanking*100 }}%)</span><span class="inner-left-md" style="color: red;">{{number_format($tong*$disRanking, 0, ',', '.')}} VNĐ</span>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div class="cart-grand-total" style="color:black">
                                        <span class="inner-right-md">Giảm giá (Sau 18h)</span><span class="inner-left-md" style="color: red;">{{number_format($tong*$discount, 0, ',', '.')}} VNĐ</span>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div class="cart-grand-total" style="color:black">
                                        <span class="inner-right-md">Thành tiền</span><span class="inner-left-md" style="color: #84b943;">{{number_format($tong-$tong*$discount-$tong*$disRanking, 0, ',', '.')}} VNĐ</span>
                                    </div>
                                </th>
                            </tr>
                        </thead><!-- /thead -->
                        <tbody>
                            <tr>
                                <td>
                                    <div class="cart-checkout-btn pull-right">
                                        <form action="{{route('payment')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="tenkh" value="{{$cusInfo->sHoTen}}">
                                            <input type="hidden" name="tongtien" value="{{$tong-$tong*$discount}}">
                                            <button type="submit" name="redirect" class="btn btn-primary checkout-btn">Thanh toán</button>
                                        </form>
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