@extends('layouts.base')
@section('title','CV Registration')
@section('content')

<!-- for input field arrows remove -->
<style>
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
</style>
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

								<li><a href="{{url('/')}}">Home</a> <i class="fa fa-angle-right"></i></li>

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

<div class="aboutus_section">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">

				<div class="about_text_wrapper">

					<div class="section_heading section_2_heading">

						<h1>CV <span> Registration</span></h1>

					</div>

				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form action="" id="form-validation-job-seeker" class="col-xs-12" name="job-seeker">

					<div class="jp_contact_form_box">


						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

							<div class="jp_contact_inputs_wrapper">

								<i class="fa fa-user"></i><input type="text" name="name" id="name" placeholder="Full Name" autocomplete="off">
								<span style="color: #ed244f;" id="name-error"></span>

							</div>


						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

							<div class="jp_contact_inputs_wrapper jp_contact_inputs2_wrapper">

								<i class="fa fa-envelope"></i><input type="text" name="email" id="email" placeholder="Email " autocomplete="off">
								<span style="color: #ed244f;" id="email-error"></span>
							</div>

						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

							<div class="row">


								<div class="phone_number_custom_style jp_contact_inputs3_wrapper col-lg-3 col-md-3 col-sm-2 col-xs-2">
									<select name="CC" id="CC">
										<option data-countryCode="GB" value="+44" Selected>+44</option>
										<option data-countryCode="US" value="+1">+1</option>
										<optgroup label="Other countries">
											<option data-countryCode="DZ" value="+213">+213</option>
											<option data-countryCode="AD" value="+376">+376</option>
											<option data-countryCode="AO" value="+244">+244</option>
											<option data-countryCode="AI" value="+1264">+1264</option>
											<option data-countryCode="AG" value="+1268">+1268</option>
											<option data-countryCode="AR" value="+54">+54</option>
											<option data-countryCode="AM" value="+374">+374</option>
											<option data-countryCode="AW" value="+297">+297</option>
											<option data-countryCode="AU" value="+61">+61</option>
											<option data-countryCode="AT" value="+43">+43</option>
											<option data-countryCode="AZ" value="+994">+994</option>
											<option data-countryCode="BS" value="+1242">+1242</option>
											<option data-countryCode="BH" value="+973">+973</option>
											<option data-countryCode="BD" value="+880">+880</option>
											<option data-countryCode="BB" value="+1246">+1246</option>
											<option data-countryCode="BY" value="+375">+375</option>
											<option data-countryCode="BE" value="+32">+32</option>
											<option data-countryCode="PK" value="+92">+92</option>
											<option data-countryCode="BZ" value="+501">+501</option>
											<option data-countryCode="BJ" value="+229">+229</option>
											<option data-countryCode="BM" value="+1441">+1441</option>
											<option data-countryCode="BT" value="+975">+975</option>
											<option data-countryCode="BO" value="+591">+591</option>
											<option data-countryCode="BA" value="+387">+387</option>
											<option data-countryCode="BW" value="+267">+267</option>
											<option data-countryCode="BR" value="+55">+55</option>
											<option data-countryCode="BN" value="+673">+673</option>
											<option data-countryCode="BG" value="+359">+359</option>
											<option data-countryCode="BF" value="+226">+226</option>
											<option data-countryCode="BI" value="+257">+257</option>
											<option data-countryCode="KH" value="+855">+855</option>
											<option data-countryCode="CM" value="+237">+237</option>
											<option data-countryCode="CA" value="+1">+1</option>
											<option data-countryCode="CV" value="+238">+238</option>
											<option data-countryCode="KY" value="+1345">+1345</option>
											<option data-countryCode="CF" value="+236">+236</option>
											<option data-countryCode="CL" value="+56">+56</option>
											<option data-countryCode="CN" value="+86">+86</option>
											<option data-countryCode="CO" value="+57">+57</option>
											<option data-countryCode="KM" value="+269">+269</option>
											<option data-countryCode="CG" value="+242">+242</option>
											<option data-countryCode="CK" value="+682">+682</option>
											<option data-countryCode="CR" value="+506">+506</option>
											<option data-countryCode="HR" value="+385">+385</option>
											<option data-countryCode="CU" value="+53">+53</option>
											<option data-countryCode="CY" value="+90392">+90392</option>
											<option data-countryCode="CY" value="+357">+357</option>
											<option data-countryCode="CZ" value="+42">+42</option>
											<option data-countryCode="DK" value="+45">+45</option>
											<option data-countryCode="DJ" value="+253">+253</option>
											<option data-countryCode="DM" value="+1809">+1809</option>
											<option data-countryCode="DO" value="+1809">+1809</option>
											<option data-countryCode="EC" value="+593">+593</option>
											<option data-countryCode="EG" value="+20">+20</option>
											<option data-countryCode="SV" value="+503">+503</option>
											<option data-countryCode="GQ" value="+240">+240</option>
											<option data-countryCode="ER" value="+291">+291</option>
											<option data-countryCode="EE" value="+372">+372</option>
											<option data-countryCode="ET" value="+251">+251</option>
											<option data-countryCode="FK" value="+500">+500</option>
											<option data-countryCode="FO" value="+298">+298</option>
											<option data-countryCode="FJ" value="+679">+679</option>
											<option data-countryCode="FI" value="+358">+358</option>
											<option data-countryCode="FR" value="+33">+33</option>
											<option data-countryCode="GF" value="+594">+594</option>
											<option data-countryCode="PF" value="+689">+689</option>
											<option data-countryCode="GA" value="+241">+241</option>
											<option data-countryCode="GM" value="+220">+220</option>
											<option data-countryCode="GE" value="+7880">+7880</option>
											<option data-countryCode="DE" value="+49">+49</option>
											<option data-countryCode="GH" value="+233">+233</option>
											<option data-countryCode="GI" value="+350">+350</option>
											<option data-countryCode="GR" value="+30">+30</option>
											<option data-countryCode="GL" value="+299">+299</option>
											<option data-countryCode="GD" value="+1473">+1473</option>
											<option data-countryCode="GP" value="+590">+590</option>
											<option data-countryCode="GU" value="+671">+671</option>
											<option data-countryCode="GT" value="+502">+502</option>
											<option data-countryCode="GN" value="+224">+224</option>
											<option data-countryCode="GW" value="+245">+245</option>
											<option data-countryCode="GY" value="+592">+592</option>
											<option data-countryCode="HT" value="+509">+509</option>
											<option data-countryCode="HN" value="+504">+504</option>
											<option data-countryCode="HK" value="+852">+852</option>
											<option data-countryCode="HU" value="+36">+36</option>
											<option data-countryCode="IS" value="+354">+354</option>
											<option data-countryCode="IN" value="+91">+91</option>
											<option data-countryCode="ID" value="+62">+62</option>
											<option data-countryCode="IR" value="+98">+98</option>
											<option data-countryCode="IQ" value="+964">+964</option>
											<option data-countryCode="IE" value="+353">+353</option>
											<option data-countryCode="IL" value="+972">+972</option>
											<option data-countryCode="IT" value="+39">+39</option>
											<option data-countryCode="JM" value="+1876">+1876</option>
											<option data-countryCode="JP" value="+81">+81</option>
											<option data-countryCode="JO" value="+962">+962</option>
											<option data-countryCode="KZ" value="+7">+7</option>
											<option data-countryCode="KE" value="+254">+254</option>
											<option data-countryCode="KI" value="+686">+686</option>
											<option data-countryCode="KP" value="+850">+850</option>
											<option data-countryCode="KR" value="+82">+82</option>
											<option data-countryCode="KW" value="+965">+965</option>
											<option data-countryCode="KG" value="+996">+996</option>
											<option data-countryCode="LA" value="+856">+856</option>
											<option data-countryCode="LV" value="+371">+371</option>
											<option data-countryCode="LB" value="+961">+961</option>
											<option data-countryCode="LS" value="+266">+266</option>
											<option data-countryCode="LR" value="+231">+231</option>
											<option data-countryCode="LY" value="+218">+218</option>
											<option data-countryCode="LI" value="+417">+417</option>
											<option data-countryCode="LT" value="+370">+370</option>
											<option data-countryCode="LU" value="+352">+352</option>
											<option data-countryCode="MO" value="+853">+853</option>
											<option data-countryCode="MK" value="+389">+389</option>
											<option data-countryCode="MG" value="+261">+261</option>
											<option data-countryCode="MW" value="+265">+265</option>
											<option data-countryCode="MY" value="+60">+60</option>
											<option data-countryCode="MV" value="+960">+960</option>
											<option data-countryCode="ML" value="+223">+223</option>
											<option data-countryCode="MT" value="+356">+356</option>
											<option data-countryCode="MH" value="+692">+692</option>
											<option data-countryCode="MQ" value="+596">+596</option>
											<option data-countryCode="MR" value="+222">+222</option>
											<option data-countryCode="YT" value="+269">+269</option>
											<option data-countryCode="MX" value="+52">+52</option>
											<option data-countryCode="FM" value="+691">+691</option>
											<option data-countryCode="MD" value="+373">+373</option>
											<option data-countryCode="MC" value="+377">+377</option>
											<option data-countryCode="MN" value="+976">+976</option>
											<option data-countryCode="MS" value="+1664">+1664</option>
											<option data-countryCode="MA" value="+212">+212</option>
											<option data-countryCode="MZ" value="+258">+258</option>
											<option data-countryCode="MN" value="+95">+95</option>
											<option data-countryCode="NA" value="+264">+264</option>
											<option data-countryCode="NR" value="+674">+674</option>
											<option data-countryCode="NP" value="+977">+977</option>
											<option data-countryCode="NL" value="+31">+31</option>
											<option data-countryCode="NC" value="+687">+687</option>
											<option data-countryCode="NZ" value="+64">+64</option>
											<option data-countryCode="NI" value="+505">+505</option>
											<option data-countryCode="NE" value="+227">+227</option>
											<option data-countryCode="NG" value="+234">+234</option>
											<option data-countryCode="NU" value="+683">+683</option>
											<option data-countryCode="NF" value="+672">+672</option>
											<option data-countryCode="NP" value="+670">+670</option>
											<option data-countryCode="NO" value="+47">+47</option>
											<option data-countryCode="OM" value="+968">+968</option>
											<option data-countryCode="PW" value="+680">+680</option>
											<option data-countryCode="PA" value="+507">+507</option>
											<option data-countryCode="PG" value="+675">+675</option>
											<option data-countryCode="PY" value="+595">+595</option>
											<option data-countryCode="PE" value="+51">+51</option>
											<option data-countryCode="PH" value="+63">+63</option>
											<option data-countryCode="PL" value="+48">+48</option>
											<option data-countryCode="PT" value="+351">+351</option>
											<option data-countryCode="PR" value="+1787">+1787</option>
											<option data-countryCode="QA" value="+974">+974</option>
											<option data-countryCode="RE" value="+262">+262</option>
											<option data-countryCode="RO" value="+40">+40</option>
											<option data-countryCode="RU" value="+7">+7</option>
											<option data-countryCode="RW" value="+250">+250</option>
											<option data-countryCode="SM" value="+378">+378</option>
											<option data-countryCode="ST" value="+239">+239</option>
											<option data-countryCode="SA" value="+966">+966</option>
											<option data-countryCode="SN" value="+221">+221</option>
											<option data-countryCode="CS" value="+381">+381</option>
											<option data-countryCode="SC" value="+248">+248</option>
											<option data-countryCode="SL" value="+232">+232</option>
											<option data-countryCode="SG" value="+65">+65</option>
											<option data-countryCode="SK" value="+421">+421</option>
											<option data-countryCode="SI" value="+386">+386</option>
											<option data-countryCode="SB" value="+677">+677</option>
											<option data-countryCode="SO" value="+252">+252</option>
											<option data-countryCode="ZA" value="+27">+27</option>
											<option data-countryCode="ES" value="+34">+34</option>
											<option data-countryCode="LK" value="+94">+94</option>
											<option data-countryCode="SH" value="+290">+290</option>
											<option data-countryCode="KN" value="+1869">+1869</option>
											<option data-countryCode="SC" value="+1758">+1758</option>
											<option data-countryCode="SD" value="+249">+249</option>
											<option data-countryCode="SR" value="+597">+597</option>
											<option data-countryCode="SZ" value="+268">+268</option>
											<option data-countryCode="SE" value="+46">+46</option>
											<option data-countryCode="CH" value="+41">+41</option>
											<option data-countryCode="SI" value="+963">+963</option>
											<option data-countryCode="TW" value="+886">+886</option>
											<option data-countryCode="TJ" value="+7">+7</option>
											<option data-countryCode="TH" value="+66">+66</option>
											<option data-countryCode="TG" value="+228">+228</option>
											<option data-countryCode="TO" value="+676">+676</option>
											<option data-countryCode="TT" value="+1868">+1868</option>
											<option data-countryCode="TN" value="+216">+216</option>
											<option data-countryCode="TR" value="+90">+90</option>
											<option data-countryCode="TM" value="+7">+7</option>
											<option data-countryCode="TM" value="+993">+993</option>
											<option data-countryCode="TC" value="+1649">+1649</option>
											<option data-countryCode="TV" value="+688">+688</option>
											<option data-countryCode="UG" value="+256">+256</option>
											<!-- <option data-countryCode="GB" value="+44">UK +44</option> -->
											<option data-countryCode="UA" value="+380">+380</option>
											<option data-countryCode="AE" value="+971">+971</option>
											<option data-countryCode="UY" value="+598">+598</option>
											<!-- <option data-countryCode="US" value="+1">USA +1</option> -->
											<option data-countryCode="UZ" value="+7">+7</option>
											<option data-countryCode="VU" value="+678">+678</option>
											<option data-countryCode="VA" value="+379">+379</option>
											<option data-countryCode="VE" value="+58">+58</option>
											<option data-countryCode="VN" value="+84">+84</option>
											<option data-countryCode="VG" value="+84">+1284</option>
											<option data-countryCode="VI" value="+84">+1340</option>
											<option data-countryCode="WF" value="+681">+681</option>
											<option data-countryCode="YE" value="+969">+969</option>
											<option data-countryCode="YE" value="+967">+967</option>
											<option data-countryCode="ZM" value="+260">+260</option>
											<option data-countryCode="ZW" value="+263">+263</option>
										</optgroup>
									</select>

								</div>

								<div class="col-lg-9 col-md-9 col-sm-10 col-xs-10">

									<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
										<i class="fa fa-phone"></i><input type="number" maxlength="10" id="phone" name="phone" placeholder="Enter Your Phone Number" autocomplete="off">
										<span style="color: #ed244f;" id="phone-error"></span>
									</div>
								</div>

							</div>

						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">

								<i class="fa fa-map-marker"></i><input type="text" name="address" id="address" placeholder="Address / Post Code (Where Staff)">
								<span style="color: #ed244f;" id="address-error"></span>

							</div>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">

								<i class="fa fa-pencil-square-o"></i><input type="text" name="location" id="location" placeholder="Location (optional)">

							</div>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

							<div class="phone_number_custom_style jp_contact_inputs3_wrapper">

								<select class="form-control" id="jobCategory" name="jobCategory">
									<option selected disabled>Select Your Relevant Job Category</option>
									<option value="Trade & Construction">Trade & Construction</option>
									<option value="Site Labourers & Cleaners">Site Labourers & Cleaners</option>
									<option value="Multi-Skilled Builders">Multi-Skilled Builders</option>
									<option value="Forklift Operatives">Forklift Operatives</option>
									<option value="Warehouse">Warehouse</option>
									<option value="Drivers">Drivers</option>
									<option value="Pickers & Packers">Pickers & Packers</option>
									<option value="Electricians & Electricians Mate">Electricians & Electricians Mate</option>
									<option value="Plumbing">Plumbing</option>
									<option value="Electrical">Electrical</option>
									<option value="Cleaning">Cleaning</option>
									<option value="Property Maintenance">Property Maintenance</option>
								</select>
								<span style="color: #ed244f;" id="jobCategory-error"></span>


							</div>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

							<div class="jp_contact_inputs3_wrapper">

								<label style="color: #7CC24D;" for="desc">Are you happy to work on temporary basis?</label> <br>

								<input type="radio" id="yes" name="choice" value="yes" checked>
								<label style="color: #7CC24D;" for="yes">Yes</label> <br>
								<input type="radio" id="no" name="choice" value="no">
								<label style="color: #7CC24D;" for="no">No</label>

							</div>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-10">

							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">

								<i style="font-size: 17px;" class="fas fa-wallet"></i><input type="text" name="desiredSalary" id="desiredSalary" placeholder="Desired Salary / Wages (Per Hour Rate)">

								<span style="color: #ed244f;" id="salary-error"></span>

							</div>

						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-10">

							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">

								<i style="font-size: 17px;" class="fas fa-calendar-alt"></i><input type="text" name="availability" id="availability" placeholder="Availability (Are you immediately available to start work or need notice period)">

								<span style="color: #ed244f;" id="availability-error"></span>

							</div>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-10">

							<div class=" jp_contact_inputs3_wrapper">

								<label style="color: #7CC24D; margin-bottom:20px;" for="pictureUpload">Upload Your Picture (Optional)</label> <br>
								<label for="image" class="btn btn-success">Choose File</label>
								<div class="form_upload_btn_custom">
									<input id="image" type="file" name="image" accept=".rtf,.doc,.docx,.pdf">
								</div> <br>
								<small class="form-text text-muted">Maximum file size: 2 MB.</small>

							</div>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-10">

							<div class=" jp_contact_inputs3_wrapper">

								<label style="color: #7CC24D; margin-bottom:20px;" for="pictureUpload">Upload Your CV</label> <br>
								<label for="cv" class="btn btn-success">Choose File</label>
								<div class="form_upload_btn_custom">
									<input id="cv" type="file" name="cv" accept=".rtf,.doc,.docx,.pdf">
								</div>
								<span style="color: #ed244f;" id="cv-error"></span><br>

								<small class="form-text text-muted">Maximum file size: 2 MB.</small>

							</div>

						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

							<div class="jp_contact_form_btn_wrapper">

								<ul>

									<!-- <li><a href="#"><i class="white fa fa-plus-circle"></i>&nbsp; Submit</a></li> -->

								</ul>

								<label for="submit_button" class="submit_button_custom_styling">Submit</label>
								<div class="form_upload_btn_custom">
									<input id="submit_button" type="submit" name="submit_button">



									<!-- <input id="submit_button" type="submit"> -->

								</div>


							</div>

						</div>


					</div>
				</form>
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

		$("#phone").on('keyup', function(e) {
			// console.log(e.key);
			var numbers = /[0-9]/g;
			var phone_val = $("#phone").val();

			if (phone_val.length == "") {
				$("#phone-error").show();
				$("#phone-error").html("This Field Is Required");
				phone_Error = false;
				return false;
				// } else if (phone_val.match(e.key)) {
				// 	var enteredValue = phone_val.match(e.key)[0];
				// 	if (enteredValue.match(numbers)) {
				// 		phone_val = $("#phone").val();
				// 		console.log(phone_val);
				// 		console.log("Number is Entered. And The Number Is " + e.key);
				// 	} else if (phone_val.match(e.key) !== numbers) {



				// 		$("#phone").val(function(n) {
				// 			n = phone_val;

				// 			return n;
				// 		});
				// 		$('#phone').val(test)
				// 		console.log(phone_val);
				// 	}
			} else {
				$("#phone-error").hide();
			}
		});

		// function phone_check() {
		// 	var phone_val = $("#phone").val();
		// 	var numbers = /[0-9]/g;

		// 	if (phone_val.length == "") {
		// 		$("#phone-error").show();
		// 		$("#phone-error").html("This Field Is Required");
		// 		phone_Error = false;
		// 		return false;
		// 	} else if (phone_val.match(numbers)) {
		// 		console.log("Found Number");
		// 	} else {
		// 		$("#phone-error").hide();
		// 	}
		// }

		// function allnumeric(inputtxt) {
		// 	var numbers = /^[0-9]+$/;
		// 	if (inputtxt.value.match(numbers)) {
		// 		alert('Your Registration number has accepted....');
		// 		document.form1.text1.focus();
		// 		return true;
		// 	} else {
		// 		alert('Please input numeric characters only');
		// 		document.form1.text1.focus();
		// 		return false;
		// 	}
		// }



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