<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BS Manna Marketing</title>

    <!-- Bootstrap core CSS -->
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}
    <link href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('template/css/landing-page.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/menu-hover.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>
<nav class="navbar navbar-light bg-light static-top stroke" id="top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="stroke">
                    <ul>
                        <li>
                            <a href="/" ><img src="{{ asset('images/logo-sm.png')}}" width="80"></a>
                        </li>
                        <li><a href="/"  class="navbar-brand">Home</a></li>
                        <li><a href="#about" class="navbar-brand">About Us</a></li>
                        <li><a href="#offer" class="navbar-brand">What We Offer</a></li>
                        <li><a href="/our-products" class="navbar-brand">Our Products</a></li>
                        <li><a href="#whatsay" class="navbar-brand">What They Say</a></li>
                        <li><a href="#contact" class="navbar-brand">Contact Us!</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</nav>