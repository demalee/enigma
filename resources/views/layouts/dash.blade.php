<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Quantum Series</title>

    <link rel="icon" href="{{ asset('assets/logo/logo_3.png')}}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/themefy_icon/themify-icons.css')}}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/niceselect/css/nice-select.css')}}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css')}}" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{ asset('vendors/gijgo/gijgo.min.css')}}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/font_awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('vendors/tagsinput/tagsinput.css')}}" />

    <!-- date picker -->
    <link rel="stylesheet" href="{{ asset('vendors/datepicker/date-picker.css')}}" />
    <!-- scrollabe  -->
    <link rel="stylesheet" href="{{ asset('vendors/scroll/scrollable.css')}}" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/buttons.dataTables.min.css')}}" />
    <!-- text editor css -->
    <link rel="stylesheet" href="{{ asset('vendors/text_editor/summernote-bs4.css')}}" />
    <!-- morris css -->
    <link rel="stylesheet" href="{{ asset('vendors/morris/morris.css')}}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{ asset('vendors/material_icon/material-icons.css')}}" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{ asset('css/metisMenu.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/colors/default.css')}}" id="colorSkinCSS">
</head>
<body class="crm_body_bg">
@include('layouts.dash_head')
<main class="py-4">
    <section class="main_content dashboard_part large_header_bg">
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area d-flex align-items-center">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here..." >
                                    </div>
                                    <button type="submit"> <img src="{{asset('img/icon/icon_search.svg')}}'" alt=""> </button>
                                </form>
                            </div>
                            <span class="f_s_14 f_w_400 ml_25 white_text text_white" >Apps</span>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a class="bell_notification_clicker nav-link-notify" href="#"> <img src="{{asset('img/icon/bell.svg')}}" alt="">

                                    </a>
                                    <!-- Menu_NOtification_Wrap  -->
                                    <div class="Menu_NOtification_Wrap">
                                        <div class="notification_Header">
                                            <h4>Notifications</h4>
                                        </div>
                                        <div class="Notification_body">
                                            <!-- single_notify  -->
                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="{{asset('img/staf/2.png')}}" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#"><h5>Cool Marketing </h5></a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                            <!-- single_notify  -->
                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="{{asset('img/staf/4.png')}}" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#"><h5>Awesome packages</h5></a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                            <!-- single_notify  -->
                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="{{asset('img/staf/3.png')}}" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#"><h5>what a packages</h5></a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                            <!-- single_notify  -->
                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="{{asset('img/staf/2.png')}}" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#"><h5>Cool Marketing </h5></a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                            <!-- single_notify  -->
                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="{{asset('img/staf/4.png')}}" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#"><h5>Awesome packages</h5></a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                            <!-- single_notify  -->
                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="{{asset('img/staf/3.png')}}" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#"><h5>what a packages</h5></a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nofity_footer">
                                            <div class="submit_button text-center pt_20">
                                                <a href="#" class="btn_1">See More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Menu_NOtification_Wrap  -->
                                </li>
                                <li>
                                    <a class="CHATBOX_open nav-link-notify" href="#"> <img src="{{asset('img/icon/msg.svg')}}" alt="">   </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="{{asset('img/client_img.png')}}" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <p>Data Analysist </p>
                                        <h5>Enigma </h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile </a>
                                        <a href="#">Settings</a>
                                        <a href="#">Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @yield('content')
</main>

<!-- footer part -->
<div class="footer_part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_iner text-center">
                    <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Dashboard</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- main content part end -->

<!-- ### CHAT_MESSAGE_BOX   ### -->



<!--/### CHAT_MESSAGE_BOX  ### -->

<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
    </a>
</div>

<!-- footer  -->
<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{ asset('js/popper.min.js')}}"></script>
<!-- bootstarp js -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- sidebar menu  -->
<script src="{{ asset('js/metisMenu.js')}}"></script>
<!-- waypoints js -->
<script src="{{ asset('vendors/count_up/jquery.waypoints.min.js')}}"></script>
<!-- waypoints js -->
<script src="{{ asset('vendors/chartlist/Chart.min.js')}}"></script>
<!-- counterup js -->
<script src="{{ asset('vendors/count_up/jquery.counterup.min.js')}}"></script>

<!-- nice select -->
<script src="{{ asset('vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{ asset('vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

<!-- responsive table -->
<script src="{{ asset('vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/buttons.print.min.js')}}"></script>


<script src="{{ asset('js/chart.min.js')}}"></script>
<!-- progressbar js -->
<script src="{{ asset('vendors/progressbar/jquery.barfiller.js')}}"></script>
<!-- tag input -->
<script src="{{ asset('vendors/tagsinput/tagsinput.js')}}"></script>
<!-- text editor js -->
<script src="{{ asset('vendors/text_editor/summernote-bs4.js')}}"></script>
<script src="{{ asset('vendors/am_chart/amcharts.js')}}"></script>

<!-- scrollabe  -->
<script src="{{ asset('vendors/scroll/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('vendors/scroll/scrollable-custom.js')}}"></script>


<script src="{{ asset('vendors/chart_am/core.js')}}"></script>
<script src="{{ asset('vendors/chart_am/charts.js')}}"></script>
<script src="{{ asset('vendors/chart_am/animated.js')}}"></script>
<script src="{{ asset('vendors/chart_am/kelly.js')}}"></script>
<script src="{{ asset('vendors/chart_am/chart-custom.js')}}"></script>
<!-- custom js -->
<script src="{{ asset('js/custom.js')}}"></script>
</body>

</html>
