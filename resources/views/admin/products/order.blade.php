@extends('layout.admin_master')

@section('content')
<div class="card" style="padding:10px">
    <h5 class="card-header">Danh sách đặt hàng theo yêu cầu</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="order-table">
            <thead>
                <tr>
                    <th>Tên khách hàng</th>
                    <th>Số lượng</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Số điện thoại</th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($orders as $or)
                <tr>
                    <td class="text-collapse name" data-able="{{$or->ID_cus_order}}">{{$or->sHoTen}}</td>
                    <td class="text-collapse">{{$or->iSoLuong}}</td>
                    <td class="text-collapse">{{$or->sMoTa}}</td>
                    <td class="text-collapse" id='trangthai'>{{$or->sTrangThai==="cho"?"Chờ":"Đã xử lý"}}</td>
                    <td class="text-collapse">{{$or->sSoDienThoai}}</td>
                    <td>
                        <button class="btn btn-success confirm-order"><i class="fa-solid fa-square-check" style="color: #fff;"></i></button>
                        <button class="btn btn-danger del-order"><i class="fa-solid fa-trash" style="color: #fff;"></i></button>
                        <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section(section: 'script')
<script src="{{url('js/admin/list-orders.js')}}"></script>
@endsection