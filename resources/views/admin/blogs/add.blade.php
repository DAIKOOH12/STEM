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
                <form action="{{route('addblog')}}" method="POST" id="formblog" enctype="multipart/form-data">
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="blog-title">Tiêu đề</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="blog-title" id="blog-title" placeholder="Tiêu đề..." />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="blog-title">Danh mục</label>
                        <div class="col-sm-10">
                            <select class="form-control form-control-lg" id="blog-category" name="blog-category">
                                @foreach($category as $cate)
                                <option value="{{$cate->ID_category}}">{{$cate->sTenChuDe}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="blog-title">Ảnh đại diện</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="blog-image" id="blog-image" placeholder="Tiêu đề..." accept="image/png, image/gif, image/jpeg"/>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <div class="form-group">
                            <label for="editor">Nội dung:</label>
                            <div id="editor" style="height: 300px;"></div>
                            <textarea name="content" id="mytextarea" id="formblog"  style="display: none;"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" id="addblog">Thêm mới</button>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section(section: 'script')
<!-- Quill JS -->
<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
<script src="{{url('js/admin/add-blog.js')}}"></script>
@endsection