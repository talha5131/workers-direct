@extends('layouts.base')
@section('title','Recruitment Agency Abbey Hulton')
@section('keywords','engagement,agency,workers')
@section('description','')
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

                        <h1>Terms Of Engagement For Agency Workers</h1>

                    </div>

                    <div class="jp_tittle_breadcrumb_main_wrapper">

                        <div class="jp_tittle_breadcrumb_wrapper">

                            <ul>

                                <li><a href="{{url('/')}}">Home</a> <i class="fa fa-angle-right"></i></li>



                                <li>Terms Of Engagement For Agency Workers</li>

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

                        <h2>Terms Of Engagement For Agency Workers</h2>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



<!-- jp best deal Wrapper Start -->



<div class="jp_best_deal_main_wrapper">

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

                                <h2> <a> Relevant Experience </a> </h2>

                            </div>

                            <div class="content margin-top-10">

                                <p>We make sure all our operatvies Must have minimum 2 - 5 years relevant Experience.</p>

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

                                <h2> <a> 24/7 Availability </a> </h2>

                            </div>

                            <div class="content margin-top-10">

                                <p>Our Customer Service staff available online & on phone 24/7 to fill any urgent vacancy.</p>

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

                                <h2> <a> Flexible & Reliable </a> </h2>

                            </div>

                            <div class="content margin-top-10">

                                <p>All our temps are fully able to start on short noitce whenever require.</p>

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

<div class="container margin-bottom-30 margin-top-30">

    @include('layouts.why-workers-direct')

</div>

<!-- jp counter Wrapper Start -->

@include('layouts.number-counter')


<!-- jp counter Wrapper End -->

<!-- how we work -->

@include('layouts.how-we-work')

@endsection  