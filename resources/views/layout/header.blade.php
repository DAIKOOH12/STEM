<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li class="login"><a href="{{route('accountpage')}}"><span>Đăng ký/Đăng nhập</span></a></li>
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
          <div class="logo"> <a href="{{route('homepage')}}"> <img src="{{url('images/logo.png')}}" alt="logo"> </a> </div>
          <!-- /.logo -->
          <!-- ============================================================= LOGO : END ============================================================= -->
        </div>
        <!-- /.logo-holder -->

        <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
          <!-- /.contact-row -->
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form>
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('categorypage')}}">Danh mục <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                      <li class="menu-header">Computer</li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>
                    </ul>
                  </li>
                </ul>
                <input class="search-field" placeholder="Search here..." />
                <a class="search-button" href="#"></a>
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
                  <div class="basket-item-count"><span class="count">2</span></div>
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
                <li class="active dropdown"> <a href="{{route('homepage')}}">Trang chủ</a> </li>
                <li class="dropdown yamm mega-menu"> <a href="{{route('categorypage')}}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Đồ chơi STEM <i class="fa-solid fa-chevron-down" style="color: #ffffff;"></i></a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content ">
                        <div class="row">
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <a href="{{route('categorypage')}}">
                              <h2 class="title">STEM mầm non</h2>
                            </a>
                            <ul class="links">
                              <li><a href="{{route('categorypage')}}">Mầm non</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->

                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <a href="{{route('categorypage')}}/stem-tieu-hoc">
                              <h2 class="title">STEM tiểu học</h2>
                            </a>
                            <ul class="links">
                              <li><a href="{{route('categorypage')}}/stem-tieu-hoc/lop-1">STEM Lớp 1</a></li>
                              <li><a href="{{route('categorypage')}}/stem-tieu-hoc/lop-2">STEM Lớp 2</a></li>
                              <li><a href="{{route('categorypage')}}/stem-tieu-hoc/lop-3">STEM Lớp 3</a></li>
                              <li><a href="{{route('categorypage')}}/stem-tieu-hoc/lop-4">STEM Lớp 4</a></li>
                              <li><a href="{{route('categorypage')}}/stem-tieu-hoc/lop-5">STEM Lớp 5</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <a href="{{route('categorypage')}}/stem-trung-hoc-co-so">
                              <h2 class="title">STEM cấp 2</h2>
                            </a>
                            <ul class="links">
                              <li><a href="{{route('categorypage')}}/stem-trung-hoc-co-so/stem-lop-6">STEM Lớp 6</a></li>
                              <li><a href="{{route('categorypage')}}/stem-trung-hoc-co-so/stem-lop-7">STEM Lớp 7</a></li>
                              <li><a href="{{route('categorypage')}}/stem-trung-hoc-co-so/stem-lop-8">STEM Lớp 8</a></li>
                              <li><a href="{{route('categorypage')}}/stem-trung-hoc-co-so/stem-lop-9">STEM Lớp 9</a></li>
                            </ul>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <a href="{{route('categorypage')}}/trung-hoc-pho-thong">
                              <h2 class="title">STEM cấp 3</h2>
                            </a>
                            <ul class="links">
                              <li><a href="{{route('categorypage')}}/stem-trung-hoc-pho-thong/stem-lop-10">STEM Lớp 10</a></li>
                              <li><a href="{{route('categorypage')}}/stem-trung-hoc-pho-thong/stem-lop-11">STEM Lớp 11</a></li>
                              <li><a href="{{route('categorypage')}}/stem-trung-hoc-pho-thong/stem-lop-12">STEM Lớp 12</a></li>
                            </ul>
                          </div>
                          <!-- /.col -->
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown yamm mega-menu"> <a href="{{route('categorypage')}}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">STEM Robotics <i class="fa-solid fa-chevron-down" style="color: #ffffff;"></i></a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content ">
                        <div class="row">
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <a href="{{route('categorypage')}}/lego-education">
                              <h2 class="title">Lego Education</h2>
                            </a>
                            <ul class="links">
                              <li><a href="{{route('categorypage')}}/lego-education/huong-dan-lego-2.0.html">Hướng dẫn Lego Wedo 2.0</a></li>
                              <li><a href="{{route('categorypage')}}/lego-education/huong-dan-lego-45678.html">Hướng dẫn Lego Spike Prime 45678</a></li>
                              <li><a href="{{route('categorypage')}}/lego-education/huong-dan-lego-9686.html">Hướng dẫn Lego 9686</a></li>
                              <li><a href="{{route('categorypage')}}/lego-education/huong-dan-lego-spike-4534.html">Hướng dẫn Lego Spike Essential 45345</a></li>
                            </ul>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <a href="{{route('categorypage')}}/ubitech">
                              <h2 class="title">Ubitech</h2>
                            </a>
                            <ul class="links">
                              <li><a href="{{route('categorypage')}}/ubitech/humanoid">Humanoid robot - Robot hỗ trợ AI</a></li>
                              <li><a href="{{route('categorypage')}}/ubitech/ukit-day-hoc">Ukit dạy học STEM</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown yamm mega-menu"> <a href="{{route('categorypage')}}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Lập trình STEM <i class="fa-solid fa-chevron-down" style="color: #ffffff;"></i></a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content ">
                        <div class="row">
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <a href="{{route('categorypage')}}/lap-trinh-arduino">
                              <h2 class="title">Lập trình Arduino</h2>
                            </a>
                            <ul class="links">
                              <li><a href="{{route('categorypage')}}/lap-trinh-arduino/huong-dan-lap-trinh-arduino">Hướng dẫn lập trình Arduino</a></li>
                            </ul>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <a href="{{route('categorypage')}}/lap-trinh-bbc">
                              <h2 class="title">Lập trình BBC Micro:Bit</h2>
                            </a>
                            <ul class="links">
                              <li><a href="{{route('categorypage')}}/ubitech/humanoid">Humanoid robot - Robot hỗ trợ AI</a></li>
                              <li><a href="{{route('categorypage')}}/ubitech/ukit-day-hoc">Ukit dạy học STEM</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown yamm mega-menu"> <a href="{{route('categorypage')}}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">STEM LAB <i class="fa-solid fa-chevron-down" style="color: #ffffff;"></i></a>
                </li>
                <li class="dropdown yamm mega-menu"> <a href="{{route('contactpage')}}" data-hover="dropdown" class="dropdown-toggle">Liên hệ</a>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <li><a href="{{route('homepage')}}">Home</a></li>
                              <li><a href="{{route('categorypage')}}">Category</a></li>
                              <li><a href="{{route('item-detail')}}">Detail</a></li>
                              <li><a href="{{route('cartpage')}}">Shopping Cart Summary</a></li>
                              <li><a href="{{route('blogpage')}}">Checkout</a></li>
                              <li><a href="{{route('blogpage')}}">Blog</a></li>
                              <li><a href="{{route('detail-blog')}}">Blog Detail</a></li>
                              <li><a href="{{route('contactpage')}}">Contact</a></li>
                              <li><a href="{{route('accountpage')}}">Sign In</a></li>
                              <li><a href="my-wishlist.html">Wishlist</a></li>
                              <li><a href="terms-conditions.html">Terms and Condition</a></li>
                              <li><a href="track-orders.html">Track Orders</a></li>
                              <li><a href="product-comparison.html">Product-Comparison</a></li>
                              <li><a href="faq.html">FAQ</a></li>
                              <li><a href="404.html">404</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
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