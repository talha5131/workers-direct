@extends('layouts.base')
@section('title','Job Seeker')
@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

<div class="jp_tittle_main_wrapper">
    <div class="jp_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="jp_tittle_heading_wrapper">

                    <div class="jp_tittle_heading">

                        <h2>Job Seeker</h2>

                    </div>

                    <div class="jp_tittle_breadcrumb_main_wrapper">

                        <div class="jp_tittle_breadcrumb_wrapper">

                            <ul>

                                <li><a href="{{url('/')}}">Home</a> <i class="fa fa-angle-right"></i></li>



                                <li>Job Seeker</li>

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
        <div class="row">

            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">

                <div class="about_text_wrapper">

                    <div class="section_heading section_2_heading">

                        <h1>Job <span> Seeker</span></h1>

                    </div>

                </div>

            </div>

            


        </div>

    </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#name-error").hide();
        $("#email-error").hide();
        $("#phone-error").hide();
        $("#address-error").hide();
        $("#jobCategory-error").hide();
        $("#salary-error").hide();
        $("#availability-error").hide();
        $("#cv-error").hide();

        var name_Error = true;
        var email_Error = true;
        var phone_Error = true;
        var address_Error = true;
        var jobCategory_Error = true;
        var salary_Error = true;
        var availability_Error = true;
        var cv_Error = true;

        // Name Validation

        $("#name").keyup(function() {
            name_check();
        });

        function name_check() {
            var name_val = $("#name").val();

            if (name_val.length == "") {
                $("#name-error").show();
                $("#name-error").html("This Field Is Required");
                name_Error = false;
                return false;
            } else {
                $("#name-error").hide();
            }
            if (name_val.length < 3) {
                $("#name-error").show();
                $("#name-error").html("Please Enter A Valid Name");
                name_Error = false;
                return false;
            } else {
                $("#name-error").hide();
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
                $("#email-error").show();
                $("#email-error").html("This Field Is Required");
                email_Error = false;
                return false;
            } else if (atPosition < 1 || dotPosition < atPosition + 2 || dotPosition + 2 >= email_val.length) {
                $("#email-error").show();
                $('#email-error').text("Please enter a valid e-mail address.");
                email_Error = false;
                return false;
            } else {
                $("#email-error").hide();
            }
        }

        // Phone Validation

        $("#phone").keyup(function() {
            phone_check();
        });

        function phone_check() {
            var phone_val = $("#phone").val();

            if (phone_val.length == "") {
                $("#phone-error").show();
                $("#phone-error").html("This Field Is Required");
                phone_Error = false;
                return false;
            } else {
                $("#phone-error").hide();
            }
        }

        // Address Validation

        $("#address").keyup(function() {
            address_check();
        });

        function address_check() {
            var address_val = $("#address").val();

            if (address_val.length == "") {
                $("#address-error").show();
                $("#address-error").html("This Field Is Required");
                address_Error = false;
                return false;
            } else {
                $("#address-error").hide();
            }
        }

        // Job Category Validation

        $("#submit_button").click(function() {
            jobCategory_check();
        });

        function jobCategory_check() {
            var jobCategory_val = $("#jobCategory").val();

            if (jobCategory_val == null) {
                $("#jobCategory-error").show();
                $("#jobCategory-error").html("Please Select Your Relevant Job Category");
                jobCategory_Error = false;
                event.preventDefault()
            } else {
                $("#jobCategory-error").hide();
            }
        }

        $("#jobCategory").click(function() {
            jobCategory_check();
        });

        $("#jobCategory").keyup(function() {
            jobCategory_check();
        });

        // Salary Validation

        $("#desiredSalary").keyup(function() {
            salary_check();
        });

        function salary_check() {
            var salary_val = $("#desiredSalary").val();

            if (salary_val.length == "") {
                $("#salary-error").show();
                $("#salary-error").html("This Field Is Required");
                salary_Error = false;
                return false;
            } else {
                $("#salary-error").hide();
            }
        }

        // Availability Validation

        $("#availability").keyup(function() {
            availability_check();
        });

        function availability_check() {
            var availability_val = $("#availability").val();

            if (availability_val.length == "") {
                $("#availability-error").show();
                $("#availability-error").html("This Field Is Required");
                availability_Error = false;
                return false;
            } else {
                $("#availability-error").hide();
            }
        }

        // CV Validation

        $("#submit_button").click(function() {
            cv_check();
        });

        function cv_check() {
            var cv_val = $("#cv").val();

            if (cv_val == "") {
                $("#cv-error").show();
                $("#cv-error").html("Please Upload Your CV");
                cv_Error = false;

                event.preventDefault()

            } else {
                $("#cv-error").hide();
            }
        }
        $("#cv").click(function() {
            setTimeout(function() {
                cv_check();
            }, 15000);
        });

        $("#submit_button").click(function() {
            var name_Error = true;
            var email_Error = true;
            var phone_Error = true;
            var address_Error = true;
            var jobCategory_Error = true;
            var salary_Error = true;
            var availability_Error = true;
            var cv_Error = true;

            name_check();
            email_check();
            phone_check();
            address_check();
            jobCategory_check();
            salary_check();
            availability_check();
            cv_check();

            if ((name_Error == true) && (phone_Error == true) && (address_Error == true) && (jobCategory_Error == true) && (salary_Error == true) && (availability_Error == true) && (cv_Error == true)) {
                return true;
            } else {
                return false;
            }

        });

    });
</script>
@endsection