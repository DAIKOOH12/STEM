@extends('layout.admin_master')

@section('style')
@endsection
@section('content')
<div class="card" style="padding:10px">
    <h5 class="card-header">Danh sách nhân viên</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="employee-table">
            <thead>
                <tr>
                    <th>Họ tên</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Chức vụ</th>
                    <th>Tài khoản</th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($emp as $item)
                <tr>
                    <td class="name" data-able="{{$item->ID_employee}}">{{$item->sHoTen}}</td>
                    <td class="address">{{$item->sDiaChi}}</td>
                    <td class="email">{{$item->sEmail}}</td>
                    <td class="phone">{{$item->sSdt}}</td>
                    <td class="role" data-able="{{$item->ID_quyen}}">{{$item->sTenQuyen}}</td>
                    <td class="account">{{$item->sTaiKhoan}}</td>
                    <td><button class="btn btn-info edit-employee"><i class="fa-solid fa-wrench" style="color: #fff;"></i></button>
                        <button class="btn btn-danger del-employee"><i class="fa-solid fa-trash" style="color: #fff;"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin</h5>
            </div>
            <div class="modal-body">
                <form id="form-update-employee">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tên nhân viên</label>
                        <input type="text" class="form-control" id="employee-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="employee-adrress">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Số điện thoại</label>
                        <input type="number" class="form-control" id="employee-phone">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="employee-email">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Chức vụ</label>
                        <select class="form-control form-control-lg" name="" id="employee-role">
                            @foreach($quyen as $q)
                            <option value="{{$q->ID_quyen}}">{{$q->sTenQuyen}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tài khoản</label>
                        <small>(*Không thể thay đổi)</small>
                        <input type="text" class="form-control firstSpan" id="employee-account" readonly="readonly" disabled>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="change-password">
                        <label class="form-check-label" for="change-password">
                            Đặt lại mật khẩu
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn-save">Cập nhật</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section(section: 'script')
<script src="{{url('js/admin/list-employee.js')}}"></script>
@endsection