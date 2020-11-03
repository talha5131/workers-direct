@extends('layouts.base')
@section('title','Register')
@section('content')
<style>
    .register_left_form input[type="text"] {
        text-transform: none;
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
                                    <div class="col-md-12">
                                        <form id="personalRegistration">
                                            <!--Form Group-->
                                            <div class="row">
                                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                    <label class="formsLabel" for="userName">Username</label>
                                                    <input type="text" id="userName" name="userName" placeholder="Username">

                                                </div>

                                                <!--Form Group-->

                                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                    <label class="formsLabel" for="email">Email</label>
                                                    <input type="text" id="email" name="email" placeholder="E-mail">

                                                </div>
                                            </div>
                                            <!--Form Group-->
                                            <div class="row">
                                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                    <label class="formsLabel" for="password">Password</label>
                                                    <input type="password" name="password" id="password" placeholder="Password">

                                                </div>

                                                <!--Form Group-->

                                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                    <label class="formsLabel" for="confirmPassword">Confirm Password</label>
                                                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Re-Enter Password">

                                                </div>
                                            </div>
                                            <!--Form Group-->
                                            <div class="row">
                                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                    <label class="formsLabel" for="currentLocation">Current Location <span>(Optional)</span></label>
                                                    <input type="text" name="currentLocation" id="currentLocation" placeholder="Current Location">
                                                </div>

                                                <!--Form Group-->

                                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="formsLabel" for="phoneNumber">Phone Number</label>
                                                        </div>
                                                        <div class=" col-lg-4 col-md-4 col-sm-2 col-xs-2 phone_number_custom_style">

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
                                                        <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">

                                                            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Form Group-->
                                            <div class="row">
                                                <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input">

                                                    <!-- <input type="file" name="resume"> -->
                                                    <label class="formsLabel">Upload Your CV</label><br><br>
                                                    <label for="cv" class="btn btn-success">Choose File</label>
                                                    <div class="form_upload_btn_custom">
                                                        <input id="cv" type="file" style="background: #7CC24D; border-color: #7CC24D;" name="cv" />
                                                    </div>
                                                    <span style="color: #7CC24D;font-weight: 600;" id="cvUpload"></span>
                                                    <span class="error" id="cvError"></span>
                                                    <br>
                                                    <p>DOC, DOCX, RTF, PDF FILES - 2MB MAX PREFERRED CV FORMAT</p>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                    <div class="check-box text-center">

                                                        <input type="checkbox" name="termsAndConditions1" id="termsAndConditions1">

                                                        <!-- <label for="account-option_1">I agreed to the <a href="#" class="check_box_anchr">Terms and Conditions</a> governing the use of jobportal</label> -->
                                                        <label for="account-option_1">I agree to the <a href="#" class="check_box_anchr">Terms and Conditions</a>.</label>

                                                    </div>
                                                    <div class="col-md-12" style="text-align: center;">
                                                        <span class="error" id="termsAndConditionsError1"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="login_btn_wrapper register_btn_wrapper login_wrapper col-md-12">

                                                    <button type="submit" class="btn btn-primary login_btn" id="personalFormSubmit"> Register </button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="login_message col-md-12">

                                        <p>Already a member? <a href="#"> Login Here </a> </p>

                                    </div>
                                </div>

                            </div>



                            <div class="tab-pane fade register_left_form" id="contentOne-2">



                                <!-- <div class="jp_regiter_top_heading">

                                    <p>Fields with * are mandetory </p>

                                </div> -->

                                <div class="row clearfix">

                                    <!--Form Group-->
                                    <form id="companyRegistration">
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label class="formsLabel" for="userName1">Username</label>
                                                <input type="text" name="userName1" placeholder="Username">

                                            </div>
                                            <!--Form Group-->

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label class="formsLabel" for="email1">Email</label>
                                                <input type="text" name="email1" placeholder="E-Mail">

                                            </div>
                                        </div>

                                        <!--Form Group-->
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label class="formsLabel" for="password1">Password</label>
                                                <input type="password" name="password1" id="password1" placeholder="Password">

                                            </div>

                                            <!--Form Group-->

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label class="formsLabel" for="confirmPassword1">Confirm Password</label>
                                                <input type="password" name="confirmPassword1" id="confirmPassword1" placeholder="Re-Enter Password">

                                            </div>
                                        </div>

                                        <!--Form Group-->
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="col-md-12">
                                                    <label class="formsLabel" for="phoneNumber1">Phone Number</label>
                                                </div>
                                                <div class=" col-lg-4 col-md-4 col-sm-2 col-xs-2 phone_number_custom_style" style="padding: 0;">

                                                    <select name="CC" id="CC" name="phonePrefix1">
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
                                                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10" style="padding: 0;">

                                                    <input type="text" name="phoneNumber1" id="phoneNumber1" placeholder="Phone Number">
                                                </div>
                                            </div>

                                            <!--Form Group-->

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label class="formsLabel" for="companyName">Company Name</label>
                                                <input type="text" name="companyName" placeholder="Company Name">
                                            </div>
                                        </div>



                                        <!--Form Group-->
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label class="formsLabel" for="website">Website</label>
                                                <input type="text" name="website" placeholder="Website">
                                            </div>

                                            <!--Form Group-->

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label class="formsLabel" for="address">Address</label>
                                                <input type="text" name="address" placeholder="Address">

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <div class="check-box text-center">

                                                    <input type="checkbox" name="termsAndConditions2" id="termsAndConditions2">

                                                    <!-- <label for="account-option_1">I agreed to the <a href="#" class="check_box_anchr">Terms and Conditions</a> governing the use of jobportal</label> -->
                                                    <label for="termsAndConditions2">I agree to the <a href="#" class="check_box_anchr">Terms and Conditions</a>.</label>

                                                </div>
                                                <div class="col-md-12" style="text-align: center;">
                                                    <span class="error" id="termsAndConditionsError2"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">

                                            <button type="submit" class="btn btn-primary login_btn"> register </button>

                                        </div>
                                    </form>




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
    var personalCheckboxStatus = false;
    var cvUploadStatus = false;

    $('#personalRegistration').submit(function() {
        // alert("Form Submitted!!!")
        if ($('input[type="checkbox"]').prop("checked") == true) {
            $("#termsAndConditionsError1").text("");
            // console.log("Checkbox is checked.");
            personalCheckboxStatus = true;
        } else {
            $("#termsAndConditionsError1").text("This field is required.");
            // console.log("Checkbox is unchecked.");
            personalCheckboxStatus = false;
            event.preventDefault();
        }
        if (!(cvUploadStatus)) {
            $("#cvError").text("This field is required.");
            $("#cvUpload").text("");
            event.preventDefault();
        }
    });

    $("#cv").change(function() {
        cvUploadStatus = true;
        $("#cvUpload").text("Your CV Has Been Uploaded.");
        $("#cvError").hide();
        // console.log("Your File Has Been Uploaded");
    });

    $('#personalRegistration').validate({

        ignore: [],
        rules: {
            userName: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 8,
            },
            confirmPassword: {
                required: true,
                minlength: 8,
                equalTo: "#password"
            },
            phoneNumber: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            // cv: {
            //     required: true,
            //     accept: 'docx|doc|rtf|pdf',
            // },
        },
    });

    var companyCheckboxStatus = false;

    $('#companyRegistration').submit(function() {
        // alert("Form Submitted!!!")
        if ($('#termsAndConditions2').prop("checked") == true) {
            $("#termsAndConditionsError2").text("");
            console.log("Checkbox is checked.");
            companyCheckboxStatus = true;
        } else {
            $("#termsAndConditionsError2").text("This field is required.");
            console.log("Checkbox is unchecked.");
            companyCheckboxStatus = true;
            event.preventDefault();
        }
    });

    $("#companyRegistration").validate({
        rules: {
            userName1: {
                required: true,
            },
            email1: {
                required: true,
                email: true,
            },
            password1: {
                required: true,
                minlength: 8,
            },
            confirmPassword1: {
                required: true,
                minlength: 8,
                equalTo: "#password1"
            },
            phoneNumber1: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            companyName: {
                required: true,
            },
            // website: {
            //     required: true,
            // },
            address: {
                required: true,
            },
        },
    });
</script>

@endsection