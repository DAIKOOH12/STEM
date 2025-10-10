@extends('layout.admin_master')

@section('content')
<div class="card" style="padding:10px">
    <h5 class="card-header">Danh sách hóa đơn</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="blog-table">
            <thead>
                <tr>
                    <th>Mã hóa đơn</th>
                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Địa chỉ</th>
                    <th>Thành tiền</th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($payments as $item)
                <tr>
                    <td class="text-collapse id_payment" data-able="{{$item->vnp_TxnRef}}">{{$item->vnp_TxnRef}}</td>
                    <td class="text-collapse id_cus" data-able="{{$item->ID_customer}}">{{$item->ID_customer}}</td>
                    <td class="text-collapse cus_name">{{$item->sHoTen}}</td>
                    <td class=" text-collapse address">{{$item->sDiaChi}}</td>
                    <td class=" text-collapse amount">{{$item->vnp_Amount}}</td>
                    <td>
                        <button class="btn btn-danger del-blog"><i class="fa-solid fa-trash" style="color: #fff;"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section(section: 'script')
<script src="{{url('js/admin/list-blog.js')}}"></script>
@endsection