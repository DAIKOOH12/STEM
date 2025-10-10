@extends('layout.admin_master')

@section('content')
<!-- Basic Layout & Basic with Icons -->
<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            @if(session('success')!=null)
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Thêm nhân viên</h5>
            </div>
            <div class="card-body">
                <form action="{{route('addemployee')}}" method="POST">
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="employee-name">Tên nhân viên</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="employee-name" id="employee-name" placeholder="Họ tên..." />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="employee-address">Địa chỉ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="employee-address" id="employee-address" placeholder="Địa chỉ..." />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="employee-email">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="employee-email" id="employee-email" placeholder="Email..." />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="employee-phone">Số điện thoại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="employee-phone" id="employee-phone" placeholder="Số điện thoại..." />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="employee-role">Chức vụ</label>
                        <div class="col-sm-10">
                            <select class="form-control form-control-lg" id="employee-role" name="employee-role">
                                @foreach($quyen as $q)
                                <option value="{{$q->ID_quyen}}">{{$q->sTenQuyen}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="employee-account">Tài khoản</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="employee-account" id="employee-account" placeholder="Tài khoản..." />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="employee-password">Mật khẩu</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="employee-password" id="employee-password" placeholder="Mật khẩu..." />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection