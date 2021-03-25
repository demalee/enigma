@extends('layouts.app')
@section('content')
    <section class="home" id="home">
        <div class="home-decor">
{{--            <div class="home-circle1"><img src="../assets/images/main-banner3.png" alt=""></div>--}}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="home-contain">
                        <div>
{{--                            <img class="caption-img" src="{{asset('assets/logo/logo_3.png')}}" style="height: 50px; width: auto;" alt="caption-img">--}}

                            <h1><span class="f-bold f-color">quantum</span></h1>
                            <p>It is a capital mistake to theorize before one has data. Insensibly one begins to twist facts to suit theories, instead of theories to suit facts</p><a href="#"><img class="store" src="../assets/images/appstore.png" alt="appstore"></a><a href="#"><img class="ms-10 store" src="../assets/images/play-store.png" alt="play-store"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 offset-md-1">
{{--                    <div class="home-right"><img class="img-fluid" data-tilt="" data-tilt-perspective="110" data-tilt-speed="400" data-tilt-max="1.2" src="../assets/images/.jpg" alt="mobile"></div>--}}
                </div>
            </div>
        </div>
    </section>


    <!-- Home Section End-->
{{--    <!-- About Start-->--}}
{{--    <section class="about" id="about">--}}
{{--        <div class="about-decor">--}}
{{--            <div class="about-circle1"><img src="../assets/images/team1.png" alt="team1"></div>--}}
{{--            <div class="about-circle2"><img src="../assets/images/main-banner1.png" alt="banner1"></div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-5">--}}
{{--                    <div class="about-contain">--}}
{{--                        <div>--}}
{{--                            <h2 class="title">about the <span>Quantum Series</span></h2>--}}
{{--                            <p class="caption-about">Quantum is smart, high-performance ,On-demand and Real time application.</p>--}}
{{--                            <div class="row sm-mb">--}}
{{--                                <div class="col-6 position-relative">--}}
{{--                                    <ul class="about-style">--}}
{{--                                        <li class="abt-hover">--}}
{{--                                            <div class="about-icon">--}}
{{--                                                <div class="icon-hover"><img src="../assets/images/icon1.png" alt="easy-to-customized"></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="about-text">--}}
{{--                                                <h3>Smart</h3>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li class="abt-hover">--}}
{{--                                            <div class="about-icon">--}}
{{--                                                <div class="icon-hover"><img src="../assets/images/icon3.png" alt="easy-to-use"></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="about-text">--}}
{{--                                                <h3>easy to use</h3>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="col-6 position-relative">--}}
{{--                                    <ul class="about-style">--}}
{{--                                        <li class="abt-hover">--}}
{{--                                            <div class="about-icon">--}}
{{--                                                <div class="icon-hover"><img src="../assets/images/icon2.png" alt="Awasome-Design"></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="about-text">--}}
{{--                                                <h3>Reliable</h3>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li class="abt-hover">--}}
{{--                                            <div class="about-icon">--}}
{{--                                                <div class="icon-hover"><img src="../assets/images/icon4.png" alt="SEO-Friendly"></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="about-text">--}}
{{--                                                <h3>On-Demand</h3>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-7 d-medium-none">--}}
{{--                    <div class="about-right">--}}
{{--                        <div class="about-phone"><img class="img-fluid" src="../assets/logo/logo_3.png" alt="aboutus"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- About End-->--}}
{{--    <!-- Feature Section start-->--}}

{{--    <section class="contact" id="contact">--}}
{{--        <div class="contact-decor">--}}
{{--            <div class="contact-circle1"><img src="../assets/images/main-banner12.png" alt=""></div>--}}
{{--            <div class="contact-circle2"><img src="../assets/images/main-banner1.png" alt=""></div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 col-lg-8 col-sm-12">--}}
{{--                    <div class="contact-us">--}}
{{--                        <div class="w-100">--}}
{{--                            <h2 class="title"><span>contact </span>information</h2>--}}
{{--                            <form class="theme-form" id="myform" action="http://themes.pixelstrap.com/tovo/main/assets/mailer.php" method="post">--}}
{{--                                <div class="form-group">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="alert alert-success alert-dismissible d-none" id="mail_alert_class"><a class="close" href="#" data-dismiss="alert" aria-label="close">×</a>--}}
{{--                                            <div id="alert_mail"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-12 col-md-6 md-fgrup-margin">--}}
{{--                                            <input class="form-control" id="fullname" type="text" name="fullname" placeholder="your name" required="required">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-12 col-md-6">--}}
{{--                                            <input class="form-control" id="phone" type="number" name="phone" placeholder="phone" required="required">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input class="form-control" id="email" type="email" name="email" placeholder="email address" required="required">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="message" required="required"></textarea>--}}
{{--                                </div>--}}
{{--                                <div class="form-button">--}}
{{--                                    <input class="btn btn-custom theme-color" id="emailsend" type="submit" name="send" value="send">--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 d-medium-none-lg">--}}
{{--                    <div class="contact-right"><img class="img-fluid" src="../assets/images/Contact-info.png" alt=""></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Contact Section End--><!--Subscribe section start-->--}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="footer-text">
                        <img src="../assets/images/email.png" alt="email">
                        <h2 class="title text-center md-margin-top">subscribe to <span>newsletter</span></h2>
                        <p>  Stay updated with Quantum Series.</p>
                        <form action=""  class="footer-form needs-validation"  id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="enter your email" name="EMAIL" id="mce-EMAIL" required="required" >
                            </div>
                            <div class="form-button">
                                <button type="submit"  class="btn btn-custom theme-color" id="mc-submit">send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
