@extends('layouts.base')
@section('title','Login')
@section('content')

<!-- jp Tittle Wrapper Start -->

<div class="jp_tittle_main_wrapper">

	<div class="jp_tittle_img_overlay"></div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<div class="jp_tittle_heading_wrapper">

					<div class="jp_tittle_heading">

						<h2>Login</h2>

					</div>

					<div class="jp_tittle_breadcrumb_main_wrapper">

						<div class="jp_tittle_breadcrumb_wrapper">

							<ul>

								<li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>

								<li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>

								<li>Login</li>

							</ul>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<!-- jp Tittle Wrapper End -->



<!-- jp login wrapper start -->

<div class="login_section">

	<!-- login_form_wrapper -->

	<div class="login_form_wrapper">

		<div class="container">

			<div class="row">

				<div class="col-md-8 col-md-offset-2">

					<!-- login_wrapper -->

					<h1>LOGIN TO YOUR ACCOUNT</h1>

					<div class="login_wrapper">

						<!-- <div class="row">

							<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">

								<a href="#" class="btn btn-primary"> <span>Login with Facebook</span> <i class="fa fa-facebook"></i> </a>

							</div>

							<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">

								<a href="#" class="btn btn-primary google-plus"> Login with Google <i class="fa fa-google-plus"></i> </a>

							</div>

						</div> -->

						<!-- <h2>or</h2> -->
						<form id="loginForm">
							<div class="formsix-pos">

								<div class="form-group i-email">
									<label class="formsLabel" for="email">Email:</label>
									<input type="text" class="form-control" id="email" name="email" placeholder="email">
									<span class="error" id="emailError"></span>
								</div>

							</div>

							<div class="formsix-e">

								<div class="form-group i-password">
									<label class="formsLabel" for="email">Password:</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password">
									<span class="error" id="passwordError"></span>
								</div>

							</div>

							<div class="login_remember_box">

								<label class="control control--checkbox">Remember me

									<input type="checkbox">

									<span class="control__indicator"></span>

								</label>

								<a href="#" class="forget_password">

									Forgot Password

								</a>

							</div>

							<div class="login_btn_wrapper">

								<!-- <a id="loginBtn" type="submit" class="btn btn-primary login_btn"> Login </a> -->
								<button id="loginBtn" type="submit" class="btn login_btn"> Login </button>

							</div>
						</form>
						<div class="login_message">

							<p>Don’t have an account ? <a href="register"> Register Now </a> </p>

						</div>

					</div>

					<p>In case you are using a public/shared computer we recommend that

						you logout to prevent any un-authorized access to your account</p>

					<!-- /.login_wrapper-->

				</div>

			</div>

		</div>

	</div>

	<!-- /.login_form_wrapper-->

</div>

<!-- jp login wrapper end -->

<!-- jp Newsletter Wrapper Start -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
	// Boolean Variables Initialization

	var emailIsValid = false;
	var passwordIsValid = false;

	// Email Validations Start
	$('#email').keyup(function() {
		// var reg = ^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$;
		var x = $('#email').val();
		var atposition = x.indexOf("@");
		var dotposition = x.lastIndexOf(".");

		if ($('#email').val() == '') {
			$('#emailError').text('This field is required.');
			emailIsValid = false;
		} else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
			$('#emailError').text("Please enter a valid e-mail address.");
			emailIsValid = false;
		} else {
			$('#emailError').text("");
			emailIsValid = true;
		};
	});
	// Email Validations End


	// Password Validations Start
	$('#password').keyup(function() {
		var passWord = $('#password').val();
		var lowerCaseLetters = /[a-z]/g;
		var upperCaseLetters = /[A-Z]/g;
		var numbers = /[0-9]/g;

		if ($('#password').val() == '') {
			$('#passwordError').text('This field is required.');
			passwordIsValid = false;
		} else if (!(passWord.length >= 6)) {
			passwordIsValid = false;
			$('#passwordError').text("Your Password Must Contain atleast 6 Characters");
		} else {
			$('#passwordError').text("");
			passwordIsValid = true;
		}
	});

	// Password Validations End

	// SignUp Form -> Register Button Validations (Enabling & Disabling)
	$('#loginForm').submit(function() {
		if (!(emailIsValid && passwordIsValid)) {
			$('#emailError').text('This field is required.');
			$('#passwordError').text('This field is required.');
			event.preventDefault();
		};
	});
</script>
@endsection