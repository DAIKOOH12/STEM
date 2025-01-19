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
                        <label class="col-sm-2 col-form-label" for="product-name">Tên sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product-name" id="product-name" placeholder="Tên sản phẩm..." />
                        </div>
                    </div>
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
                        <label class="col-sm-2 col-form-label" for="product-old-price">Giá niêm yết</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="product-old-price" name="product-old-price" placeholder="9999999" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="product-sale-price">Giá bán</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="product-sale-price" name="product-sale-price" placeholder="9999999" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="product-quantity">Số lượng</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product-quantity" id="product-quantity" placeholder="99" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="product-description">Mô tả</label>
                        <div class="col-sm-10">
                            <textarea
                                id="product-description"
                                name="product-description"
                                class="form-control"
                                placeholder="Nhập mô tả....."
                                aria-describedby="basic-icon-default-message2"></textarea>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="product-age">Độ tuổi</label>
                        <div class="col-sm-10">
                            <select class="form-control form-control-lg" id="product-age" name="product-age">
                                @foreach($age as $age_item)
                                <option value="{{$age_item->ID_age}}">{{$age_item->sDoTuoi}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="product-gender">Giới tính</label>
                        <div class="col-sm-10">
                            <select class="form-control form-control-lg" id="product-gender" name="product-gender">
                                @foreach($gender as $gender_item)
                                <option value="{{$gender_item->ID_gender}}">{{$gender_item->sGioiTinh}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection