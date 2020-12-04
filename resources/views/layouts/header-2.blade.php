<!DOCTYPE html>

<!-- 

Template Name: Workers Direct

Version: 1.0.0

Author: 

Website: 

Purchase: 

-->

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!-->

<html lang="en">

<!--<![endif]-->



<head>


    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P8PDBR5');
    </script>
    <!-- End Google Tag Manager -->


    <meta charset="utf-8" />

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- <meta name="description" content="Workers Direct" /> -->

    <meta name="description" content="@yield('description')">

    <meta name="keywords" content="@yield('keywords')" />

    <meta name="author" content="" />

    <meta name="MobileOptimized" content="320" />

    <script>
        var clicky_site_ids = clicky_site_ids || [];
        clicky_site_ids.push(100621036);
    </script>
    <script async src="//static.getclicky.com/js"></script>

    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/animate.css')}}" />



    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/bootstrap.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/font-awesome.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/fonts.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/reset.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/owl.carousel.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/owl.theme.default.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/flaticon.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/style.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/style_II.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/responsive2.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/preloader.css')}}" />

    <!-- <link rel="stylesheet" href="public/assets/css/richtext.min.css"> -->
    <!-- UPDATED FONT AWESOME  -->



    <!-- favicon links -->

    <link rel="icon" href="{{url('public/assets/images/header/favicon.gif')}}" />

    <style>
        .jp_navi_right_btn_wrapper li:last-child a:hover {
            background: rgba(124, 194, 77, 0.8);
            border: 1px solid #7CC24D;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -moz-transition: all 0.5s;
            transition: all 0.5s;
        }
    </style>

</head>



<body>

    <!-- Google Tag Manager (noscript) -->

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P8PDBR5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- End Google Tag Manager (noscript) -->

    <!-- preloader Start -->

    <div id="preloader">

        <div id="status"><img src="{{url('public/assets/images/header/animated-logo-dark.png')}}" id="preloader_image" alt="loader">

        </div>

    </div>



    <div class="jp_top_header_main_wrapper">

        <div class="container-fluid">

            <div class="row">





                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                    <div class="jp_top_header_left_wrapper">

                        <div class="jp_top_header_left_cont">

                            <ul>

                                <li><a href="{{url('employer')}}"><i class="fa fa-sitemap"></i>&nbsp; Employer</a></li>

                                <li><a href="{{url('job-seeker')}}"><i class="fa fa-graduation-cap"></i>&nbsp; Job Seeker</a></li>

                            </ul>

                        </div>



                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="jp_top_header_left_wrapper">

                        <div class="jp_top_header_left_cont">

                            <p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;<a href="tel:0 203 086 90 80">0 203 086 90 80 </a></p>

                            <p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;<a href="mailto:info@workers-direct.com">info@workers-direct.com</a></p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                    <div class="jp_top_header_right_wrapper">

                        <div class="jp_top_header_right_cont">

                            <ul>

                                <li><a href="{{url('register')}}"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li>

                                <li><a href="{{url('login')}}"><i class="fa fa-sign-in"></i>&nbsp; LOGIN</a></li>

                            </ul>

                        </div>



                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Top Header Wrapper End -->

    <!-- Header Wrapper Start -->

    <div class="jp_top_header_img_wrapper">

        <div class="gc_main_menu_wrapper">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">

                        <div class="gc_header_wrapper">

                            <div class="gc_logo">

                                <a href="{{url('/')}}"><img src="{{asset('public/assets/images/header/animated-logo-dark.png')}}" alt="Logo" title="Workers Direct" class="img-responsive"></a>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 full_width">

                        <div class="header-area hidden-menu-bar stick" id="sticker">

                            <!-- mainmenu start -->

                            <div class="mainmenu">


                                <ul>

                                    <li class="gc_main_navigation parent"><a href="{{url('about-us')}}" class="gc_main_navigation">About</a></li>

                                    <li class="gc_main_navigation parent"><a href="{{url('why-us')}}" class="gc_main_navigation">Why Us</a></li>

                                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">How We Work <i class="fa fa-angle-down"></i></a>

                                        <ul>

                                            <li class="parent"><a href="{{url('our-approach')}}">Our Approach </a></li>

                                            <li class="parent"><a href="{{url('our-statistics')}}">Our Statistics </a></li>

                                            <li class="parent"><a href="{{url('our-gurantee')}}">Our Guarantee </a></li>

                                            <li class="parent"><a href="#">Our Clients </a></li>


                                        </ul>

                                    </li>

                                    <li class="has-mega"><a href="#" class="gc_main_navigation"> Services <i class="fa fa-angle-down"></i></a>

                                        <!-- mega menu start -->

                                        <ul class="mega_menu" style="width: 1295px; left: -27%;">

                                            <li class="services-mega-box">

                                                <div class="row">

                                                    <div class="col-lg-2 col-md-2">

                                                        <div class="list-item-service widthFull">
                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services')}}">Staffing </a>
                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/CONSTRUCTION STAFF/construction_staff_2.jpg')}}" alt="about-img" height="100%" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/temporary-staffing')}}">Hire Temp </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/TEMP JOBS LONDON/temp-jobs-london_3.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/admin-staff')}}">Admin </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/SERVICE ADMIN/service-admin_1.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                    </div>

                                                    <div class="col-lg-2 col-md-2">

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/catering-staff')}}">Catering </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/Catering Staff/catering_staff_2.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/hospitality-staff')}}">Hospitality </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/HOSPITALITY STAFF/hospitality_staff_4.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/healthcare-staff')}}">Healthcare </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/HEALTHCARE STAFF/healthcare_staff_1.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                    </div>

                                                    <div class="col-lg-2 col-md-2">

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/school-staffing')}}">Academics </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/SCHOOL STAFFING/SCHOOL_STAFFING_1.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/reception-staff')}}">Receptionist </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/RECEPTION STAFF/reception_staff_3.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/personal-assistant')}}">PA </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/SERVICE ADMIN/service-admin_3.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                    </div>

                                                    <div class="col-lg-2 col-md-2">

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/construction-staff')}}">Construction </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/CONSTRUCTION STAFF/construction_staff_1.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/event-staff')}}">Events </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/EVENT STAFF/event_staff_3.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/industrial-staff')}}">Industrial </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/About/about-3.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                    </div>

                                                    <div class="col-lg-2 col-md-2">

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/warehouse-staff')}}">Warehouse </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/WAREHOUSE STAFF/warehouse_staff_3.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/picker-packer')}}">Packers </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/PICKER & PACKER/picker_&_packer_5.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service widthFull">

                                                            <i class="green fa fa-plus-circle"></i> <a href="{{url('staffing-services/van-drivers')}}">Drivers </a>

                                                        </div>

                                                        <div>
                                                            <img class="img-responsive header_services_img_size" src="{{asset('public/assets/images/page-pictures/SCHOOL BUS DRIVER/school-bus-driver_2.jpg')}}" alt="about-img" style="cursor: default;">
                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                        <div class="list-item-service">


                                                        </div>

                                                    </div>

                                                    <div class="col-lg-2 col-md-2">
                                                        <img class="img-responsive margin-top-40" src="{{asset('public/assets/images/content/header-image.jpeg')}}" alt="about-img" style="cursor: default; width: 100%; height: 380px;">

                                                    </div>

                                                </div>

                                            </li>

                                        </ul>

                                    </li>

                                    <li class="gc_main_navigation parent"><a href="{{url('employer')}}" class="gc_main_navigation">Looking For Staff?</a></li>

                                    <li class="gc_main_navigation parent"><a href="{{url('job-seeker')}}" class="gc_main_navigation">Looking For Job?</a></li>

                                    <li class="gc_main_navigation parent"><a href="#" class="gc_main_navigation">Jobs</a></li>

                                    <li class="gc_main_navigation parent"><a href="{{url('location')}}" class="gc_main_navigation">Locations</a></li>

                                    <li class="gc_main_navigation parent"><a href="{{url('contact-us')}}" class="gc_main_navigation">Contact</a></li>

                                </ul>

                            </div>

                            <!-- mainmenu end -->

                            <!-- mobile menu area start -->

                            <header class="mobail_menu">

                                <div class="container-fluid">

                                    <div class="row">

                                        <div class="col-xs-6 col-sm-6">

                                            <div class="gc_logo">

                                                <a href="{{url('/')}}"><img src="{{asset('public/assets/images/header/animated-logo-wd.png')}}" alt="Logo" title="Grace Church"></a>

                                            </div>

                                        </div>

                                        <div class="col-xs-6 col-sm-6">

                                            <div class="cd-dropdown-wrapper">

                                                <a class="house_toggle" href="#0">

                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                                        <g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#ffffff" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#ffffff" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#ffffff" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#ffffff" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#ffffff" />
                                                            </g>
                                                        </g>
                                                    </svg>

                                                </a>

                                                <nav class="cd-dropdown">



                                                    <a href="{{url('/')}}"><img src="{{asset('public/assets/images/header/animated-logo-dark.png')}}" alt="Logo" title="Grace Church"></a>



                                                    <a href="#0" class="cd-close">Close</a>

                                                    <ul class="cd-dropdown-content">



                                                        <li>

                                                            <a href="{{url('about-us')}}">About Us</a>

                                                        </li>

                                                        <li><a href="{{url('why-us')}}">Why Us</a></li>

                                                        <!-- .has-children -->

                                                        <li class="has-children">

                                                            <a href="#">How We Work</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">

                                                                <li class="go-back"><a href="#0">Menu</a></li>

                                                                <li class="parent"><a href="{{url('our-approach')}}">Our Approach </a></li>

                                                                <li class="parent"><a href="{{url('our-statistics')}}">Our Statistics </a></li>

                                                                <li class="parent"><a href="{{url('our-gurantee')}}">Our Guarantee </a></li>

                                                                <li class="parent"><a href="#">Our Clients </a></li>


                                                            </ul>

                                                        </li>


                                                        <!-- .cd-secondary-dropdown -->

                                                        </li>

                                                        <li class="has-children">

                                                            <a href="#">Services</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">

                                                                <li class="go-back"><a href="#0">Menu</a></li>

                                                                <li><a href="{{url('staffing-services')}}">Staffing </a></li>
                                                                <li><a href="{{url('staffing-services/temporary-staffing')}}">Hire Temp </a></li>
                                                                <li><a href="{{url('staffing-services/admin-staff')}}">Admin </a></li>
                                                                <li><a href="{{url('staffing-services/catering-staff')}}">Catering </a></li>
                                                                <li><a href="{{url('staffing-services/hospitality-staff')}}">Hospitality </a></li>
                                                                <li><a href="{{url('staffing-services/school-staffing')}}">Academics </a></li>
                                                                <li><a href="{{url('staffing-services/reception-staff')}}">Receptionist </a></li>
                                                                <li><a href="{{url('staffing-services/personal-assistant')}}">PA </a></li>
                                                                <li><a href="{{url('staffing-services/construction-staff')}}">Construction </a></li>
                                                                <li><a href="{{url('staffing-services/event-staff')}}">Events </a></li>
                                                                <li><a href="{{url('staffing-services/industrial-staff')}}">Industrial </a></li>
                                                                <li><a href="{{url('staffing-services/warehouse-staff')}}">Warehouse </a></li>
                                                                <li><a href="{{url('staffing-services/picker-packer')}}">Packers </a></li>
                                                                <li><a href="{{url('staffing-services/van-drivers')}}">Drivers </a></li>

                                                            </ul>

                                                            <!-- .cd-secondary-dropdown -->

                                                        </li>

                                                        <!-- .has-children -->

                                                        <li>

                                                            <a href="{{url('employer')}}">Looking For Staff</a>


                                                            <!-- .cd-secondary-dropdown -->

                                                        </li>

                                                        <!-- .has-children -->

                                                        <li>

                                                            <a href="{{url('job-seeker')}}">Looking For Job?</a>

                                                            <!-- <ul class="cd-secondary-dropdown is-hidden">

                                                                <li class="go-back"><a href="#0">Menu</a></li>

                                                                <li>

                                                                    <a href="blog_left.php ">Blog-Left</a>

                                                                </li>

                                                                <li>

                                                                    <a href="blog_right.php ">Blog-Right</a>

                                                                </li>

                                                                <li>

                                                                    <a href="blog_single_left.php ">Blog-Single-Left</a>

                                                                </li>

                                                                <li>

                                                                    <a href="blog_single_right.php ">Blog-Single-Left</a>

                                                                </li>

                                                            </ul> -->

                                                            <!-- .cd-secondary-dropdown -->

                                                        </li>

                                                        <!-- .has-children -->

                                                        <li><a href="{{url('jobs')}}">Jobs</a></li>

                                                        <li><a href="{{url('location')}}">Locations</a></li>

                                                        <li><a href="{{url('contact-us')}}">Contact</a></li>

                                                        <!-- <li>

                                                            <a href="register ">Sign Up</a>

                                                        </li>

                                                        <li>

                                                            <a href="login ">Login</a>

                                                        </li> -->

                                                    </ul>

                                                    <!-- .cd-dropdown-content -->

                                                </nav>

                                                <!-- .cd-dropdown -->

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <!-- .cd-dropdown-wrapper -->

                            </header>

                        </div>

                    </div>

                    <!-- mobile menu area end -->

                    <div class="col-lg-2 col-md-2  hidden-sm hidden-xs">

                        <div class="jp_navi_right_btn_wrapper">

                            <ul>

                                <li><a href="{{url('submit-a-job')}}"><i class="white fa fa-plus-circle"></i> Order Staff</a>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>