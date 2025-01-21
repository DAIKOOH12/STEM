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
                <h5 class="mb-0">Chỉnh sửa bài viết</h5>
            </div>
            <div class="card-body">
                @foreach($blogEdit as $item)
                <form action="{{route('editblog')}}" method="POST" id="formblog" enctype="multipart/form-data">
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="blog-title">Tiêu đề</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$item->sTieuDe}}" name="blog-title" id="blog-title" placeholder="Tiêu đề..." />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="blog-title">Ảnh đại diện</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" value="{{$item->sDuongDan1}}" name="blog-image" id="blog-image" accept="image/png, image/gif, image/jpeg" />
                        </div>
                        <img src="{{url('images/blogs/'.$item->sDuongDan1)}}" id="blog-image-view" alt="" style="max-width:150px">
                    </div>
                    <div class="row mb-6">
                        <label for="recipient-name" class="col-form-label">Trạng thái</label>
                        <select class="form-control form-control-lg" id="blog-status" name="blog-status">
                            <option value="duyet">Xuất bản</option>
                            <option value="cho_duyet" {{$item->sTrangThai=="cho_duyet"?"selected":""}}>Chờ duyệt</option>
                        </select>
                    </div>
                    <div class="row mb-6">
                        <div class="form-group">
                            <label for="editor">Nội dung:</label>
                            <div id="editor" style="height: 300px;">
                                {!! $item->sNoiDung !!}
                            </div>
                            <textarea name="content" id="mytextarea" value="" id="formblog" style="display: none;"></textarea>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" id="updateblog">Cập nhật</button>
                        </div>
                    </div>
                    @csrf
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@section(section: 'script')
<!-- Quill JS -->
<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
<script src="{{url('js/admin/edit-blog.js')}}"></script>
@endsection