<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>Bán đồ chơi cho trẻ em STEM</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <link rel="stylesheet" href="{{url('css/blue.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('css/rateit.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap-select.min.css')}}">

    <!-- Icons/Glyphs -->
    <!-- <link rel="stylesheet" href="{{url('css/font-awesome.css')}}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="cnt-home">
    @include('layout.header')
    <div class="body-content outer-top-vs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                @yield('sidebar')

                @yield('content')
            </div>
            <!-- /.container -->
        </div>
    @include('layout.footer')
</body>

</html>