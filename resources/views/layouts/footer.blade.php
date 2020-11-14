<link rel="stylesheet" href="{{url('public/assets/css/richtext.min.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style>
    /* .jp_contact_inputs_wrapper i {
        position: absolute;
        z-index: 1;
        top: 55px;
        left: 40px;
        color: #7CC24D;
    } */

    textarea::placeholder {
        /* color: red !important; */
        padding-top: 9px;
    }

    .jp_contact_inputs_wrapper textarea {
        width: 100%;
        height: 50px;
        border: 1px solid #e9e9e9;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        padding-left: 45px;
        position: relative;
        -webkit-transition: all 0.5s;
        -o-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
    }

    .jp_contact_form_btn_wrapper li button {
        float: left;
        width: 160px;
        height: 50px;
        line-height: 45px;
        color: #ffffff;
        border: 1px solid #7CC24D;
        background: #7CC24D;
        text-align: center;
        text-transform: uppercase;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        -webkit-transition: all 0.5s;
        -o-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
    }

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

    .richText .richText-toolbar ul li a span {
        color: #7CC24D;
    }

    .richText .richText-toolbar ul{
		background-color: #fff;
	 }
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
<!-- jp Newsletter Wrapper Start -->

<!-- <div class="jp_main_footer_img_wrapper">

        <div class="jp_newsletter_img_overlay_wrapper"></div>

        <div class="jp_newsletter_wrapper">

            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                        <div class="jp_newsletter_text">

                            <img src="images/content/news_logo.png" class="img-responsive" alt="news_logo" />

                        </div>

                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                        <div class="jp_newsletter_field">

                            <i class="fa fa-envelope-o"></i>

                            <input type="text" placeholder="Enter Your Email">

                            <button type="submit">Submit</button>

                        </div>

                    </div>

                </div>

            </div>

        </div> -->

<!-- jp Newsletter Wrapper End -->



