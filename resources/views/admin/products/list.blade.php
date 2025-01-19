@extends('layout.admin_master')

@section('content')
<div class="card" style="padding:10px">
    <h5 class="card-header">Danh sách sản phẩm</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="product-table">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Hình ảnh 1</th>
                    <th>Hình ảnh 2</th>
                    <th>Hình ảnh 3</th>
                    <th>Hình ảnh 4</th>
                    <th>Hình ảnh 5</th>
                    <th>Giá niêm yết</th>
                    <th>Giá bán</th>
                    <th>Số lượng</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Lứa tuổi</th>
                    <th>Giới tính</th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($products as $item)
                <tr>
                    <td class="text-collapse name" data-able="{{$item->ID_Product}}">{{$item->sTenSanPham}}</td>
                    <td class="category" data-able="{{$item->ID_category}}">{{$item->sTenChuDe}}</td>
                    <td><img src="{{url('images/thumbs/'.$item->sDuongDan1)}}" alt="" style="height:100px"></td>
                    <td><img src="{{url('images/thumbs/'.$item->sDuongDan2)}}" alt="" style="height:100px"></td>
                    <td><img src="{{url('images/thumbs/'.$item->sDuongDan3)}}" alt="" style="height:100px"></td>
                    <td><img src="{{url('images/thumbs/'.$item->sDuongDan3)}}" alt="" style="height:100px"></td>
                    <td><img src="{{url('images/thumbs/'.$item->sDuongDan4)}}" alt="" style="height:100px"></td>
                    <td class="old-price">{{$item->fGiaNiemYet}}</td>
                    <td class="sale-price">{{$item->fGiaBan}}</td>
                    <td class="quantity">{{$item->iSoLuong}}</td>
                    <td class="text-collapse description">{{$item->sMoTa}}</td>
                    <td class="status">{{$item->bIsActive?'Còn hàng':'Hết hàng'}}</td>
                    <td class="age" data-able="{{$item->ID_age}}">{{$item->sDoTuoi}}</td>
                    <td class="gender" data-able="{{$item->ID_gender}}">{{$item->sGioiTinh}}</td>
                    <td>
                        <button class="btn btn-info edit-product"><i class="fa-solid fa-wrench" style="color: #fff;"></i></button>
                        <button class="btn btn-danger del-product"><i class="fa-solid fa-trash" style="color: #fff;"></i></button>
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
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="product-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Danh mục</label>
                        <select class="form-control form-control-lg" id="product-category">
                            @foreach($category as $cate)
                            <option value="{{$cate->ID_category}}">{{$cate->sTenChuDe}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Giá niêm yết</label>
                        <input type="text" class="form-control" id="product-old-price">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Giá bán</label>
                        <input type="text" class="form-control" id="product-sale-price">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Số lượng</label>
                        <input type="text" class="form-control" id="product-quantity">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Mô tả</label>
                        <textarea class="form-control" id="product-description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Lứa tuổi</label>
                        <select class="form-control form-control-lg" id="product-age">
                            @foreach($age as $age_item)
                            <option value="{{$age_item->ID_age}}">{{$age_item->sDoTuoi}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Giới tính</label>
                        <select class="form-control form-control-lg" id="product-gender">
                            @foreach($gender as $gender_item)
                            <option value="{{$gender_item->ID_gender}}">{{$gender_item->sGioiTinh}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
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
<script src="{{url('js/admin/list-products.js')}}"></script>
@endsection