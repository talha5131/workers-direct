@extends('layouts.base')

@section('title','Get A Quote')

@section('content')





<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="public/assets/css/richtext.min.css">



<style type="text/css">
    .badge-info {

        color: #fff;

        background-color: #ffb100 !important;

        font-size: 13px;

        margin-right: 12px;

    }



    .richText-toolbar {

        background: #7CC24D !important;

    }



    .richText .richText-toolbar ul li a {

        display: block;

        padding: 10px 13px;

        border: none;

        border-right: 1px solid #121212 !important;

        cursor: pointer;

        -webkit-transition: background-color 0.4s;

        -moz-transition: background-color 0.4s;

        transition: background-color 0.4s;

        color: white;

        font-size: 15px;

    }



    /* .richText .richText-toolbar ul li a span:hover{

		 background-color: red;

	 } */

    .richText-editor {

        background: #fff !important;

        color: #7CC24D;

        border-left: none !important;

    }



    .richText {

        position: relative;

        background-color: #FAFAFA;

        border: none !important;

        color: #333333;

        width: 100%;

    }



    .richText .richText-toolbar ul li a:hover {

        background-color: #3e8e41;

    }
</style>





<div class="jp_tittle_main_wrapper">

    <div class="jp_tittle_img_overlay"></div>

    <div class="container">

        <div class="row">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



                <div class="jp_tittle_heading_wrapper">



                    <div class="jp_tittle_heading">



                        <h2>Get A Quote</h2>



                    </div>



                    <div class="jp_tittle_breadcrumb_main_wrapper">



                        <div class="jp_tittle_breadcrumb_wrapper">



                            <ul>



                                <li><a href="{{url('/')}}">Home</a> <i class="fa fa-angle-right"></i></li>







                                <li>Get A Quote</li>



                            </ul>



                        </div>



                    </div>



                </div>



            </div>



        </div>



    </div>



</div>



<div class="aboutus_section">

    <div class="container">



        <script src='https://workersdirectltd.zohoworkerly.eu/workerly/WebFormServeServlet?rid=f96ff81f5d1288f910c87da650a49165gid12b1e89568431b14c7293aa4d69c0f0f&script=$sYG'></script>

    </div>

</div>



<!-- jp Tittle Wrapper Start -->



<!-- <div class="jp_tittle_main_wrapper">



        <div class="jp_tittle_img_overlay"></div>



        <div class="container">



            <div class="row">



                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



                    <div class="jp_tittle_heading_wrapper">



                        <div class="jp_tittle_heading">



                            <h2>Submit a Job</h2>



                        </div>



                        <div class="jp_tittle_breadcrumb_main_wrapper">



                            <div class="jp_tittle_breadcrumb_wrapper">



                                <ul>



                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>



                                    <li>Submit a Job</li>



                                </ul>



                            </div>



                        </div>



                    </div>



                </div>



            </div>



        </div>



    </div> -->



<!-- jp Tittle Wrapper End -->



<!-- jp ad post Wrapper Start -->



<!-- <div class="jp_adp_main_section_wrapper">



		<div class="container">



			<div class="row">



				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



					<div class="jp_adp_form_heading_wrapper">



						<h2>Job Details</h2>



					</div>



					<div class="jp_adp_form_wrapper">



						<input type="text" placeholder="Job Title">



					</div>



					<div class="jp_adp_form_wrapper">



						<select>



							<option>Job Location</option>



							<option>Job Location</option>



							<option>Job Location</option>



							<option>Job Location</option>



						</select>



					</div>



					<div class="row">



						<div class="col-lg-6 col-md-6 col-md-6 col-xs-12">



							<div class="jp_adp_form_wrapper">



								<input type="text" placeholder="Salary Min">



							</div>



						</div>



						<div class="col-lg-6 col-md-6 col-md-6 col-xs-12">



							<div class="jp_adp_form_wrapper">



								<input type="text" placeholder="Salary Max">



							</div>



						</div>



					</div>



					<div class="jp_adp_form_wrapper">



						<input type="text" placeholder="Notic Period">



					</div>



				</div>



				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">



					<div class="jp_adp_form_heading_wrapper">



						<p>Fields with * are mandetory</p>



					</div>



					<div class="jp_adp_form_wrapper">



						<select>



							<option>Job Category</option>



							<option>Job Category</option>



							<option>Job Category</option>



							<option>Job Category</option>



						</select>



					</div>



					<div class="jp_adp_form_wrapper">



						<select>



							<option>Job Type</option>



							<option>Job Type</option>



							<option>Job Type</option>



							<option>Job Type</option>



						</select>



					</div>



					<div class="jp_adp_form_wrapper">



						<input type="text" placeholder="Skills required">



					</div>



					<div class="jp_adp_form_wrapper">



						<input type="text" placeholder="Joining facilities">



					</div>



				</div>



				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



					<div class="jp_adp_textarea_main_wrapper form-control">



						<textarea rows="7" placeholder="Job Description"></textarea>



					</div>



				</div>



				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



					<div class="jp_adp_choose_resume">



						<p>Company Post</p>



						<div class="custom-input">



						  <span><i class="fa fa-upload"></i> &nbsp;Upload Job Post</span>



						  <input type="file" name="resume" id="resume" />



						</div>



					</div>



				</div>



				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



					<div class="jp_adp_choose_resume_bottom_btn_post">



						<ul>



							<li><a href="#"><i class="fa fa-plus-circle"></i>&nbsp; SUBMIT A JOB</a></li>



						</ul>



					</div>



				</div>



			</div>



		</div>



	</div> -->



