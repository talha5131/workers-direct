@extends('layouts.base')
@section('title','CV Registration')
@section('content')

<!-- jp Tittle Wrapper Start -->

<div class="jp_tittle_main_wrapper">

	<div class="jp_tittle_img_overlay"></div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<div class="jp_tittle_heading_wrapper">

					<div class="jp_tittle_heading">

						<h2>CV Registration</h2>

					</div>

					<div class="jp_tittle_breadcrumb_main_wrapper">

						<div class="jp_tittle_breadcrumb_wrapper">

							<ul>

								<li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>

								<li>CV Registration</li>

							</ul>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<!-- jp Tittle Wrapper End -->

<!-- jp ad post Wrapper Start -->

<div class="jp_adp_main_section_wrapper">

	<div class="container">

		<div class="row">

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

				<div class="jp_adp_form_heading_wrapper">

					<h2> <strong>Job Details </strong></h2>

				</div>

				<div class="row">

					<div class="col-lg-6 col-md-6 col-md-6 col-xs-12">

						<div class="jp_adp_form_wrapper">

							<input id="firstName-error" type="text" placeholder="First Name">

						</div>

					</div>

					<div class="col-lg-6 col-md-6 col-md-6 col-xs-12">

						<div class="jp_adp_form_wrapper">

							<input id="lastName-error" type="text" placeholder="Last Name">

						</div>

					</div>

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

				<div class="jp_adp_textarea_main_wrapper">

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

</div>

<!-- jp ad post Wrapper End -->

<!-- jp downlord Wrapper Start -->

<div class="jp_downlord_main_wrapper">

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

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#firstName-error").hide();
		$("#lastName-error").hide();
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