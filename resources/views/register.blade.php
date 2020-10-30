@extends('layouts.base')
@section('title','Register')
@section('content')

<!-- jp Tittle Wrapper Start -->

<div class="jp_tittle_main_wrapper">

    <div class="jp_tittle_img_overlay"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="jp_tittle_heading_wrapper">

                    <div class="jp_tittle_heading">

                        <h2>Register</h2>

                    </div>

                    <div class="jp_tittle_breadcrumb_main_wrapper">

                        <div class="jp_tittle_breadcrumb_wrapper">

                            <ul>

                                <li><a href="{{url('/')}}">Home</a> <i class="fa fa-angle-right"></i></li>

                                <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>

                                <li>Register</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- jp Tittle Wrapper End -->



<!-- jp register wrapper start -->

<div class="register_section">

    <!-- register_form_wrapper -->

    <div class="register_tab_wrapper">

        <div class="container">

            <div class="row">

                <div class="col-md-10 col-md-offset-1">

                    <div role="tabpanel">



                        <!-- Nav tabs -->

                        <ul id="tabOne" class="nav register-tabs">

                            <li class="active"><a href="#contentOne-1" data-toggle="tab">personal account <br> <span>i am looking for a job</span></a>

                            </li>

                            <li><a href="#contentOne-2" data-toggle="tab">company account <br> <span>We are hiring Employees</span></a>

                            </li>

                        </ul>



                        <!-- Tab panes -->

                        <div class="tab-content">

                            <div class="tab-pane fade in active register_left_form" id="contentOne-1">



                                <!-- <div class="jp_regiter_top_heading">

                                    <p>Fields with * are mandetory </p>

                                </div> -->

                                <div class="row">

                                    <form id="personalRegistration">
                                        <!--Form Group-->

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="formsLabel" for="userName">Username</label>
                                            <input type="text" id="userName" name="userName" placeholder="Username">
                                            <span class="error" id="userNameError"></span>
                                        </div>



                                        <!--Form Group-->

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="formsLabel" for="email">Email</label>
                                            <input type="text" id="email" name="email" placeholder="E-mail">
                                            <span class="error" id="emailError"></span>
                                        </div>

                                        <!--Form Group-->

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="formsLabel" for="password">Password</label>
                                            <input type="password" name="password" id="password" placeholder="Password">
                                            <span class="error" id="passwordError"></span>
                                        </div>

                                        <!--Form Group-->

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="formsLabel" for="confirmPassword">Confirm Password</label>
                                            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Re-Enter Password">
                                            <span class="error" id="confirmPasswordError"></span>
                                        </div>

                                        <!--Form Group-->

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="formsLabel" for="currentLocation">Current Location <span>(Optional)</span></label>
                                            <input type="text" name="currentLocation" id="currentLocation" placeholder="Current Location">
                                        </div>

                                        <!--Form Group-->

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="formsLabel" for="phoneNumber">Phone Number</label>
                                            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number">
                                            <span class="error" id="phoneNumberError"></span>
                                        </div>

                                        <!--Form Group-->

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input">

                                            <!-- <input type="file" name="resume"> -->
                                            <label class="formsLabel" for="cv">Upload Your CV</label>
                                            <label for="cv" class="btn btn-success">Choose File</label>
                                            <div class="form_upload_btn_custom">
                                                <input id="cv" type="file" style="background: #7CC24D; border-color: #7CC24D;" name="cv" />
                                            </div>

                                            <p>DOC, DOCX, RTF, PDF FILES - 2MB MAX PREFERRED CV FORMAT</p>

                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="check-box text-center">

                                                <input type="checkbox" name="shipping-option" id="account-option_1"> &ensp;

                                                <!-- <label for="account-option_1">I agreed to the <a href="#" class="check_box_anchr">Terms and Conditions</a> governing the use of jobportal</label> -->
                                                <label for="account-option_1">I agree to the <a href="#" class="check_box_anchr">Terms and Conditions</a>.</label>

                                            </div>

                                        </div>

                                        <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">

                                            <button type="submit" class="btn btn-primary login_btn"> Register </button>

                                        </div>
                                    </form>
                                </div>





                                <div class="login_message">

                                    <p>Already a member? <a href="#"> Login Here </a> </p>

                                </div>

                            </div>



                            <div class="tab-pane fade register_left_form" id="contentOne-2">



                                <div class="jp_regiter_top_heading">

                                    <p>Fields with * are mandetory </p>

                                </div>

                                <div class="row clearfix">

                                    <!--Form Group-->

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="text" name="field-name" value="" placeholder="Username*">

                                    </div>

                                    <!--Form Group-->

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="text" name="field-name" value="" placeholder="Email*">

                                    </div>

                                    <!--Form Group-->

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">



                                        <input type="password" name="field-name" value="" placeholder="password*">

                                    </div>

                                    <!--Form Group-->

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">



                                        <input type="password" name="field-name" value="" placeholder="re-enter password*">

                                    </div>



                                    <!--Form Group-->

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">



                                        <input type="text" name="field-name" value="" placeholder="phone">

                                    </div>



                                    <!--Form Group-->

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">



                                        <input type="text" name="field-name" value="" placeholder="company name">



                                    </div>



                                    <!--Form Group-->

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">



                                        <input type="text" name="field-name" value="" placeholder="website">



                                    </div>

                                    <!--Form Group-->

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">



                                        <input type="text" name="field-name" value="" placeholder="address line">

                                    </div>



                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <div class="check-box text-center">

                                            <input type="checkbox" name="shipping-option" id="account-option_2"> &ensp;

                                            <label for="account-option_2">I agreed to the <a href="#" class="check_box_anchr">Terms and Conditions</a> governing the use of jobportal</label>

                                        </div>

                                    </div>

                                </div>



                                <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">

                                    <a href="#" class="btn btn-primary login_btn"> register </a>

                                </div>

                                <div class="login_message">

                                    <p>Already a member? <a href="#"> Login Here </a> </p>

                                </div>



                            </div>



                        </div>

                        <p class="btm_txt_register_form">In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- jp register wrapper end -->

<!-- jQuery Initialization -->
<script src="public/assets/js/jquery_min.js"></script>
<!-- jQuery Validation -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

<script>
    $(document).ready(function() {
        // alert("ALERT")

    });
    $('#personalRegistration').validate({
        rules: {
            userName: {
                required: true,
            },
        },

        // errorPlacement: function(error, element) {
        //   error.insertAfter(#fullName);
        // }
        errorPlacement: function(error, element) {
            if (element.closest('.i-checks').length === 1) {
                error.insertAfter(element.closest('.i-checks'));
            } else {
                error.insertAfter(element);
            }
            if (element.closest('.i-select').length === 1) {
                error.insertAfter(element.closest('.i-select'));
            } else {
                error.insertAfter(element);
            }
            if (element.closest('.custom_select_box').length === 1) {
                error.insertAfter(element.closest('.custom_select_box'));
            } else {
                error.insertAfter(element);
            }
        },
    });
</script>

@endsection