<div class="jp_main_footer_img_wrapper">

    <div class="jp_newsletter_img_overlay_wrapper"></div>

    <div class="jp_newsletter_wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                    <div class="jp_footer_first_cont jp_contact_right_box_wrapper">

                        <h2>Get a Quote</h2>

                        <p style="margin-top: -40px;"> If you need an urgent staff, fill the quotation form and send back to us an one of our experts can start on your recruitement drive immidiately. In many cases, we can find suitable employees within a matter of hours.

                        </p>

                    </div>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">



                    <div class="row">



                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <form id="getAQuoteForm">
                                <div class="jp_contact_form_box">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <div class="jp_contact_inputs_wrapper">
                                                    <label class="formsLabel" for="name">Name</label>
                                                    <i class="fa fa-user" style="position: absolute;z-index: 1;top: 55px;left: 40px;color: #7CC24D;"></i><input type="text" id="name" name="name" placeholder="Name">
                                                </div>

                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-20">

                                                <div class="jp_contact_inputs_wrapper jp_contact_inputs2_wrapper">
                                                    <label class="formsLabel" for="email">Email</label>
                                                    <i class="fa fa-envelope" style="position: absolute;z-index: 1;top: 55px;left: 40px;color: #7CC24D;"></i><input type="text" placeholder="Email" name="email" id="email">
                                                </div>

                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0">
                                                <div class="col-md-12" style="margin-top: 20px;">
                                                    <label class="formsLabel" for="phoneNumber">Phone Number</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 phone_number_custom_style">
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
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pr-0">
                                                    <div class="jp_contact_inputs_wrapper">
                                                        <i class="fa fa-phone" style="position: absolute;z-index: 1;top: 20px;left: 40px;color: #7CC24D;"></i><input type="text" placeholder="Phone Number" name="phoneNumber" id="phoneNumber">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-85">

                                                <div class="jp_contact_form_btn_wrapper">

                                                    <ul>

                                                        <li><button type="submit" id="btnSubmit"><i class="white fa fa-plus-circle"></i> Get a Quote</button></li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                            <div class="jp_contact_inputs_wrapper">
                                                <label class="formsLabel" for="message">Details</label>
                                                <textarea name="message" id="message" class="footerContent" placeholder="Enter Your Details"></textarea>
                                                <span class="error" id="message-error"></span>
                                            </div>
                                        </div>


                                    </div>





                                </div>
                            </form>
                        </div>

                    </div>

                </div>
                <div style="text-align:center; " class="col-md-4 margin-top-100">
                    <a href="http://localhost/workers-direct"><img src="{{url('public/assets/images/header/animated-logo-dark.png')}}" alt="Logo" title="Workers Direct" class="img-responsive" style="cursor: default; margin-left: 94px;"></a>

                    <p>Temping Agency is a privately owned recruitment agency based in Central London, W1 area and Established as part of the Workers Direct Group in 2010, TA has delivered excellent recruitment and employment services to clients in a variety of industries.
                    </p>

                    <p class="margin-top-20">Our services include recruitment, selection, placement, contract and temporary workers and our consultants are highly trained and experienced to deal with each step of the process.</p>
                </div>
                <div class="col-md-4">
                    <div class="jp_contact_map_wrapper" style="margin: 100px 0;">

                        <div style="width:100%; float:left; height:300px;">

                            <iframe style=" border-radius: 5px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2480.4054139491323!2d0.08116921520262564!3d51.56080101461914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a6863c22706b%3A0xdfb224d6cd4eee4c!2s344-348%20High%20Rd%2C%20Ilford%20IG1%201QP%2C%20UK!5e0!3m2!1sen!2s!4v1580738057832!5m2!1sen!2s" width="100%" height="325" frameborder="0"></iframe></div>

                        <div class="jp_footer_first_cont jp_footer_first_cont_new" style="height: 114px; top: 54% !important; position: absolute; background-color: white; left: 57px; width: 267px;">

                            <h4 class="margin-top-20" style="margin-left: 10px;"> You can Find us..</h4>

                        </div>

                        <div class="jp_footer_first_cont_new" style="position: absolute; top: 211px; right:60px;">
                            <p class="margin-top-20">344-48 High Road, Ilford, IG1 1QP</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 margin-top-100 jp_footer_first_cont">
                    <h2 style="color: #7CC24D;" class="margin-bottom-20">Workers Direct</h2>
                </div>

                <div class="col-md-4 jp_footer_first_cont">

                    <h4 class="margin-bottom-20">ADDRESS</h4>
                </div>

                <div class="jp_footer_first_cont_new_1 col-md-4">
                    <p class="margin-bottom-20">344-348 High road, Ilford IG1 1QP</p>
                </div>
                <div class="col-md-4 jp_footer_first_cont jp_footer_first_cont_new">

                    <h4 class="margin-bottom-20">EMAIL</h4>
                </div>

                <div class="jp_footer_first_cont_new_1 col-md-4">

                    <p class="margin-bottom-20">info@temping-agency.com</p>

                </div>

                <div class="col-md-4 jp_footer_first_cont jp_footer_first_cont_new_1">

                    <h4 class="margin-bottom-20">PHONE NO.</h4>

                </div>
                <div class="jp_footer_first_cont_new_1 col-md-4">

                    <p class="margin-bottom-20">+44 (0) 2030 869080</p>

                </div>

                <div class="col-md-4 jp_footer_first_cont jp_footer_first_cont_new_1">

                    <!-- <input type="email" placeholder="Email Address"> -->
                    <form action="#" role="form">

                        <div class="input-group subscribe">

                            <input style="border: 1px solid rgba(255, 255, 255, .1);" type="email" class="form-control" placeholder="Email Address" required>

                            <span class="input-group-addon">

                                <button class="btn" type="submit"><i class="fa fa-envelope-o" style="color: #7CC24D; font-weight: 900;"> </i></button>

                            </span>

                        </div>

                    </form>
                </div>

            </div>

        </div>

    </div>

    <div class="jp_footer_main_wrapper">

        <div class="container">

            <div class="row">

                <div class="jp_footer_three_sec_main_wrapper">

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="jp_footer_first_cont_wrapper">

                            <div class="jp_footer_candidate">

                                <h2>Services</h2>

                                <ul>
                                    <li><a href="{{url('staffing-services')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Staffing</a></li>
                                    <li><a href="{{url('staffing-services/temporary-staffing')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Hire Temp </a></li>
                                    <li><a href="{{url('staffing-services/admin-staff')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Admin </a></li>
                                    <li><a href="{{url('staffing-services/catering-staff')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Catering </a></li>
                                    <li><a href="{{url('hospitality-staff')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Hospitality </a></li>
                                    <li><a href="{{url('staffing-services/school-staffing')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Academics </a></li>
                                    <li><a href="{{url('staffing-services/reception-staff')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Receptionist </a></li>
                                    <li><a href="{{url('personal-assistant')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>PA </a></li>
                                    <li><a href="{{url('staffing-services/construction-staff')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Construction </a></li>
                                    <li><a href="{{url('staffing-services/event-staff')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Events </a></li>
                                    <li><a href="{{url('industrial-staff')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Industrial </a></li>
                                    <li><a href="{{url('staffing-services/warehouse-staff')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Warehouse </a></li>
                                    <li><a href="{{url('picker-packer')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Packers </a></li>
                                    <li><a href="{{url('van-drivers')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Drivers </a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper2">

                            <div class="jp_footer_candidate">

                                <h2>QUICK BOOKING</h2>

                                <ul>

                                    <li><a href="about-us"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>

                                    <li><a href="terms-&-conditions"><i class="fa fa-caret-right" aria-hidden="true"></i> Terms & Conditions</a></li>

                                    <li><a href="privacy-policy.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Privacy Policy</a></li>

                                    <li><a href="jobs"><i class="fa fa-caret-right" aria-hidden="true"></i> Careers with Us</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper3">

                            <div class="jp_footer_candidate">

                                <h2>Looking For Job</h2>

                                <ul>

                                    <li><a href="{{url('cv-register')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> CV Register</a></li>

                                    <li><a href="{{url('job-seeker')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Job Seeker</a></li>

                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Time Sheet</a></li>

                                    <li><a href="{{url('latest-jobs')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Latest Jobs</a></li>

                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Career Advice</a></li>

                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> CV Builder</a></li>

                                    <li><a href="{{url('https://play.google.com/store/apps/details?id=com.mst_developers.workers_direct&amp;hl=en')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Download Mobile App</a></li>


                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper4">

                            <div class="jp_footer_candidate">

                                <h2>Looking For Staff</h2>

                                <ul>
                                    <li><a href="{{url('employer')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Employer</a></li>

                                    <li><a href="{{url('staffing-services/temporary-staffing')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Hire Temporary Staff</a></li>

                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Staff On Call</a></li>

                                    <li><a href="{{url('submit-a-job')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Post A Job</a></li>

                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Book A Temp</a></li>

                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Services</a></li>

                                    <li><a href="{{url('why-us')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Why Us</a></li>

                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Testimonials</a></li>

                                    <li><a href="{{url('our-gurantee')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Gurantee</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="jp_bottom_footer_Wrapper">

                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <div class="jp_bottom_footer_left_cont">

                                        <p>© 2020 Workers Direct. All Rights Reserved.</p>

                                    </div>

                                    <div class="jp_bottom_top_scrollbar_wrapper">

                                        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <div class="jp_bottom_footer_right_cont">

                                        <ul>

                                            <li><a href="https://www.facebook.com/workersdirect"><i class="white fa fa-facebook"></i></a></li>

                                            <li><a href="https://twitter.com/workersdirect"><i class="white fa fa-twitter"></i></a></li>

                                            <li><a href="https://www.linkedin.com/in/workers/"><i class="white fa fa-linkedin"></i></a></li>

                                            <li><a href="https://plus.google.com/u/0/+WorkersdirectUK/posts"><i class="white fa fa-google-plus"></i></a></li>

                                            <li class="hidden-xs"><a href="#"><i class="white fa fa-pinterest-p"></i></a></li>

                                            <li class="hidden-xs"><a href="#"><i class="white fa fa-vimeo"></i></a></li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



            </div>

        </div>

    </div>

    <!-- jp footer Wrapper Start -->

    <!-- <div class="jp_footer_main_wrapper">

        <div class="container">

            <div class="row">

                <div class="jp_footer_three_sec_main_wrapper">

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="jp_footer_first_cont_wrapper">

                            <div class="jp_footer_first_cont">

                                <h2>Who We Are</h2>

                                <p>Workers Direct specialised in temporary & short term staff recruitment. As one of the best Recruitment Agency London we provide temp & perm warehouse, catering staff across UK. <span id="dots-7" style="display: inline;"> </span><span id="more-7" style="display: none;"> Workers Direct are experts in recruitment with over a decade of experience in finding the best solution for our companies and candidates. </span></p>



                                <ul>

                                    <li><i class="green fa fa-plus-circle"></i> <a onclick="myFunctionSeven()" id="myBtn-7">&nbsp;READ MORE</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper2">

                            <div class="jp_footer_candidate">

                                <h2>Useful Links</h2>

                                <ul>

                                    <li><a href="about-us"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>

                                    <li><a href="terms-&-conditions"><i class="fa fa-caret-right" aria-hidden="true"></i> Terms & Conditions</a></li>

                                    <li><a href="privacy-policy.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Privacy Policy</a></li>

                                    <li><a href="jobs"><i class="fa fa-caret-right" aria-hidden="true"></i> Careers with Us</a></li>



                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper3">

                            <div class="jp_footer_candidate">

                                <h2>Our Partners</h2>

                                <ul>

                                    <li><a href="https://staff-direct.co.uk"><i class="fa fa-caret-right" aria-hidden="true"></i> Staff Direct</a></li>

                                    <li><a href="https://recruitment-agency.london"><i class="fa fa-caret-right" aria-hidden="true"></i> Recruitment Agency London</a></li>

                                    <li><a href="https://labourer.agency"><i class="fa fa-caret-right" aria-hidden="true"></i> Labourer Agency</a></li>

                                    <li><a href="https://temping-agency.com"><i class="fa fa-caret-right" aria-hidden="true"></i> Temping Agency</a></li>



                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper4">

                            <div class="jp_footer_candidate">

                                <h2>Information</h2>

                                <ul>



                                    <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>344-48 High Road, Ilford, IG1 1QP</a></li>

                                    <li><a href="mailto: info@workers-direct.com"><i class="fa fa-envelope" aria-hidden="true"></i> info@workers-direct.com</a></li>

                                    <li><a href="tel: 02030869080"><i class="fa fa-phone" aria-hidden="true"></i> 0 203 086 90 80</a></li>







                                </ul>

                            </div>

                        </div>

                    </div>

                </div>



            </div>

        </div>

    </div> -->

