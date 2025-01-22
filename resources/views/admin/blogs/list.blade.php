@extends('layout.admin_master')

@section('content')
<div class="card" style="padding:10px">
    <h5 class="card-header">Danh sách bài viết</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="blog-table">
            <thead>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Ảnh đại diện</th>
                    <th>Ngày đăng</th>
                    <th>Ngày chỉnh sửa</th>
                    <th>Người tạo</th>
                    <th>Danh mục</th>
                    <th>Trạng thái</th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($blogs as $item)
                <tr>
                    <td class="text-collapse title" data-able="{{$item->ID_blog}}">{{$item->sTieuDe}}</td>
                    <td><img src="{{url('images/blogs/'.$item->sDuongDan1)}}" alt="" style="height:100px;max-width:200px"></td>
                    <td class="text-collapse createat">{{$item->dCreateAt}}</td>
                    <td class=" text-collapse updateat">{{$item->dUpdateAt}}</td>
                    <td class=" text-collapse updateat">{{$item->sHoTen}}</td>
                    <td class="text-collapse category">
                        <select class="form-control form-control-lg blog-category">
                            @foreach($category as $cate)
                            <option value="{{$cate->ID_category}}" {{$cate->ID_category==$item->ID_category?"selected":""}}>{{$cate->sTenChuDe}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class=" text-collapse updateat" data-able="{{$item->sTrangThai}}">{{$item->sTrangThai=="duyet"?"Xuất bản":"Chờ duyệt"}}</td>
                    <td>
                        <a href="{{route('geteditblog')}}?blogID={{$item->ID_blog}}">
                            <button class=" btn btn-info edit-blog"><i class="fa-solid fa-wrench" style="color: #fff;"></i></button>
                        </a>
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