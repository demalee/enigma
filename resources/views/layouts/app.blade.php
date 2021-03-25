<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quantum Series</title>
    <meta charset="utf-8">
    <meta name="author" content="pixelstrap">
    <meta name="description" content="Quantum Series">
    <meta name="keywords" content="Quantum Series">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Fav icon-->
    <link rel="shortcut icon" href="{{ asset('/assets/logo/logo_3.png') }}">
    <!-- Font Family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
    <!-- Animation CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
    <!-- Owl carousel css-->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
    <!-- Form validation css-->
    <link rel="stylesheet" href="{{ asset('assets/css/validation.css')}}">
    <!-- Style css-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <!-- Responsive css-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    <!-- color variation-->
    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color/color-1.css')}}" media="screen">
</head>
<body data-spy="scroll" data-bs-target=".navbar" data-offset="80">
<!-- Preloader-->
<div class="loader-wrapper">
    <div class="loader"></div>
</div>
@include('layouts.header')
<main class="py-4">
    @yield('content')
</main>
<section class="p-0">
    <div class="container-fluid">
        <div class="bottom-section">
            <div class="row">
                <div class="col-md-6 p-0">
                    <div class="address-bar">
                        <div>
                            <ul class="footer-style">
                                <li>
                                    <div class="footer-icon"><img src="../assets/images/locate.png" alt="locate"></div>
                                    <div class="footer-address"><a href="#">5TH FLOOR, SUITE NO. 513, MARSABIT PLAZA.
                                        </a></div>
                                </li>

                                <li>
                                    <div class="footer-icon"><img src="../assets/images/telephone.png" alt="telephone"></div>
                                    <div class="footer-address"><a href="#">+254 (0) 711296168/ (0) 736635571</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="address-bar">
                        <div>
                            <ul class="footer-style">
                                <li>
                                    <div class="footer-icon"><img src="../assets/images/fotter-email.png" alt="fotter-email"></div>
                                    <div class="footer-address"><a href="#">info@enigma-consultancy.com</a></div>
                                </li>
                                <li>
                                    <div class="footer-icon"><img src="../assets/images/fax.png" alt=""></div>
                                    <div class="footer-address"><a href="#">+254 (0) 20 4402843</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Map Section Ends-->
<!-- Tap on Top-->
<div class="tap-top">
    <div><i class="fa fa-angle-double-up"></i></div>
</div>
<!-- Tap on Ends-->
<!-- Footer Section start-->
<div class="copyright-section index-footer">
    <p>© 2021 Enigma Analytics. All rights reserved.</p>
</div>
<script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<!-- bootstrap js file-->
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<!-- popper js file-->
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<!-- Owl carousel js file-->
{{--<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>--}}
<!-- script js file-->
<script src="{{ asset('assets/js/script.js')}}"></script>
<!-- tilt js file-->
<script src="{{ asset('assets/js/tilt.jquery.js')}}"></script>
<!-- validation-->
<script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('assets/js/additional-methods.min.js')}}"></script>
<script src="{{ asset('assets/js/contact.js')}}"></script>
<!--scroll js-->
<script src="{{ asset('assets/js/scroll.js')}}"></script>
</body>
</html>
