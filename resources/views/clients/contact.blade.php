@extends('layout.master')

@section('content')
<div class="container">
      <div class="contact-page">
        <div class="row">
          <div class="col-md-8 contact-form">
            <div class="col-md-12 contact-title">
              <h4>Đặt hoa theo yêu cầu</h4>
            </div>
            <div class="col-md-4 ">
              <form class="register-form" role="form">
                <div class="form-group">
                  <label class="info-title" for="exampleInputName">Họ tên <span>*</span></label>
                  <input type="email" class="form-control unicase-form-control text-input" id="exampleInputName"
                    placeholder="">
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <form class="register-form" role="form">
                <div class="form-group">
                  <label class="info-title" for="exampleInputEmail1">Địa chỉ email <span>*</span></label>
                  <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1"
                    placeholder="">
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <form class="register-form" role="form">
                <div class="form-group">
                  <label class="info-title" for="exampleInputTitle">Tiêu đề <span>*</span></label>
                  <input type="email" class="form-control unicase-form-control text-input" id="exampleInputTitle"
                    placeholder="Title">
                </div>
              </form>
            </div>
            <div class="col-md-12">
              <form class="register-form" role="form">
                <div class="form-group">
                  <label class="info-title" for="exampleInputComments">Mô tả về sản phẩm mong muốn <span>*</span></label>
                  <textarea class="form-control unicase-form-control" id="exampleInputComments"></textarea>
                </div>
              </form>
            </div>
            <div class="col-md-12 outer-bottom-small m-t-20">
              <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Gửi thông tin</button>
            </div>
          </div>
          <div class="col-md-4 contact-info">
            <div class="contact-title">
              <h4>Thông tin liên hệ</h4>
            </div>
            <div class="clearfix address">
              <span class="contact-i"><i class="fa fa-map-marker"></i></span>
              <span class="contact-span">Hà Nam</span>
            </div>
            <div class="clearfix phone-no">
              <span class="contact-i"><i class="fa fa-mobile"></i></span>
              <span class="contact-span">0123456789
            </div>
            <div class="clearfix email">
              <span class="contact-i"><i class="fa fa-envelope"></i></span>
              <span class="contact-span"><a href="#">abc@gmail.com</a></span>
            </div>
          </div>
        </div><!-- /.contact-page -->
      </div><!-- /.row -->
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
    </div>
@stop