</div>

<!-- jp footer Wrapper End -->

<!-- chat box Wrapper start -->

<!-- <div id="chat-circle" class="btn btn-raised">

        <i class="fa fa-envelope"></i>

    </div> -->

<div class="chat-box">

    <div class="chat-box-header">

        ChatBot

        <span class="chat-box-toggle"><i class="fa fa-times"></i></span>

    </div>

    <div class="chat-box-body">

        <div class="chat-box-overlay">

        </div>

        <div class="chat-logs">



        </div>
        <!--chat-log -->

    </div>

    <div class="chat-input">

        <form>

            <input type="text" id="chat-input" placeholder="Send a message..." />

            <button type="submit" class="chat-submit" id="chat-submit"><i class="fa fa-paper-plane"></i></button>

        </form>

    </div>

</div>

<!-- chat box Wrapper end -->

<!--main js file start-->

<script src="{{url('public/assets/js/jquery_min.js')}}"></script>

<script src="{{url('public/assets/js/bootstrap.js')}}"></script>

<script src="{{url('public/assets/js/jquery.menu-aim.js')}}"></script>

<script src="{{url('public/assets/js/jquery.countTo.js')}}"></script>

<script src="{{url('public/assets/js/jquery.inview.min.js')}}"></script>

<script src="{{url('public/assets/js/owl.carousel.js')}}"></script>

