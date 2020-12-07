@extends('layouts.base')
@section('title','Temporary Jobs Registration Form | Workers Direct')
@section('keywords','temporary,jobs,registration')
@section('description','If you are looking for a Temporary Job or career change, all of our Jobs are published here and updated on regular basis. View our current list of jobs you can register your CV online for vacancies using our online CV Registration form.')
@section('content')

<!-- jp Tittle Wrapper Start -->

<div class="jp_tittle_main_wrapper">

	<div class="jp_tittle_img_overlay"></div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<div class="jp_tittle_heading_wrapper">

					<div class="jp_tittle_heading">

						<h1>Temporary Jobs Registration Form</h1>

					</div>

					<div class="jp_tittle_breadcrumb_main_wrapper">

						<div class="jp_tittle_breadcrumb_wrapper">

							<ul>

								<li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>

								<li>Temporary Jobs Registration Form</li>

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

		<!-- <div class="row">

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

					<div class="jp_adp_form_heading_wrapper">

						<h3>Basic Info</h3>

					</div>

					<div class="jp_adp_form_wrapper">
                        <label for="jobTitle"> Job Title</label>
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

			</div> -->
		<iframe style=width:810px;height:1260px; src='https://workersdirectltd.zohoworkerly.eu/workerly/WebFormServeServlet?rid=9c3c7e330606412acdefd65b6f399f56gid12b1e89568431b14c7293aa4d69c0f0f'></iframe>

	</div>

</div>

<div class="container margin-bottom-30 margin-top-30">

    @include('layouts.why-workers-direct')

</div>

<!-- jp career Wrapper End -->

<!-- jp counter Wrapper Start -->

@include('layouts.number-counter')

<!-- jp counter Wrapper End -->

<!-- aboutus_section end -->


<!-- How We Work -->
@include('layouts.how-we-work')

@endsection