<!-- ============================================== HEADER ============================================== -->
@php
//dd($user)
@endphp
<header class="header-style-1">

  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            @if(session('mem_id')==null)
            <li class="login"><a href="{{route('accountpage')}}"><span>Đăng ký/Đăng nhập</span></a></li>
            @else
            <li class="login"><a href=""><span>{{session('mem_name')}}</span></a></li>
            <li class="login"><a href="{{route('signout')}}"><span>Đăng xuất</span></a></li>
            @endif
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.header-top -->
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="{{route('homepage')}}"> <img src="{{url('images/logo.png')}}" alt="logo" style="max-height: 100px"> </a> </div>
          <!-- /.logo -->
          <!-- ============================================================= LOGO : END ============================================================= -->
        </div>
        <!-- /.logo-holder -->

        <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
          <!-- /.contact-row -->
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form action="{{route('searchproduct')}}">
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('categorypage')}}">FLORA</a>
                    <!-- <ul class="dropdown-menu" role="menu">
                      <li class="menu-header">Computer</li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>
                    </ul> -->
                  </li>
                </ul>
                <input class="search-field" placeholder="Tìm kiếm..." id="keyword" name="keyword" />
                <!-- <a class="search-button" href="#"></a> -->
                <button class="search-button btn" type="submit"></button>
              </div>
            </form>
          </div>
          <!-- /.search-area -->
          <!-- ============================================================= SEARCH AREA : END ============================================================= -->
        </div>
        <!-- /.top-search-holder -->

        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row">
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

          <div class="dropdown dropdown-cart"> <a href="{{route('cartpage')}}" class="dropdown-toggle lnk-cart">
              <div class="items-cart-inner">
                <div class="basket">
                  <div class="basket-item-count"><span class="count">
                      {{session('count')!=null?session('count'):0}}
                    </span></div>
                </div>
              </div>
            </a>

          </div>
        </div>
        <!-- /.top-cart-row -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  </div>
  <!-- /.main-header -->

  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown"> <a href="{{route('homepage')}}">TRANG CHỦ</a> </li>
                <li class="dropdown yamm mega-menu"> <a href="{{route('categorypage')}}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">CÁC LOẠI HOA <i class="fa-solid fa-chevron-down" style="color: #ffffff;"></i></a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content ">
                        <div class="row">
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <a href="{{route('categorypage')}}/hoa-gia">
                              <h2 class="title">HOA GIẢ</h2>
                            </a>
                            <ul class="links">
                              <li><a href="{{route('categorypage')}}/hoa-gia/hoa-lua-vai">Hoa lụa/vải</a></li>
                              <li><a href="{{route('categorypage')}}/hoa-gia/hoa-nhua">Hoa nhựa</a></li>
                              <li><a href="{{route('categorypage')}}/hoa-gia/hoa-cao-su-non">Hoa cao su non</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->

                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <a href="{{route('categorypage')}}/hoa-sap">
                              <h2 class="title">HOA SÁP</h2>
                            </a>
                            <ul class="links">
                              <li><a href="{{route('categorypage')}}/hoa-sap/hoa-sap-thom">Hoa sáp thơm</a></li>
                              <li><a href="{{route('categorypage')}}/hoa-sap/hoa-sap-nhu">Hoa sáp nhũ</a></li>
                              <li><a href="{{route('categorypage')}}/hoa-sap/hoa-sap-galaxy">Hoa sáp galaxy</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <a href="{{route('categorypage')}}/lan-ho-diep">
                              <h2 class="title">LAN HỒ ĐIỆP</h2>
                            </a>
                            <ul class="links">
                              <li><a href="{{route('categorypage')}}/lan-ho-diep/lan-mini">Lan hồ điệp mini</a></li>
                              <li><a href="{{route('categorypage')}}/lan-ho-diep/lan-1-canh">Lan hồ điệp 1 cành</a></li>
                              <li><a href="{{route('categorypage')}}/lan-ho-diep/lan-3-canh">Lan hồ điệp 3 cành</a></li>
                              <li><a href="{{route('categorypage')}}/lan-ho-diep/lan-5-canh">Lan hồ điệp 5 cành</a></li>
                            </ul>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <a href="{{route('categorypage')}}/chu-de">
                              <h2 class="title">HOA THEO CHỦ ĐỀ</h2>
                            </a>
                            <ul class="links">
                              <li><a href="{{route('categorypage')}}/chu-de/hoa-cam-tay">Hoa cưới cầm tay</a></li>
                              <li><a href="{{route('categorypage')}}/chu-de/hoa-tang-le">Hoa tang lễ</a></li>
                              <li><a href="{{route('categorypage')}}/chu-de/hoa-tinh-yeu">Hoa tình yêu</a></li>
                              <li><a href="{{route('categorypage')}}/chu-de/hoa-chuc-mung">Hoa chúc mừng</a></li>
                              <li><a href="{{route('categorypage')}}/chu-de/hoa-ki-niem-cuoi">Hoa kỉ niệm cưới</a></li>
                              <li><a href="{{route('categorypage')}}/chu-de/ke-hoa-khai-truong">Hoa khai trương</a></li>
                              <li><a href="{{route('categorypage')}}/chu-de/gio-hoa-sinh-nhat">Hoa sinh nhật</a></li>
                            </ul>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <a href="{{route('categorypage')}}/hoa-tuoi">
                              <h2 class="title">HOA TƯƠI</h2>
                            </a>
                            <ul class="links">
                              <li><a href="{{route('categorypage')}}/hoa-tuoi/hoa-hong">Hoa hồng</a></li>
                              <li><a href="{{route('categorypage')}}/hoa-tuoi/hoa-baby">Hoa baby</a></li>
                              <li><a href="{{route('categorypage')}}/hoa-tuoi/hoa-huong-duong">Hoa hướng dương</a></li>
                              <li><a href="{{route('categorypage')}}/hoa-tuoi/hoa-tulip">Hoa tulip</a></li>
                              <li><a href="{{route('categorypage')}}/hoa-tuoi/Hoa-cuc-tana">Hoa cúc tana</a></li>
                              <li><a href="{{route('categorypage')}}/hoa-tuoi/Hoa-thach-thao">Hoa thạch thảo</a></li>
                              <li><a href="{{route('categorypage')}}/hoa-tuoi/hoa-mau-don">Hoa mẫu đơn</a></li>
                              <li><a href="{{route('categorypage')}}/hoa-tuoi/hoa-dong-tien">Hoa đồng tiền</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown yamm mega-menu">
                  <a href="{{route('blogpage')}}" class="dropdown-toggle">BÀI VIẾT</a>
                </li>
                <li class="dropdown yamm mega-menu"> <a href="{{route('contactpage')}}" data-hover="dropdown" class="dropdown-toggle">ĐẶT HOA</a>
                </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer -->
          </div>
          <!-- /.navbar-collapse -->

        </div>
        <!-- /.nav-bg-class -->
      </div>
      <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

  </div>
  <!-- /.header-nav -->
  <!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->