<!-- jp ad post Wrapper End -->



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



                        <h1><span>Download</span><br>Job Portal App Now!</h1>



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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script src="public/assets/js/jquery.richtext.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $("#title_error").hide();

        $("#name_error").hide();

        $("#email_error").hide();

        $("#phone_error").hide();

        $("#jobCategory_error").hide();

        $("#joiningDate_error").hide();

        $("#endingDate_error").hide();

        $("#openingDate_error").hide();

        $("#jobTiming_error").hide();

        $("#requirements_error").hide();

        $("#vacancy_error").hide();

        $("#image_error").hide();



        var title_error = true;

        var name_error = true;

        var email_error = true;

        var phone_error = true;

        var jobCategory_error = true;

        var joiningDate_error = true;

        var endingDate_error = true;

        var openingDate_error = true;

        var jobTiming_error = true;

        var requirements_error = true;

        var vacancy_error = true;

        var image_error = true;



        // Title Validation



        $("#title").keyup(function() {

            title_check();

        });



        function title_check() {

            var title_val = $("#title").val();



            if (title_val.length == "") {

                $("#title_error").show();

                $("#title_error").text("This Field Is Required");

                title_error = false;

                return false;

            } else if (title_val.length < 5) {

                $("#title_error").show();

                $("#title_error").text("Please Enter A Valid Job Title");

                title_error = false;

                return false;

            } else {

                $("#title_error").hide();



            }

        }







        // Name Validation



        $("#name").keyup(function() {

            name_check();

        });



        function name_check() {

            var name_val = $("#name").val();



            if (name_val.length == "") {

                $("#name_error").show();

                $("#name_error").text("This Field Is Required");

                name_Error = false;

                return false;

            } else {

                $("#name_error").hide();

            }

            if (name_val.length < 3) {

                $("#name_error").show();

                $("#name_error").text("Please Enter A Valid Name");

                name_Error = false;

                return false;

            } else {

                $("#name_error").hide();

            }

        }



        // Email Validation



        $("#email").keyup(function() {

            email_check();

        });



        function email_check() {

            var email_val = $("#email").val();

            var atPosition = email_val.indexOf("@");

            var dotPosition = email_val.lastIndexOf(".");



            if (email_val.length == "") {

                $("#email_error").show();

                $("#email_error").text("This Field Is Required");

                email_Error = false;

                return false;

            } else if (atPosition < 1 || dotPosition < atPosition + 2 || dotPosition + 2 >= email_val.length) {

                $("#email_error").show();

                $('#email_error').text("Please enter a valid e-mail address.");

                email_Error = false;

                return false;

            } else {

                $("#email_error").hide();

            }

        }



        // Phone Validation



        $("#phone").keyup(function() {

            phone_check();

        });



        function phone_check() {

            var phone_val = $("#phone").val();



            if (phone_val.length == "") {

                $("#phone_error").show();

                $("#phone_error").text("This Field Is Required");

                phone_Error = false;

                return false;

            } else if (phone_val.length < 10) {

                $("#phone_error").show();

                $("#phone_error").text("Please Enter A Valid Phone Number");

                phone_error = false;

                return false;

            } else {

                $("#phone_error").hide();

            }

        }



        // Job Category Validation



        $("#submit_button").click(function() {

            jobCategory_check();

        });



        function jobCategory_check() {

            var jobCategory_val = $("#jobCategory").val();



            if (jobCategory_val == null) {

                $("#jobCategory_error").show();

                $("#jobCategory_error").text("Please Select Your Relevant Job Category");

                jobCategory_Error = false;

                event.preventDefault()

            } else {

                $("#jobCategory_error").hide();

            }

        }



        $("#jobCategory").click(function() {

            jobCategory_check();

        });



        $("#jobCategory").keyup(function() {

            jobCategory_check();

        });



        // Joining Date Val



        $("#joining").keyup(function() {

            joining_check();

        });



        function joining_check() {

            var joiningDate = $("#joining").val();



            if (joiningDate.length == "") {

                $("#joiningDate_error").show();

                $("#joiningDate_error").text("This Field Is Required");

                joiningDate_error = false;

                return false;



            } else {

                $("#joiningDate_error").hide();

            }

        }







        // Ending Date Validation



        $("#endDate").keyup(function() {

            endDate_check();

        });



        function endDate_check() {

            var endDate_val = $("#endDate").val();



            if (endDate_val.length == "") {

                $("#endingDate_error").show();

                $("#endingDate_error").text("This Field Is Required");

                endingDate_error = false;

                return false;

            } else {

                $("#endingDate_error").hide();

            }

        }



        // Opening Date Validation



        $("#openingDate").keyup(function() {

            openingDate_check();

        });



        function openingDate_check() {

            var openingDate_val = $("#openingDate").val();



            if (openingDate_val.length == "") {

                $("#openingDate_error").show();

                $("#openingDate_error").text("This Field Is Required");

                openingDate_error = false;

                return false;

            } else {

                $("#openingDate_error").hide();

            }

        }



        // Job Timing Validation



        $("#submit_button").click(function() {

            jobTiming_check();

        });



        function jobTiming_check() {

            var jobTiming_val = $("#jobTiming").val();



            if (jobTiming_val == null) {

                $("#jobTiming_error").show();

                $("#jobTiming_error").text("This Field Is required");

                jobTiming_error = false;



                event.preventDefault()



            } else {

                $("#jobTiming_error").hide();

            }

        }

        $("#jobTiming").click(function() {

            jobTiming_check();

        });



        $("#jobTiming").keyup(function() {

            jobTiming_check();

        });





        // Job Requirements Validation



        $("#requirements").keyup(function() {

            requirements_check();

        });



        function requirements_check() {

            var requirements_val = $("#requirements").val();



            if (requirements_val == "") {

                $("#requirements_error").show();

                $("#requirements_error").text("This Field Is required");

                requirements_error = false;



                event.preventDefault()



            } else {

                $("#requirements_error").hide();

            }

        }



        // Vacancies Validation



        $("#vacancy").keyup(function() {

            vacancy_check();

        });



        function vacancy_check() {

            var vacancy_val = $("#vacancy").val();



            if (vacancy_val == "") {

                $("#vacancy_error").show();

                $("#vacancy_error").text("This Field Is required");

                vacancy_error = false;



                event.preventDefault()



            } else {

                $("#vacancy_error").hide();

            }

        }



        // CV Validation



        $("#submit_button").click(function() {

            image_check();

        });



        function image_check() {

            var image_val = $("#image").val();



            if (image_val == "") {

                $("#image_error").show();

                $("#image_error").text("Please Upload Your Picture");

                image_error = false;



                event.preventDefault()



            } else {

                $("#image_error").hide();

            }

        }

        $("#image").click(function() {

            setTimeout(function() {

                image_check();

            }, 15000);

        });



        // ------------------------



        $("#submit_button").click(function() {

            var title_error = true;

            var name_error = true;

            var email_error = true;

            var phone_error = true;

            var jobCategory_error = true;

            var joiningDate_error = true;

            var endingDate_error = true;

            var openingDate_error = true;

            var jobTiming_error = true;

            var requirements_error = true;

            var vacancy_error = true;

            var image_error = true;



            title_check();

            name_check();

            email_check();

            phone_check();

            jobCategory_check();

            joining_check();

            endDate_check();

            openingDate_check();

            jobTiming_check();

            requirements_check();

            vacancy_check();

            image_check();





            if ((title_error == true) && (name_error == true) && (email_error == true) && (phone_error == true) && (jobCategory_error == true) && (joiningDate_error == true) && (endingDate_error == true) && (openingDate_error == true) && (jobTiming_error == true) && (requirements_error == true) && (vacancy_error == true) && (image_error == true)) {

                return true;

            } else {

                return false;

            }



        });





    });

    $("#desc").richText();
</script>





@endsection