@extends('layouts.base')

@section('title','Submit A Job')

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



						<h2>Submit A Job</h2>



					</div>



					<div class="jp_tittle_breadcrumb_main_wrapper">



						<div class="jp_tittle_breadcrumb_wrapper">



							<ul>



								<li><a href="{{url('/')}}">Home</a> <i class="fa fa-angle-right"></i></li>







								<li>Submit A Job</li>



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

		<!-- <form>

			@csrf

			<div class="row">



				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">



					<div class="about_text_wrapper">



						<div class="section_heading section_2_heading">



							<h1>Submit A <span> Job</span></h1>



						</div>



					</div>



				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



					<div class="jp_contact_form_box">

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">

							<label for="title" class="formsLabel">Job Title</label>

						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper">

								<i style="font-size: 17px;" class="fas fa-pen"></i><input type="text" id="title" name="title" placeholder="Job Title">

								<span style="color: #ed244f;" id="title_error"></span>



							</div>



						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-20">

							<label for="desc" class="formsLabel">Job Description </label>

						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">




								<textarea rows="7" id="desc" name="desc" placeholder="Job Description (optional)"></textarea>



							</div>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="name" class="formsLabel">Full Name</label>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="email" class="formsLabel">Email</label>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">



								<i style="font-size: 17px;" class="fas fa-pen-square"></i><input type="text" id="name" name="name" placeholder="Enter Your Name">

								<span style="color: #ed244f;" id="name_error"></span>



							</div>



						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">



								<i style="font-size: 17px;" class="fas fa-envelope-open-text"></i><input type="text" id="email" name="email" placeholder="Enter Your E-mail">

								<span style="color: #ed244f;" id="email_error"></span>



							</div>



						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="phone" class="formsLabel">Phone</label>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="jobCategory" class="formsLabel">Job Category</label>

						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="row">



								<div class="jp_contact_inputs3_wrapper col-lg-3 col-md-3 col-sm-2 col-xs-2 phone_number_custom_style">

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


											<option data-countryCode="UA" value="+380">+380</option>

											<option data-countryCode="AE" value="+971">+971</option>

											<option data-countryCode="UY" value="+598">+598</option>


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

										<i style="font-size: 17px;" class="fas fa-mobile-alt"></i><input type="number" maxlength="10" id="phone" name="phone" placeholder="Enter Your Phone Number">

										<span style="color: #ed244f;" id="phone_error"></span>



									</div>

								</div>



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



								<span style="color: #ed244f;" id="jobCategory_error"></span>





							</div>



						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="tags" class="formsLabel">Job Tags</label>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="location" class="formsLabel">Location</label>

						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">



								<i style="font-size: 17px;" class="fas fa-tag"></i><input type="tags" data-role="tagsinput" id="tags" name="tags" placeholder="Job Tags (optional)">

								<span></span>

							</div>



						</div>





						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">



								<i class="fa fa-pencil-square-o"></i><input type="text" name="location" id="location" placeholder="Location (optional)">



							</div>



						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="joining" class="formsLabel">Joining Date</label>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="endDate" class="formsLabel">Ending Date</label>

						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">



								<i style="font-size: 17px;" class="far fa-calendar-check"></i><input type="number" name="joining" id="joining" placeholder="DD/MM/YYYY">

								<span style="color: #ed244f;" id="joiningDate_error"></span>



							</div>



						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">



								<i style="font-size: 17px;" class="fas fa-calendar-times"></i><input type="text" name="endDate" id="endDate" placeholder="DD/MM/YYYY">

								<span style="color: #ed244f;" id="endingDate_error"></span>



							</div>



						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="openingDate" class="formsLabel">Opening Date</label>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="jobTiming" class="formsLabel">Job Timing</label>

						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">



								<i style="font-size: 17px;" class="fas fa-calendar-check"></i><input type="text" name="openingDate" id="openingDate" placeholder="DD/MM/YYYY">

								<span style="color: #ed244f;" id="openingDate_error"></span>



							</div>



						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="phone_number_custom_style jp_contact_inputs3_wrapper">



								<select class="form-control" id="jobTiming" name="jobTiming">

									<option selected disabled>Job Timing</option>

									<option value="Trade & Construction">Freelance</option>

									<option value="Site Labourers & Cleaners">Full Time</option>

									<option value="Multi-Skilled Builders">Internship</option>

									<option value="Forklift Operatives">Part Time</option>

									<option value="Warehouse">Temporary</option>



								</select>

								<span style="color: #ed244f;" id="jobTiming_error"></span>





							</div>



						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="salary" class="formsLabel">Salary</label>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="duration" class="formsLabel">Duration</label>

						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">



								<i style="font-size:17px" class="fas fa-wallet"></i><input type="text" name="salary" id="salary" placeholder="Salary (optional)">



							</div>



						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">



								<i style="font-size: 17px;" class="fas fa-hourglass-half"></i><input type="text" id="duration" name="duration" placeholder="Duration (optional)">



							</div>



						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="jobPurpose" class="formsLabel">Job Purpose</label>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="responsibilites" class="formsLabel">Job Responsibilites</label>

						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">



								<i style="font-size: 17px;" class="fas fa-search"></i><input type="text" name="jobPurpose" id="jobPurpose" placeholder="Job Purpose (optional)">



							</div>



						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">



								<i style="font-size: 17px;" class="fas fa-briefcase"></i><input type="text" name="responsibilites" id="responsibilites" placeholder="Job Responsibilites (optional)">



							</div>



						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="requirements" class="formsLabel">Job Requirements</label>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-20 ">

							<label for="vacancy" class="formsLabel">Vacancies</label>

						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">



								<i style="font-size: 17px;" class="fas fa-list"></i><input type="text" name="requirements" id="requirements" placeholder="Job Requirements">

								<span style="color: #ed244f;" id="requirements_error"></span>



							</div>



						</div>



						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



							<div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">



								<i style="font-size: 17px;" class="fas fa-users"></i><input type="number" name="vacancy" id="vacancy" placeholder="Vacancy">

								<span style="color: #ed244f;" id="vacancy_error"></span>



							</div>



						</div>





						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-10">



							<div class=" jp_contact_inputs3_wrapper">



								<label style=" margin-bottom:20px;" for="pictureUpload" class="formsLabel">Upload Your Picture</label> <br>

								<label for="image" class="btn btn-success">Choose File</label>

								<div class="form_upload_btn_custom">

									<input id="image" type="file" name="image" />

								</div> <br>

								<small class="form-text text-muted">Maximum file size: 2 MB.</small>



							</div>

							<span style="color: #ed244f;" id="image_error"></span>





						</div>



						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



							<div class="jp_contact_form_btn_wrapper">

								<label for="submit_button" class="submit_button_custom_styling">Submit</label>

								<div class="form_upload_btn_custom">

									<input id="submit_button" type="submit" name="submit_button">

								</div>

							</div>



						</div>

					</div>



				</div>

			</div>

		</form> -->


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