<script src="{{url('public/assets/js/modernizr.js')}}"></script>

<script src="{{url('public/assets/js/jquery.magnific-popup.js')}}"></script>

<script src="{{url('public/assets/js/custom_II.js')}}"></script>

<script src="{{url('public/assets/js/hs.megamenu.js')}}"></script>

<script src="{{url('public/assets/js/jquery.richtext.min.js')}}"></script>

<!-- jQuery Validation -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<!--main js file end-->



<script>
    $(".footerContent").richText();

    function initMap() {

        var uluru = {
            lat: -36.742775,
            lng: 174.731559
        };

        var map = new google.maps.Map(document.getElementById('map'), {

            zoom: 15,

            scrollwheel: false,

            center: uluru

        });

        var marker = new google.maps.Marker({

            position: uluru,

            map: map

        });

    }
</script>



<script>
    // Contact Us Form Validation

    $('#getAQuoteForm').validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            phoneNumber: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            userType: {
                required: true,
            },
        }
    });

    $("#getAQuoteForm").submit(function() {


        if ($("#message").val() == "") {
            $("#message-error").html("This field is required");
            console.log("button is clicked");
            event.preventDefault();
        }
        if ($("#message").val() == "<div><br></div>") {
            $("#message-error").html("This field is required");
            event.preventDefault();
        } else if ($("#message").val() == "<br>") {
            $("#message-error").html("This field is required");
            event.preventDefault();
        } else {
            $("#message-error").html("");
        }
    });

    // Magnific popup-video//

    $('.popup-youtube').magnificPopup({

        disableOn: 700,

        type: 'iframe',

        mainClass: 'mfp-fade',

        removalDelay: 160,

        preloader: false,



        fixedContentPos: false

    });
