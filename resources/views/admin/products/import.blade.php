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
                <h5 class="mb-0">Thêm sản phẩm</h5>
            </div>
            <div class="card-body">
                <form action="{{route('showaddform')}}" method="POST">
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="product-category">Danh mục</label>
                        <div class="col-sm-10">
                            <select class="form-control form-control-lg" id="product-category" name="product-category">
                                @foreach($category as $cate)
                                <option value="{{$cate->ID_category}}">{{$cate->sTenChuDe}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="import-file">Phiếu nhập kho</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="import-file" id="import-file" placeholder="" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="button" class="btn btn-primary" id="import-btn">Thêm mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section(section: 'script')
<script src="{{url('js/admin/import-products.js')}}"></script>
@endsection