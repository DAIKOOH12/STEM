@extends('layout.master')

@section('content')
<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="blog-page">
                <div class="col-xs-12 col-sm-9 col-md-9 rht-col">
                    @foreach($blogs as $blog)
                    <div class="blog-post  wow fadeInUp" style="margin-bottom:15px">
                        <a href="{{route('detailblog')}}/{{$blog->ID_blog}}"><img class="img-responsive" src="{{url('images/blogs')}}/{{$blog->sDuongDan1}}" alt="" style="max-width:300px"></a>
                        <h1><a href="{{route('detailblog')}}/{{$blog->ID_blog}}">{{$blog->sTieuDe}}</a></h1>
                        <span class="author">{{$blog->sHoTen}}</span>
                        <span class="date-time">{{$blog->dCreateAt}}</span>
                        <p>{{$blog->sTieuDe}}</p>
                        <a href="{{route('detailblog')}}/{{$blog->ID_blog}}" class="btn btn-upper btn-primary read-more">Đọc thêm</a>
                        <br>
                    </div>
                    @endforeach

                    <div class="clearfix blog-pagination filters-container  wow fadeInUp" style="padding:0px; background:none; box-shadow:none; margin-top:15px; border:none">
                        {{$blogs->links()}}
                    </div><!-- /.filters-container -->
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
        </div>
    </div>
</div>
@stop