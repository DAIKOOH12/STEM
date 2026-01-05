@extends('layout.master')

@section('content')
<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-6 col-sm-6 sign-in">
                    @if(session('message')!=null)
                    <div class="alert alert-error">{{session('message')}}</div>
                    @endif
                    <h4 class="">Đăng nhập</h4>
                    <p class="">Xin chào! Hãy đăng nhập tài khoản của bạn.</p>
                    <form class="register-form outer-top-xs" role="form" method="post" action="{{route('signin')}}">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Tài khoản <span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" name="account" id="exampleInputEmail1" requied>
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Mật khẩu <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" name="password" id="exampleInputPassword1">
                        </div>
                        <div class="radio outer-xs">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Nhớ mật khẩu!
                            </label>
                            <a href="#" class="forgot-password pull-right">Quên mật khẩu?</a>
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Đăng nhập</button>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </form>
                </div>
                <!-- Sign-in -->

                <!-- create a new account -->
                <div class="col-md-6 col-sm-6 create-new-account">
                    <h4 class="checkout-subtitle">Tạo tài khoản</h4>
                    <p class="text title-tag-line">Tạo tài khoản của bạn</p>
                    <form class="register-form outer-top-xs" role="form" method="post" action="{{route('signup')}}">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail2">Tài khoản <span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" name="account" id="exampleInputEmail2">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail2">Địa chỉ email <span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" name="email" id="exampleInputEmail2">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Họ và tên <span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" name="name" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Số điện thoại <span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" name="phone" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Địa chỉ<span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" name="diachi" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Mật khẩu <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" name="password" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Xác nhận mật khẩu <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Đăng ký</button>
                    </form>


                </div>
                <!-- create a new account -->
            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp">
            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand1.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item m-t-10">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand2.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand3.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand4.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand5.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand6.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand2.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand4.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand1.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="images/brands/brand5.png" src="images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->
                </div><!-- /.owl-carousel #logo-slider -->
            </div><!-- /.logo-slider-inner -->

        </div><!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
</div>
@stop