</script>



<!-- Read More JS -->

<script type="text/javascript">
    function myFunction() {

        var dots = document.getElementById("dots");

        var moreText = document.getElementById("more");

        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {

            dots.style.display = "inline";

            btnText.innerHTML = "READ MORE";

            moreText.style.display = "none";

        } else {

            dots.style.display = "none";

            btnText.innerHTML = "READ LESS";

            moreText.style.display = "inline";

        }

    }

    function myFunctionOne() {

        var dots = document.getElementById("dots-1");

        var moreText = document.getElementById("more-1");

        var btnText = document.getElementById("myBtn-1");

        if (dots.style.display === "none") {

            dots.style.display = "inline";

            btnText.innerHTML = "READ MORE";

            moreText.style.display = "none";

        } else {

            dots.style.display = "none";

            btnText.innerHTML = "READ LESS";

            moreText.style.display = "inline";

        }

    }

    function myFunctionTwo() {

        var dots = document.getElementById("dots-2");

        var moreText = document.getElementById("more-2");

        var btnText = document.getElementById("myBtn-2");

        if (dots.style.display === "none") {

            dots.style.display = "inline";

            btnText.innerHTML = "READ MORE";

            moreText.style.display = "none";

        } else {

            dots.style.display = "none";

            btnText.innerHTML = "READ LESS";

            moreText.style.display = "inline";

        }

    }



    function myFunctionThree() {

        var dots = document.getElementById("dots-3");

        var moreText = document.getElementById("more-3");

        var btnText = document.getElementById("myBtn-3");

        if (dots.style.display === "none") {

            dots.style.display = "inline";

            btnText.innerHTML = "READ MORE";

            moreText.style.display = "none";

        } else {

            dots.style.display = "none";

            btnText.innerHTML = "READ LESS";

            moreText.style.display = "inline";

        }

    }

    function myFunctionFour() {

        var dots = document.getElementById("dots-4");

        var moreText = document.getElementById("more-4");

        var btnText = document.getElementById("myBtn-4");

        if (dots.style.display === "none") {

            dots.style.display = "inline";

            btnText.innerHTML = "READ MORE";

            moreText.style.display = "none";

        } else {

            dots.style.display = "none";

            btnText.innerHTML = "READ LESS";

            moreText.style.display = "inline";

        }

    }

    function myFunctionFive() {

        var dots = document.getElementById("dots-5");

        var moreText = document.getElementById("more-5");

        var btnText = document.getElementById("myBtn-5");

        if (dots.style.display === "none") {

            dots.style.display = "inline";

            btnText.innerHTML = "READ MORE";

            moreText.style.display = "none";

        } else {

            dots.style.display = "none";

            btnText.innerHTML = "READ LESS";

            moreText.style.display = "inline";

        }

    }

    function myFunctionSix() {

        var dots = document.getElementById("dots-6");

        var moreText = document.getElementById("more-6");

        var btnText = document.getElementById("myBtn-6");

        if (dots.style.display === "none") {

            dots.style.display = "inline";

            btnText.innerHTML = "READ MORE";

            moreText.style.display = "none";

        } else {

            dots.style.display = "none";

            btnText.innerHTML = "READ LESS";

            moreText.style.display = "inline";

        }

    }

    function myFunctionSeven() {

        var dots = document.getElementById("dots-7");

        var moreText = document.getElementById("more-7");

        var btnText = document.getElementById("myBtn-7");

        if (dots.style.display === "none") {

            dots.style.display = "inline";

            btnText.innerHTML = "READ MORE";

            moreText.style.display = "none";

        } else {

            dots.style.display = "none";

            btnText.innerHTML = "READ LESS";

            moreText.style.display = "inline";

        }

    }
</script>

<!-- Read More Closed -->



</body>



</html>