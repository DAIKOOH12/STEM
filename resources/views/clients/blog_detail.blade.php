@extends('layout.master')

@section('content')
<div class="blog-page">
    <div class="col-xs-12 col-sm-9 col-md-9 rht-col">
        @foreach($blog as $detail)
        <div class="blog-post wow fadeInUp" style="display:flex;flex-wrap:wrap;justify-content:center">
            <img class="img-responsive" src="{{url('images/blogs')}}/{{$detail->sDuongDan1}}" alt="" style="max-width:500px;max-height:300px;">
            <div class="text-start" style="min-width:100%;padding:10px 100px">
                <h1>{{$detail->sTieuDe}}</h1>
                <span class="author">{{$detail->sHoTen}}</span>
                <span class="date-time">{{$detail->dCreateAt}}</span>
                <p>{!! $detail->sNoiDung !!}</p>
            </div>
        </div>
        @endforeach

        <div class="blog-write-comment outer-bottom-xs outer-top-xs">
            <div class="row">
                <div class="col-md-12">
                    <h4>Bình luận</h4>
                </div>
                <div class="col-md-4">
                    <form class="register-form" role="form">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputName">Tên của bạn <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="">
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <form class="register-form" role="form">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Địa chỉ email <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <form class="register-form" role="form">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputComments">Bình luận <span>*</span></label>
                            <textarea class="form-control unicase-form-control" id="exampleInputComments"></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 outer-bottom-small m-t-20">
                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Đăng bình luận</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 sidebar">
        <div class="sidebar-module-container">
            <div class="search-area outer-bottom-small">
                <form>
                    <div class="control-group">
                        <input placeholder="Tìm kiếm" class="search-field">
                        <button class="search-button" style="opacity:0;"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop