@extends('layouts.base')
@section('title','Employer')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<style>
    .font-size-icon {
        font-size: 55px;
    }
</style>

<!-- Top Scroll End -->

<!-- Top Header Wrapper Start -->



<!-- jp Tittle Wrapper Start -->

<div class="jp_tittle_main_wrapper">

    <div class="jp_tittle_img_overlay"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="jp_tittle_heading_wrapper">

                    <div class="jp_tittle_heading">

                        <h1>Employers</h1>

                    </div>

                    <div class="jp_tittle_breadcrumb_main_wrapper">

                        <div class="jp_tittle_breadcrumb_wrapper">

                            <ul>

                                <li><a href="{{url('/')}}">Home</a> <i class="fa fa-angle-right"></i></li>



                                <li>Employers</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- jp Tittle Wrapper End -->

<!-- TemporaryStaffing_section start-->

<div class="aboutus_section">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12  margin-bottom-20">

                <div class="about_text_wrapper">

                    <div class="section_heading section_2_heading">

                        <h2>Employers</h2>

                    </div>

                </div>

            </div>



            <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12 pl-0">

                <div class="about_text_wrapper ">

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

                        <p>At Workers Direct we pride ourselves in fulfilling your every staffing need. Our team of experienced HR experts work to ensure that they find the perfect staff for you, whatever you need. We are well-versed in the most relevant, up to date regulations regarding human resources and the varying responsibilities any role can include. Workers Direct is dedicated to providing you with the solution to your staffing situation.</p>

                    </div>
                    <!-- <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 margin-top-20">
                        <img class="image-style-border" src="public/assets/images/page-pictures/admin staff/admin_staff_2.jpg" alt="Temp Agency London" height="300px" width="100%">
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 margin-top-20">
                        <img class="image-style-border" src="public/assets/images/page-pictures/admin staff/admin_staff_3.jpg" alt="Temp Agency London" height="300px" width="100%">
                    </div> -->

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 margin-top-20">

                        <div class="section_heading section_2_heading">

                            <h2> Professional & Efficient Recruitment Services </h2>

                        </div>

                        <p> We have a reputation for delivering professional & efficient recruitment services to our clients, and are committed to meeting the high targets that we set ourselves. We promise, and deliver, the best service possible. Workers Direct strive to leave every employer that requests our help more than satisfied with the staff and service that they receive from us.
                        </p>
                        <p>We offer a range of high quality services to meet the needs of the employers we co-operate with, locating and identifying the correct staff for you based upon the needs of your business. We make sure that the response to every request exceeds your expectations.</p>


                    </div>

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 margin-top-20">

                        <div class="section_heading section_2_heading">

                            <h2>Quick Hire</h2>

                        </div>

                        <p>
                            We understand how important it is to get things done quickly in the business world. Recruitment often drags on for weeks or months if it isn’t done by professionals; with Workers Direct recruitment agency you will benefit from speedy results.
                        </p>
                    </div>

                    @include('layouts.why-workers-direct')

                </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 margin-top-40">

                <div class="jp_first_right_sidebar_main_wrapper">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="jp_add_resume_wrapper">

                                <div class="jp_add_resume_img_overlay"></div>

                                <div class="jp_add_resume_cont">

                                    <img src="public/assets/images/content/resume_logo.png" alt="logo" />

                                    <h4>Get Best Matched Candidates On your Email.</h4>

                                    <ul>

                                        <li><a href="{{url('submit-a-job')}}"><i class="fa fa-plus-circle"></i> Post A Job</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Hire a Temp</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content" style="padding-bottom: 25px;">
                                    <ul>
                                        <li><i class="fa fa-caret-right"></i> <a href="service-administrator">Administrative</a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="staffing-services/reception-staff">Receptionist</a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="personal-assistant">PA</a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="kitchen-assistant">Kitchen Assistant</a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="grill-chef">Chef/Cook</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">KP</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="jobs/general-labourer">General Labourer</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="carpenter-multi-skilled">Multi-Skilled Operative</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">Handyman</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="caretaker-bus-driver">Driver</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="staffing-services/warehouse-staff">Warehouse Operative</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="it-support-technician">IT Professional</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="data-entry-operator">Data Entry Staff</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">Career</a></li>
                                        <li><i class="fa fa-plus-circle" style="color: #797979 !important;"></i> <a href="nursery-nurses" style="color: #797979 !important;text-transform: capitalize;font-weight: normal;">Nurse</a></li>
                                    </ul>
                                    <a href="{{url('submit-a-job')}}" class="bookNowBtn"> Book Now </a>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="jp_spotlight_main_wrapper">

                                <div class="spotlight_header_wrapper">

                                    <h4>Job Spotlight</h4>

                                </div>

                                <div class="jp_spotlight_slider_wrapper">

                                    <div class="owl-carousel owl-theme">

                                        <div class="item">

                                            <div class="jp_spotlight_slider_img_Wrapper">

                                                <img src="public/assets/images/content/spotlight_img.jpg" alt="spotlight_img" />

                                            </div>

                                            <div class="jp_spotlight_slider_cont_Wrapper">

                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>

                                                <p>Webstrot Technology Ltd.</p>

                                                <ul>

                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>

                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>

                                                </ul>

                                            </div>

                                            <div class="jp_spotlight_slider_btn_wrapper">

                                                <div class="jp_spotlight_slider_btn">

                                                    <ul>

                                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="item">

                                            <div class="jp_spotlight_slider_img_Wrapper">

                                                <img src="public/assets/images/content/spotlight_img.jpg" alt="spotlight_img" />

                                            </div>

                                            <div class="jp_spotlight_slider_cont_Wrapper">

                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>

                                                <p>Webstrot Technology Ltd.</p>

                                                <ul>

                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>

                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>

                                                </ul>

                                            </div>

                                            <div class="jp_spotlight_slider_btn_wrapper">

                                                <div class="jp_spotlight_slider_btn">

                                                    <ul>

                                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="item">

                                            <div class="jp_spotlight_slider_img_Wrapper">

                                                <img src="public/assets/images/content/spotlight_img.jpg" alt="spotlight_img" />

                                            </div>

                                            <div class="jp_spotlight_slider_cont_Wrapper">

                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>

                                                <p>Webstrot Technology Ltd.</p>

                                                <ul>

                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>

                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>

                                                </ul>

                                            </div>

                                            <div class="jp_spotlight_slider_btn_wrapper">

                                                <div class="jp_spotlight_slider_btn">

                                                    <ul>

                                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="jp_rightside_job_categories_wrapper">

                                <div class="jp_rightside_job_categories_heading">

                                    <h4>Jobs by Category</h4>

                                </div>

                                <div class="jp_rightside_job_categories_content">

                                    <ul>

                                        <li><i class="fa fa-caret-right"></i> <a href="#">Graphic Designer <span>(214)</span></a></li>

                                        <li><i class="fa fa-caret-right"></i> <a href="#">Engineering Jobs <span>(514)</span></a></li>

                                        <li><i class="fa fa-caret-right"></i> <a href="#">Mainframe Jobs <span>(554)</span></a></li>

                                        <li><i class="fa fa-caret-right"></i> <a href="#">Legal Jobs <span>(457)</span></a></li>

                                        <li><i class="fa fa-caret-right"></i> <a href="#">IT Jobs <span>(1254)</span></a></li>

                                        <li><i class="fa fa-caret-right"></i> <a href="#">R&D Jobs <span>(554)</span></a></li>

                                        <li><i class="fa fa-caret-right"></i> <a href="#">Government Jobs <span>(350)</span></a></li>

                                        <li><i class="fa fa-caret-right"></i> <a href="#">PSU Jobs <span>(221)</span></a></li>

                                        <li><i class="fa fa-plus-circle"></i> <a href="#">View All Categories</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div> -->





                    </div>

                </div>

            </div>





            <!-- <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 margin-bottom-20"> -->



            <!-- </div> -->



        </div>

    </div>

</div>



<!-- jp best deal Wrapper Start -->
<div class="jp_best_deal_main_wrapper">
    <div class="about_text_wrapper" style="position: absolute; top: 1914px; left: 424px; z-index: 1000;">
        <h2><strong> Workers Direct - Your Staffing Partner </strong></h2>
    </div>
    <div class="container">



        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">

                <a href="#">

                    <div class="box">

                        <div class="grid-box">

                            <div class="iconn green">

                                <i class=" font-size-icon green far fa-check-square"></i>

                            </div>

                            <div class="heading">

                                <h2> <a> Quick Hire </a> </h2>

                            </div>

                            <div class="content margin-top-10">

                                <p>We understand how important it is to get things done quickly in the business world. Recruitment often drags on for weeks or months if it isn’t done by professionals; with Workers Direct recruitment agency you will benefit from speedy results.</p>

                            </div>

                        </div>

                    </div>

                </a>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">

                <a href="#">

                    <div class="box">



                        <div class="grid-box">

                            <div class="iconn green">

                                <i class="font-size-icon green far fa-hand-point-down"></i>

                            </div>

                            <div class="heading">

                                <h2> <a> No Upfront Fees </a> </h2>

                            </div>

                            <div class="content margin-top-10">

                                <p>When you become a client with Worker Direct Ltd. you won’t need to pay any upfront costs to join. This means no hefty start-up fees to get your recruitment drive going.</p>

                            </div>



                        </div>



                    </div>

                </a>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">

                <a href="#">

                    <div class="box">



                        <div class="grid-box">

                            <div class="iconn green">

                                <i class="green font-size-icon fas fa-paper-plane"></i>

                            </div>

                            <div class="heading">

                                <h2> <a> No Placement, No Fee</a> </h2>

                            </div>

                            <div class="content margin-top-10">

                                <p>As well as the free cost of joining us as a client, you won’t be made to pay a thing unless we successfully manage to place a suitable candidate into your company.</p>

                            </div>

                        </div>

                    </div>

                </a>

            </div>
        </div>
        <div class="row margin-top-30">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">

                <a href="#">

                    <div class="box">

                        <div class="grid-box">

                            <div class="iconn green">

                                <i class="font-size-icon green fa fa-graduation-cap"></i>

                            </div>

                            <div class="heading">

                                <h2> <a> Expertise </a> </h2>

                            </div>

                            <div class="content margin-top-10">

                                <p>Our recruiting team have worked across a diverse array of sectors over the years, so we closely understand many industries. We’ve worked with clients from construction to hospitality so get in touch whatever your line of work.</p>

                            </div>

                        </div>

                    </div>

                </a>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">

                <a href="#">

                    <div class="box">



                        <div class="grid-box">

                            <div class="iconn green">

                                <i class="font-size-icon green fas fa-chess-knight"></i>

                            </div>

                            <div class="heading">

                                <h2> <a> Modern Recruitment Strategies</a> </h2>

                            </div>

                            <div class="content margin-top-10">

                                <p>Finding the best candidates in the modern day requires the latest recruitment strategies. We use innovative recruiting techniques to narrow down the most capable individuals for your business.</p>

                            </div>



                        </div>



                    </div>

                </a>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">

                <a href="#">

                    <div class="box">



                        <div class="grid-box">

                            <div class="iconn green">

                                <i class="green font-size-icon fa fa-sitemap"></i>

                            </div>

                            <div class="heading">

                                <h2> <a> Right Staff on Right time </a> </h2>

                            </div>

                            <div class="content margin-top-10">

                                <p>Whether your business needs temporary additions or you’re looking to add someone permanent, Worker Direct has the skill and experience to find the right talent on right time according to job requirements.</p>

                            </div>

                        </div>

                    </div>

                </a>

            </div>
        </div>


    </div>

</div>
<!-- jp career Wrapper Start -->



<!-- jp career Wrapper End -->

<!-- jp counter Wrapper Start -->

<!-- <div class="jp_counter_main_wrapper">
    <div class="container-fluid pl-0 pr-0">
        <div class="row">
            <div class="gc_counter_cont_wrapper_new col-md-2">
                <div class="count-description-new"> <span class="timer">52950</span><i class="slider_icon_size fa fa-plus"></i>
                    <h5 class="con1">WORKERS</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper_new col-md-2">
                <div class="count-description-new"> <span class="timer">98%</span>
                    <i class="slider_icon_size fas fa-percent"></i>
                    <h5 class="con2">ENJOY WORK WITH US</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper_new col-md-2">
                <div class="count-description-new"> <span class="timer">92</span><i class="slider_icon_size fas fa-percent"></i>
                    <h5 class="con3">RETAINED WORKERS</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper_new col-md-2">
                <div class="count-description-new"> <span class="timer">572847</span><i class="slider_icon_size fa fa-plus"></i>
                    <h5 class="con4">WORKED HOURS</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper_new col-md-2">
                <div class="count-description-new"> <span class="timer">1200</span><i class="slider_icon_size fa fa-plus"></i>
                    <h5 class="con4">CLIENTS</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper_new col-md-2">
                <div class="count-description-new"> <span class="timer">1434</span><i class="slider_icon_size fa fa-plus"></i>
                    <h5 class="con4">SITES</h5>
                </div>
            </div>
        </div>

    </div>
</div> -->

@include('layouts.number-counter')

<!-- <div class="jp_counter_main_wrapper">

    <div class="gc_counter_cont_wrapper">

        <div class="count-description">

            <span class="timer">2540</span><i class="fa fa-plus"></i>

            <h5 class="con1">Jobs Available</h5>

        </div>

    </div>

    <div class="gc_counter_cont_wrapper2">

        <div class="count-description">

            <span class="timer">7325</span><i class="fa fa-plus"></i>

            <h5 class="con2">Members</h5>

        </div>

    </div>

    <div class="gc_counter_cont_wrapper3">

        <div class="count-description">

            <span class="timer">1924</span><i class="fa fa-plus"></i>

            <h5 class="con3">Resumes</h5>

        </div>

    </div>

    <div class="gc_counter_cont_wrapper4">

        <div class="count-description">

            <span class="timer">4275</span><i class="fa fa-plus"></i>

            <h5 class="con4">Company</h5>

        </div>

    </div>

</div> -->

<!-- jp counter Wrapper End -->

<!-- aboutus_section end -->

@include('layouts.how-we-work')


<!--end of /.col-sm-6-->

<!-- jp downlord Wrapper Start -->

<!-- <div class="jp_downlord_main_wrapper">

    <div class="jp_downlord_img_overlay"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">

                <div class="jp_down_mob_img_wrapper">

                    <img src="public/assets/images/content/mobail.png" alt="mobail_img" />

                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="ss_download_wrapper_details">

                    <h2><span>Download</span><br>Job Portal App Now!</h2>

                    <p>Fast, Simple & Delightful. All it takes is 30 seconds to Download.</p>



                    <a href="https://play.google.com/store/apps/details?id=com.mst_developers.workers_direct&hl=en" class="ss_playstore"><span><i class="fa fa-android" aria-hidden="true"></i></span> Play Store</a>







                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 visible-sm visible-xs">

                <div class="jp_down_mob_img_wrapper">

                    <img src="public/assets/images/content/mobail.png" class="img-responsive" alt="mobail_img" />

                </div>

            </div>

        </div>

    </div>

</div> -->

<!-- jp downlord Wrapper End -->

@endsection