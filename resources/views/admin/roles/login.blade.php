<!doctype html>

<html
    lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{url('css/')}}"
    data-template="vertical-menu-template-free"
    data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Trang Quản Trị</title>

    <meta name="description" content="" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('css/boxicons.css')}}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{url('css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{url('css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{url('css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{url('css/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{url('css/apex-charts.css')}}" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css" />
    <!-- Helpers -->
    <script src="{{url('js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{url('js/config.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Quill CSS -->
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
</head>

<body>
    <!-- Content -->
    <div class="container-xl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card px-sm-6 px-0">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <div class="app-brand demo" style="margin-bottom:20px;">
                                <a href="{{route('adminpage')}}"> <img src="https://cdn-icons-png.flaticon.com/512/906/906343.png" alt="logo" style="max-height: 50px"> </a>
                                <span class="app-brand-text demo menu-text fw-bold ms-2">Quản Trị</span>
                            </div>
                        </div>
                        @if(session('message')!=null)
                        <div class="aler alert-danger">
                            <p>{{session('message')}}</p>
                        </div>
                        @endif

                        <form id="formAuthentication" class="mb-12 col-lg-12" action="{{route('adminsignin')}}" method="post">
                            <div class="mb-6">
                                <label for="email" class="form-label">Tài khoản</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    name="account"
                                    placeholder="Nhập tài khoản"
                                    autofocus />
                            </div>
                            <div class="mb-6 form-password-toggle">
                                <label class="form-label" for="password">Mật khẩu</label>
                                <div class="input-group input-group-merge">
                                    <input
                                        type="password"
                                        id="password"
                                        class="form-control"
                                        name="password"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="fa-regular fa-eye-slash"></i></span>
                                </div>
                            </div>
                            @csrf
                            <div class="mb-6">
                                <button class="btn btn-primary d-grid w-100" type="submit">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>
    <!-- Place this tag before closing body tag for github widget button. -->
    <script src="https://cdn.tiny.cloud/1/utr58vrbwnq5rsau1p8ef9w36k3x7cugdbuwqolvbn9gw8uf/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{url('js/menu.js')}}"></script>
    <script src="{{url('js/dashboards-analytics.js')}}"></script>
    <script src="{{url('js/apexcharts.js')}}"></script>
    <script src="{{url('js/jquery.js')}}"></script>
    <script src="{{url('js/popper.js')}}"></script>
    <script src="{{url('js/bootstrap_sneat.js')}}"></script>
    <script src="{{url('js/perfect-scrollbar.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
</body>

</html>