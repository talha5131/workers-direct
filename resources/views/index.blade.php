@extends('layouts.base')
@section('title','Find Jobs & Jobseekers with Workers Direct | Best Recruitment Agency')
@section('description', 'Workers Direct specialised in temporary & short term staff recruitment. As one of the best Recruitment Agency
London we provide temp & perm warehouse, catering staff across UK.')
@section('content')


<html prefix="og: https://ogp.me/ns#">
<meta property="og:title" content="Workers Direct" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.workers-direct.com/" />
<!-- <link href="https://temping-agency.com" rel="canonical"/> -->
<meta name="twitter:site" content="@workersdirect">
<meta property="twitter:account_id" content="1234567890">
<meta property="twitter:title" content="Workers Direct">
<meta property="twitter:description" content="Workers Direct specialised in temporary & short term staff recruitment. As one of the best Recruitment Agency
London we provide temp & perm warehouse, catering staff across UK.">
<meta property="twitter:card" content="summary">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<style>
    .heading h2 a {
        color: #000000;
        font-weight: 700;
    }

    .owl-nav.disabled,
    .owl-dots.disabled {
        display: none;
    }
</style>

<div class="jp_banner_heading_cont_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_job_heading_wrapper">
                    <div class="jp_job_heading">
                        <section class="cd-intro">
                            <h1 class="cd-headline clip is-full-width"> <span>LOOKING FOR A </span> <span class="cd-words-wrapper"> <b class="is-visible">STAFF?</b> <b>JOB?</b> <b>TEMP?</b> </span> </h1>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_job_heading_wrapper">
                    <div class="jp_job_heading">
                        <p class=" wd-intro-para" style="font-size: 18px;font-family: 'Montserrat';">As the Best Recruitment Agency, Workers Direct Can Provide Both Temporary & Permanent Recruitment Solutions for Businesses of All Needs. Whether You’re Looking for New Workers Quickly or Want to Bring in World-Class Talent Long-Term & Short Terms Basis, Our Recruitment Solutions Can Take Care of Everything on Your Behalf. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_banner_main_jobs_wrapper">
                    <div class="jp_job_heading">
                        <p style="font-size: 18px;font-family: 'Montserrat';">Find Jobs, Employment & Career Opportunities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<marquee onmouseover="this.stop();" onmouseout="this.start();" hspace="5px" scrollamount="8" behavior="scroll" direction="right" width: 100%>
    <div class="jp_banner_jobs_categories_wrapper">
        <div class="container">
            <div id="administrative-bg" class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom">
                <div class="jp_top_jobs_category"> <i class="fa fa-user"></i>
                    <h3 style="font-size: 14px;"><a href="{{url('staffing-services/admin-staff')}}">Admin & Reception</a></h3>
                </div>
            </div>
            <div id="catering-bg" class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
                <div class="jp_top_jobs_category"> <i class="fa fa fa-cutlery"></i> &nbsp; &nbsp; <i class="fa fa-h-square "></i>
                    <h3 style="font-size: 14px;"><a href="{{url('staffing-services/catering-staff')}}">Catering & Hospitality</a></h3>
                </div>
            </div>
            <div id="hospitality-bg" class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
                <div class="jp_top_jobs_category"> <i class="fa fa-trademark "></i> &nbsp; &nbsp; <i class="fa fa-building "></i>
                    <h3 style="font-size: 14px;"><a href="{{url('staffing-services/construction-staff')}}">Trade & Construction</a></h3>
                </div>
            </div>
            <div id="healthcare-bg" class="jp_top_jobs_category_wrapper jp_job_cate_left_border_res">
                <div class="jp_top_jobs_category"> <i class="fa fa-medkit"></i>
                    <h3 style="font-size: 14px;"><a href="{{url('staffing-services/healthcare-staff')}}">Healthcare</a></h3>
                </div>
            </div>
            <div id="it-bg" class="jp_top_jobs_category_wrapper">
                <div class="jp_top_jobs_category"> <i class="fa fa-code"></i>
                    <h3 style="font-size: 14px;"><a href="{{url('it-support-technician')}}">IT Services </a></h3>
                </div>
            </div>
            <div id="all-services-bg" class="jp_top_jobs_category_wrapper">
                <div class="jp_top_jobs_category"> <i class="fa fa fa-cogs"></i>
                    <h3 style="font-size: 14px;"><a href="{{url('staffing-services/warehouse-staff')}}">Warehouse & Industrial</a></h3>
                </div>
            </div>
        </div>
    </div>
</marquee>
</div><!-- Header Wrapper End -->
<!-- aboutus_section start-->
<div class="aboutus_section">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">			<div class="jp_best_deal_heading_wrapper">				<div class="jp_best_deal_heading">					<h4>Welcome To Workers Direct</h4>				</div>			</div>		</div> -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cc_featured_product_main_wrapper">
                    <div class="jp_hiring_heading_wrapper jp_job_post_heading_wrapper margin-bottom-60">
                        <h2>Welcome To Workers Direct - The Recruitment Agency</h2>
                    </div>
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation" class="active"><a href="#best" aria-controls="best" role="tab" data-toggle="tab">About</a></li>
                        <li role="presentation"><a href="#hot" aria-controls="hot" role="tab" data-toggle="tab">Employer</a></li>
                        <li role="presentation"><a href="#trand" aria-controls="trand" role="tab" data-toggle="tab">Job Seeker</a></li>
                        <li role="presentation"><a href="#ideal" aria-controls="ideal" role="tab" data-toggle="tab">Workers Direct - Best Recruitment Agency</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="best">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 padding-top-20">
                            <div class="about_text_wrapper">
                                <div class="section_heading section_2_heading">
                                    <h2>About <span>Workers Direct ?</span></h2>
                                </div>
                                <p>Workers Direct specialised in temporary & short term staff recruitment. As one of the best Recruitment Agency London we provide temp & perm warehouse, catering staff across UK.</p>
                                <p>Workers Direct are experts in recruitment with over a decade of experience in finding the best solution for our companies and candidates. Our temporary staff recruitment team work with employers and staff, both local to our site and across the UK, in order to match the right person to the right role. Our quick-response consultants are highly professional and knowledgeable. As one of the leading temping agency London We are committed to finding the answer for your recruitment needs, and cover a wide range of recruitment services from temporary, peak season or long-term work, including contract.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 padding-top-20">
                            <div class="about_image_wrapper"> <img class="img-responsive" src="public/assets/images/content/about-workers-direct-1.jpg" alt="about-img"> </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="about_text_wrapper abt_2_para">
                                <div class="section_heading section_2_heading">
                                    <h2>What <span> We Do </span></h2>
                                </div>
                                <p>Workers Direct specialise in providing all kind of temporary & short terms staff across the UK. As one of the leading and cost effective temping agency, we have long list of satisfied clientele that includes Hospitals, Care homes, Charities, Hotels, country clubs, caterers, National & Internationals businesses and local schools. We find roles for office workers, administrators, kitchen staff, construction labourers, factory workers, warehouse team members, and teaching staff, as well as support workers in many other fields. </p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="about_text_wrapper abt_2_para">
                                <div class="section_heading section_2_heading">
                                    <h2>Temporary <span> Staffing Solution </span></h2>
                                </div>
                                <p> Workers Direct is the authority when it comes to <b><a href="staffing-services/temporary-staffing" style="color: #7CC24D;"> temporary staffing</b></a>. We recruit for temporary, temp-to-perm and short-term roles across a range of specialisations and are dedicated to getting it right. We are as flexible as your needs, with workers that can fill a gap in any workforce from very next day. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                            <div class="about_text_wrapper abt_2_para">
                                <div class="section_heading section_2_heading">
                                    <h2>Our Staffing <span> Services Are :</span></h2>
                                </div>
                                <ul> <br>
                                    <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="#"> Our team are approachable and professional</a> </li>
                                    <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="#">Our quick-response promise is about quality and accuracy </a> </li>
                                    <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="#"> We will find the right worker for each role</a> </li>
                                    <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="#"> We have a reputation for delivering top-notch service to our clients</a> </li>
                                    <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="#"> Our job is only done when yours has finished!</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 padding-top-20">
                            <div class="about_image_wrapper"> <img class="img-responsive" src="public/assets/images/content/about-workers-direct-2.jpg" alt="about-img"> </div>
                        </div>
                    </div> <!-- Tab 2    -->
                    <div role="tabpanel" class="tab-pane fade" id="hot">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 padding-top-20">
                            <div class="about_text_wrapper">
                                <div class="section_heading section_2_heading">
                                    <h2>Employer <span> </span></h2>
                                </div>
                                <p>At Workers Direct we pride ourselves in fulfilling your every staffing need. Our team of experienced HR experts work to ensure that they find the perfect staff for you, whatever you need. </p>
                                <p>We are well-versed in the most relevant, up to date regulations regarding human resources and the varying responsibilities any role can include. Workers Direct is dedicated to providing you with the solution to your staffing situation.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 padding-top-20">
                            <div class="about_image_wrapper"> <img class="img-responsive" src="public/assets/images/content/employer-workers-direct.png" alt="about-img"> </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="about_text_wrapper abt_2_para">
                                <div class="section_heading section_2_heading">
                                    <h2>Why <span> Workers Direct? </span></h2>
                                </div>
                                <p> We have a reputation for delivering friendly and efficient service to our clients, and are committed to meeting the high targets that we set ourselves. We promise, and deliver, the best service possible. Workers Direct strive to leave every employer that requests our help more than satisfied with the staff and service that they receive from us.</p>
                                <p>We offer a range of high quality services to meet the needs of the employers we co-operate with, locating and identifying the correct staff for you based upon the needs of your business. We make sure that the response to every request exceeds your expectations.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="about_text_wrapper abt_2_para">
                                <div class="section_heading section_2_heading">
                                    <h2> Cost <span>effective Recruitment Solutions </span></h2>
                                    <p>In today’s market every business is aware that staff can be the biggest liability, and drain, on your resources and revenue. We are here to help provide you with the most cost effective recruitment solution possible, whatever your requirement – nothing is too short or unusual. Whether you have a short-term contract role to fill, or a long term need, contact our team. We can work to find the solution for any and all requirements, finding the recruitment solution that is most cost-effective for you. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="about_text_wrapper abt_2_para">
                                <div class="section_heading section_2_heading">
                                    <h2> Benefits <span> of hiring a Temp </span></h2>
                                </div>
                                <p> <b>Temporary staff </b>are often the perfect solution to any recruitment need. Keen to work and as flexible as your needs, they can fill a gap in a workforce without requiring you to commit long-term. At Workers Direct we have hundreds of temporary staff on our books that could save you time and money. After a one-off cost to us, we can then manage the entire recruitment process for you, making the process as simple as possible. Let our team cover the HR and insurance requirements, Payroll process and organisation of tax responsibilities for you, leaving you to benefit from the keen worker. Our temps provide an efficient, effective solution to your staffing needs. </p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="about_text_wrapper abt_2_para">
                                <div class="section_heading section_2_heading">
                                    <h2> Save <span> Your Time and Money</span></h2>
                                </div>
                                <p> Get in touch with us today to discuss the requirements you have, and let our staff take on the rest of the process for you. By saving you the leg work of recruitment and the man-hours involved, you avoid the loss of your valuable time and resources on HR, admin and payroll costs. Whether you need short term work or have a permanent, contract role to fill, we can source and arrange the right staff for your business, after just a small initial conversation with you. Workers Direct can take the stress out of the process by handling it from start to finish, finding and managing the staff and leaving you with the result; the worker you wanted. </p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="about_text_wrapper abt_2_para">
                                <div class="section_heading section_2_heading">
                                    <h2> Our Guarantee <span> </span></h2>
                                </div>
                                <p> First and foremost in the mind of all staff at Workers Direct is our guarantee: to find and match the very best candidate to the right job, at a competitive cost, and as efficiently as possible, even on short notice. With over a decade of experience we are <a href="http://workers-direct.com/what-we-do/recruitment-solutions/"> Human Resource Specialists</a>, and consider ourselves partners to our clients. Workers Direct is not just another agency, but a team player that you can rely upon. </p>
                            </div>
                        </div>
                    </div> <!-- Tab 3 -->
                    <div role="tabpanel" class="tab-pane fade" id="trand">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 padding-top-20">
                            <div class="about_text_wrapper">
                                <div class="section_heading section_2_heading">
                                    <h2>Job <span> Seeker </span></h2>
                                </div>
                                <p class="margin-top-20"> We know that in today’s economy, unemployment is a scary reality for many workers, both experienced and new to the world of work. We also know that you are driven to succeed, itching for work and keen to prove your skills and ability. Workers Direct have a decade of experience in finding the recruitment solution for our job seekers, whether that be temporary, temp-to-perm, or contract roles, and whatever specialisation you are looking for. We recruit for everything from data-entry to teaching roles, from packaging work to medical receptionists, and the employers we partner with offer opportunities to develop and learn in each role. Our team are here to support every job seeker. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 padding-top-20">
                            <div class="about_image_wrapper"> <img class="img-responsive" src="public/assets/images/content/job-seeker-workers-direct.jpg" alt="about-img"> </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="about_text_wrapper abt_2_para">
                                <div class="section_heading section_2_heading">
                                    <h2> Recruitment <span> Agency London </span></h2>
                                </div>
                                <p> Workers Direct are an experienced recruitment agency for London that more and more candidates are looking to, as we are driven to find you work that will fit in with your skills and needs. <a href="http://workers-direct.com/jobs/cv-registration-form/">Submit Your CV</a> today and we can connect you to employers and businesses across London that are looking for workers – promptly. No matter if you want short term, temp-to-perm, or contract roles, let us know your experience, qualifications, or abilities, and we’ll find you that job in London.</p>
                                <div class="section_heading section_2_heading  margin-top-20">
                                    <h2>Employment <span> Agency </span></h2>
                                </div>
                                <p>Our employment agency takes pride in offering efficient, friendly and supportive service to our candidates. We are here to work with you during what can be a stressful, difficult search, that we make easy by taking it on for you. You may only need temporary work for a couple of weeks, or perhaps you want to settle and commit to a contract role? Call our experienced employment agency and we will handle the process of finding you work with clients that expect the best. </p>
                                <div class="section_heading section_2_heading margin-top-20">
                                    <h2> Interested <span> To Become a Temp? </span></h2>
                                </div>
                                <p> Temporary workers are in high demand in today’s job climate and the prospects are good; varied, practical work that can grow your skills and knowledge, giving you on-the-job learning without the need to commit until you find that dream role. Registering with our consultants couldn’t be simpler. Contact us and we’ll make an appointment to talk through what you need and who you are, and to assess your ability. When we know your requirements, we can start seeking short-term work for you immediately. Give us a call and try us out – we guarantee you will be satisfied. </p>
                            </div>
                        </div>
                    </div> <!-- TAB 4 -->
                    <div role="tabpanel" class="tab-pane fade" id="ideal">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 padding-top-20">
                            <div class="about_text_wrapper">
                                <div class="section_heading section_2_heading">
                                    <h2>Workers Direct - <span>Best Recruitment Agency</span></h2>
                                </div>
                                <p> Workers Direct has been providing outstanding recruitment and staffing services to its clients since 2010. This temping agency has been one of the leading staffing agencies in London, especially when it comes to providing temporary staff to employers. </p>
                                <p>Temporary agencies or <a href="https://workers-direct.com/jobs/"> temp agencies</a> are organizations that supply employees to employers who are in need of workers. Such employees may be considered for either short term or a long term basis. Many temporary agencies provide human resources consultations for organizations that need such service.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 padding-top-20">
                            <div class="about_image_wrapper"> <img class="img-responsive" src="public/assets/images/content/best-temping-agency-workers-direct.jpg" alt="about-img"> </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="about_text_wrapper abt_2_para">
                                <p> There are many advantages attached to using a temp agency for business. A company that has a short range project but not want to hire permanent staff can consider hiring a temp worker to carry out a specific job role. Workers Direct is responsible for selecting candidates whose experience and skills are vital to the industry or sector they supply staff to. The agency swiftly responds to request for temporary staff and quickly considers individuals on their data base through its five step recruitment process, immediately vacancy becomes available.</p>
                                <p>In many cases, temporary staff workers receive payment from the agency while undertaking work on behalf of the agency. Many job seekers sign up with agencies that offer them work on a short term even as they hunt for permanent or long term appointment. This to some extent gives them the opportunity to make choices whenever they are available to take on work and for how long. Individuals who consistently turn down offers are removed from the agencies data base. Temps who display high reputation and are both willing and reliable will likely be offered more work opportunities.</p>
                                <div class="section_heading section_2_heading">
                                    <h2> Why <span> You Should Consider Temp Agencies like Workers Direct? </span></h2>
                                </div>
                                <p> Workers Direct hire employees for a stipulated period of time based on the nature of the company’s project. Temporary workers may work either part time or full time, depending on the requirement. In some cases, these workers receive other benefits like health insurance, incentives and many other rewards. </p>
                                <div class="section_heading section_2_heading">
                                    <h2> What <span> Workers Direct Can Do For You </span></h2>
                                </div>
                                <p> As earlier mentioned, Workers Direct find qualified employees to fill qualified positions in other companies. The services of the <a href="https://staff-direct.co.uk/temp-agencies/"> temp agency </a> are required by the companies who are in need of short term employees. </p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-6 col-sm-6"> <span><b>"There are quite a number of jobs available at Workers Direct in the areas of Hospitality & Catering, Warehouse & Event, Construction & Trade, Administrative, Sales & Retail, Health & Social Care, Logistic, to mention a few."</b></span> </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="about_text_wrapper abt_2_para">
                                <div class="section_heading section_2_heading">
                                    <h2>The <span> benefits of working with Workers Direct are: </span></h2>
                                </div> <br>
                                <ul> <br>
                                    <li><i class="green  fa fa-check-square" aria-hidden="true"></i> Working through Workers Direct can earn you a gainful employment even as you search for a full time job. Your resume will also be free from employment gaps because assuming you have remained unemployed for a long period of time, the unusual gap in your work history may put you at a disadvantage with some employers. </li> <br>
                                    <li><i class=" green fa fa-check-square" aria-hidden="true"></i>Working through this agency gives you a lot of work experience. You will remain a more valuable employee as a result of your vast experience. Taking up a temping job is a great way of improving your skills, initiate contacts and experience new organizations. Besides, it will offer you the opportunity to learn the type of work environment that is most suitable for you. </li><br>
                                    <li><i class=" green fa fa-check-square" aria-hidden="true"></i> There are many jobs that are not advertised to the public. This information is available at the temporary placement agencies like Workers Direct; hence, by working with them, you can have access to more job leads. </li> <br>
                                    <li><i class="green  fa fa-check-square" aria-hidden="true"></i> You can earn a full time position with the company, especially if your work pleases the employer. Many employers like to hire individuals that have previously worked for the temping agencies. You can catch their attention by working hard. </li> <br>
                                    <li><i class="green  fa fa-check-square" aria-hidden="true"></i> Temping employment jobs are more flexible because you can work when you want and can be given time off if the temp agency is notified. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.industries&Sectors')


<div class="jp_best_deal_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_best_deal_heading_wrapper">
                    <div class="jp_best_deal_heading">
                        <h4>Learn Your First Steps</h4> <br>
                        <p>Our strategy is simple: to create a place where the best recruiters and most promising job seekers can achieve their full potential.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <!-- Youtube Iframe -->
                <div class="embed-responsive embed-responsive-16by9 videoo">
                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/rVJ7shidmB0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  -->
                    <object data='https://www.youtube.com/embed/rVJ7shidmB0' width='560px' height='315px'>
                    </object>
                </div>
                <!-- End Youtube Iframe -->
                <h4 class="italy">Explore our Services in Minutes</h4>
                <p class="mb-0 pl-4">&#8212; Learn the benefits</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="step-1 margin-top-20">
                    <div class="margin-top-10 jp_best_deal_icon_sec"> <i class="green fa fa-user"></i> </div>
                    <div class="jp_best_deal_cont_sec margin-top-15">
                        <h4><a href="register">Register </a> <span style="color: #7CC24D;">/</span> <a href="login"> Login</a></h4>
                        <p> Our professional recruiter will contact you within no time to find out your hiring needs, skills and experience of an ideal candidate & finally the job duration and location.</p>
                    </div>
                </div>
                <div class="step-1 margin-top-20">
                    <div class="margin-top-10 jp_best_deal_icon_sec"> <i class="green fa fa-address-card"></i> </div>
                    <div class="jp_best_deal_cont_sec margin-top-15">
                        <h4><a href="{{url('cv-registration')}}">CV Registration</a></h4>
                        <p> By registering with us, you will have exposure and access to temporary jobs easily. We will help you to get the best job that suits your qualification and skills.</p>
                    </div>
                </div>
                <div class="step-1 margin-top-20">
                    <div class="margin-top-10 jp_best_deal_icon_sec"> <i class="green fa fa-get-pocket"></i> </div>
                    <div class="jp_best_deal_cont_sec margin-top-15">
                        <h4><a href="submit-a-job">Submit a Job </a> <span style="color: #7CC24D;">/</span> <a href="jobs"> Get Hired</a></h4>
                        <p> If you want to hire you can Submit a Job. We have a large pool of candidates, who always ready to start a job on short notice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<!-- jp counter Wrapper Start -->
<div class="jp_counter_main_wrapper">
    <div class="container-fluid pl-0 pr-0">
        <div class="row">
            <div class="gc_counter_cont_wrapper_new col-md-2">
                <div class="count-description-new"> <span class="timer">52950</span><i class="slider_icon_size fa fa-plus"></i>
                    <h5 class="con1">WORKERS</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper_new col-md-2">
                <div class="count-description-new"> <span class="timer">98</span><i class="slider_icon_size fas fa-percent"></i>
                    <h5 class="con2">ENJOY WORK WITH US</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper_new col-md-2">
                <div class="count-description-new"> <span class="timer">92</span><i class="slider_icon_size fas fa-percent"></i>
                    <h5 class="con3">RETAINED WORKERS</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper_new col-md-2">
                <div class="count-description-new"> <span class="timer">572847</span><i class="slider_icon_size fa fa-plus"></i>
                    <h5 class="con4">WORKED HOURS</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper_new col-md-2">
                <div class="count-description-new"> <span class="timer">1200</span><i class="slider_icon_size fa fa-plus"></i>
                    <h5 class="con4">CLIENTS</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper_new col-md-2">
                <div class="count-description-new"> <span class="timer">1434</span><i class="slider_icon_size fa fa-plus"></i>
                    <h5 class="con4">SITES</h5>
                </div>
            </div>
        </div>

    </div>
</div> <!-- jp counter Wrapper End -->
<!-- jp first sidebar Wrapper Start -->

<div class="jp_first_sidebar_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="jp_career_main_wrapper">

                        <div class="container">

                            <div class="row">

                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                                    <div class="jp_hiring_slider_main_wrapper">

                                        <div class="jp_career_slider_heading_wrapper jp_best_deal_heading">

                                            <h2 class="margin-bottom-30" style="font-size: 20px;color: #000000;font-weight: 900;text-transform: uppercase;position: relative;">Featured Jobs</h2>

                                        </div>

                                        <div class="jp_career_slider_wrapper">

                                            <div class="owl-carousel owl-theme">

                                                <div class="item jp_recent_main">

                                                    <div class="jp_career_main_box_wrapper">

                                                        <div class="jp_career_img_wrapper">

                                                            <img src="{{url('public/assets/images/page-pictures/RECEPTION STAFF/reception_staff_3.jpg')}}" height="150px" alt="career_img" />


                                                        </div>

                                                        <div class="jp_career_cont_wrapper margin-top-20">

                                                            <p><i style="color: #7CC24D;" class="fa fa-calendar"></i>&nbsp;&nbsp; <a href="{{url('reception-job-page')}}">ASAP (Temporary to Perm)</a></p>

                                                            <h3 class="margin-top-10"><a style="color: black;font-weight: 700;font-size: 17px;" href="{{url('reception-job-page')}}">Receptionist (Required ASAP)</a></h3>

                                                            <p style="margin-top: 15px;line-height: 30px;">We at Workers Direct seek reliable and trustworthy Receptionist on temporary basis with experience in area of London.</p>

                                                        </div>

                                                    </div>



                                                </div>

                                                <div class="item jp_recent_main">

                                                    <div class="jp_career_main_box_wrapper">

                                                        <div class="jp_career_img_wrapper">

                                                            <img src="{{url('public/assets/images/page-pictures/TEMPORARY JOBS/temporary_jobs_3.jpg')}}" height="150px" alt="career_img" />


                                                        </div>

                                                        <div class="jp_career_cont_wrapper margin-top-20">

                                                            <p><i style="color: #7CC24D;" class="fa fa-calendar"></i>&nbsp;&nbsp; <a href="{{url('handyman-job-page')}}">ASAP (Temporary)</a></p>

                                                            <h3 class="margin-top-10"><a style="color: black;font-weight: 700;font-size: 17px;" href="{{url('handyman-job-page')}}">Handyman (Required ASAP)</a></h3>

                                                            <p style="margin-top: 15px;line-height: 30px;">We are hiring an experienced Handyman (multi skilled builder) on temporary, part time basis for a client based in Surrey area.</p>

                                                        </div>

                                                    </div>



                                                </div>

                                                <div class="item jp_recent_main">

                                                    <div class="jp_career_main_box_wrapper">

                                                        <div class="jp_career_img_wrapper">

                                                            <img src="{{url('public/assets/images/page-pictures/ADMIN STAFF/admin_staff_2.jpg')}}" height="150px" alt="career_img" />


                                                        </div>

                                                        <div class="jp_career_cont_wrapper margin-top-20">

                                                            <p><i style="color: #7CC24D;" class="fa fa-calendar"></i>&nbsp;&nbsp; <a href="{{url('careassistant-job-page')}}">ASAP (Permanent)</a></p>

                                                            <h3 class="margin-top-10"><a style="color: black;font-weight: 700;font-size: 17px;" href="{{url('careassistant-job-page')}}">Care Assistant (Required ASAP)</a></h3>

                                                            <p style="margin-top: 15px;line-height: 30px;">We are hiring an experienced Care Assistant on Permanent basis, for North London area.</p>

                                                        </div>

                                                    </div>



                                                </div>



                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cc_featured_product_main_wrapper">
                            <div class="jp_hiring_heading_wrapper jp_job_post_heading_wrapper">
                                <h2>Latest Jobs</h2>
                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="#part-time" aria-controls="trand" role="tab" data-toggle="tab">Temporary</a></li>
                                <li role="presentation"><a href="#full-time" aria-controls="best" role="tab" data-toggle="tab">Temp to Perm</a></li>
                                <li role="presentation"><a href="#permanent" aria-controls="best" role="tab" data-toggle="tab">Part Time</a></li>
                                <li role="presentation"><a href="#permanent" aria-controls="best" role="tab" data-toggle="tab">Permanent</a></li>
                                <li role="presentation" class="active"><a href="#remotely" aria-controls="hot" role="tab" data-toggle="tab">Quick Start</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="permanent">
                                <div class="ss_featured_products">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item" data-hash="zero">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img1.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Sales Assistant </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £8.72 - £9 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('sales-assistant-job-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">sales assistant,</a></li>
                                                        <li><a href="#">vendor job,</a></li>
                                                        <li><a href="#">dealer</a></li>
                                                        <li><a href="#">salesclerk,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img2.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>CPCS - 360 Excavator Driver </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £17 - £18 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Leatherhead</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('cpcs-job-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">driver,</a></li>
                                                        <li><a href="#">excavate,</a></li>
                                                        <li><a href="#">machinist</a></li>
                                                        <li><a href="#">operator,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img3.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>CSCS Labourer</h4>
                                                                <p>Permanent, Full Time</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9- £12 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('cscs-labourer-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">worker,</a></li>
                                                        <li><a href="#">employee,</a></li>
                                                        <li><a href="#">operative,</a></li>
                                                        <li><a href="#">handyman,</a></li>

                                                    </ul>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="item" data-hash="one">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img1.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>DBS Cook </h4>
                                                                <p>Part Time</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £10 - £13 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; West London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('dbs-cook-job-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">cook,</a></li>
                                                        <li><a href="#">food,</a></li>
                                                        <li><a href="#">dbs cook</a></li>
                                                        <li><a href="#">chef,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img2.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Temp Recruitment Consultant </h4>
                                                                <p>Part Time</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9 - £12 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; East London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('temp-recruitment-consultant')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">recruitment,</a></li>
                                                        <li><a href="#">temp recruitment,</a></li>
                                                        <li><a href="#">consultant</a></li>
                                                        <li><a href="#">hiring,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img3.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Data Entry Operatives </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £8.72 - £9 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Southampton</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('dataentry-operative')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">typing,</a></li>
                                                        <li><a href="#">dataentry,</a></li>
                                                        <li><a href="#">jobs</a></li>
                                                        <li><a href="#">typing speed,</a></li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item" data-hash="two">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img1.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Carpenters & Joiners </h4>
                                                                <p>Temporary to Permanent</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £17 - £18 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Harlow</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('carpenters-&-joiners')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">carpenters,</a></li>
                                                        <li><a href="#">temp labourer,</a></li>
                                                        <li><a href="#">worker</a></li>
                                                        <li><a href="#">furniture,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img2.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Staffing Coordinator </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9 - £12 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('staffing-coordinator')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">staffing,</a></li>
                                                        <li><a href="#">staffing coordinator,</a></li>
                                                        <li><a href="#">coordinator</a></li>
                                                        <li><a href="#">staff,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img3.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Admin Assistant </h4>
                                                                <p>Temporary to Permanent </p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9 - £10 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp;London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('admin-assistant')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">admin assistant,</a></li>
                                                        <li><a href="#">assistant,</a></li>
                                                        <li><a href="#">admin</a></li>
                                                        <li><a href="#">Administrative Assistant,</a></li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="video_nav_img_wrapper">
                                    <div class="video_nav_img">
                                        <ul>
                                            <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                            <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                            <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="remotely">
                                <div class="ss_featured_products">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item" data-hash="zero">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img1.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Warehouse Operatives </h4>
                                                                <p>Temporary to Permanent </p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £8.72 - £9 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Southall</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('warehouse-operatives')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">warehouse operatives,</a></li>
                                                        <li><a href="#">warehouse,</a></li>
                                                        <li><a href="#">operatives</a></li>
                                                        <li><a href="#">workers,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img2.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>CPCS - 360 Excavator Driver </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £17 - £18 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Leatherhead</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('cpcs-job-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">driver,</a></li>
                                                        <li><a href="#">excavate,</a></li>
                                                        <li><a href="#">machinist</a></li>
                                                        <li><a href="#">operator,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img3.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>CSCS Labourer</h4>
                                                                <p>Permanent, Full Time</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9- £12 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('cscs-labourer-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">worker,</a></li>
                                                        <li><a href="#">employee,</a></li>
                                                        <li><a href="#">operative,</a></li>
                                                        <li><a href="#">handyman,</a></li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item" data-hash="one">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img1.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>DBS Cook </h4>
                                                                <p>Part Time</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £10 - £13 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; West London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('dbs-cook-job-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">cook,</a></li>
                                                        <li><a href="#">food,</a></li>
                                                        <li><a href="#">dbs cook</a></li>
                                                        <li><a href="#">chef,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img2.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Temp Recruitment Consultant </h4>
                                                                <p>Part Time</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9 - £12 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; East London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('temp-recruitment-consultant')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">recruitment,</a></li>
                                                        <li><a href="#">temp recruitment,</a></li>
                                                        <li><a href="#">consultant</a></li>
                                                        <li><a href="#">hiring,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img3.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Data Entry Operatives </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £8.72 - £9 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Southampton</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('dataentry-operative')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">typing,</a></li>
                                                        <li><a href="#">dataentry,</a></li>
                                                        <li><a href="#">jobs</a></li>
                                                        <li><a href="#">typing speed,</a></li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item" data-hash="two">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img1.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Carpenters & Joiners </h4>
                                                                <p>Temporary to Permanent</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £17 - £18 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Harlow</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('carpenters-&-joiners')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">carpenters,</a></li>
                                                        <li><a href="#">temp labourer,</a></li>
                                                        <li><a href="#">worker</a></li>
                                                        <li><a href="#">furniture,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img2.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Staffing Coordinator </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9 - £12 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('staffing-coordinator')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">staffing,</a></li>
                                                        <li><a href="#">staffing coordinator,</a></li>
                                                        <li><a href="#">coordinator</a></li>
                                                        <li><a href="#">staff,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img3.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Admin Assistant </h4>
                                                                <p>Temporary to Permanent </p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9 - £10 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp;London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('admin-assistant')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">admin assistant,</a></li>
                                                        <li><a href="#">assistant,</a></li>
                                                        <li><a href="#">admin</a></li>
                                                        <li><a href="#">Administrative Assistant,</a></li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="video_nav_img_wrapper">
                                    <div class="video_nav_img">
                                        <ul>
                                            <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                            <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                            <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="part-time">
                                <div class="ss_featured_products">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item" data-hash="zero">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img1.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Sales Assistant </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £8.72 - £9 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('sales-assistant-job-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">sales assistant,</a></li>
                                                        <li><a href="#">vendor job,</a></li>
                                                        <li><a href="#">dealer</a></li>
                                                        <li><a href="#">salesclerk,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img2.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>CPCS - 360 Excavator Driver </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £17 - £18 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Leatherhead</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('cpcs-job-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">driver,</a></li>
                                                        <li><a href="#">excavate,</a></li>
                                                        <li><a href="#">machinist</a></li>
                                                        <li><a href="#">operator,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img3.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>CSCS Labourer</h4>
                                                                <p>Permanent, Full Time</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9- £12 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('cscs-labourer-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">worker,</a></li>
                                                        <li><a href="#">employee,</a></li>
                                                        <li><a href="#">operative,</a></li>
                                                        <li><a href="#">handyman,</a></li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item" data-hash="one">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img1.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>DBS Cook </h4>
                                                                <p>Part Time</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £10 - £13 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; West London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('dbs-cook-job-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">cook,</a></li>
                                                        <li><a href="#">food,</a></li>
                                                        <li><a href="#">dbs cook</a></li>
                                                        <li><a href="#">chef,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img2.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Temp Recruitment Consultant </h4>
                                                                <p>Part Time</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9 - £12 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; East London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('temp-recruitment-consultant')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">recruitment,</a></li>
                                                        <li><a href="#">temp recruitment,</a></li>
                                                        <li><a href="#">consultant</a></li>
                                                        <li><a href="#">hiring,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img3.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Data Entry Operatives </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £8.72 - £9 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Southampton</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('dataentry-operative')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">typing,</a></li>
                                                        <li><a href="#">dataentry,</a></li>
                                                        <li><a href="#">jobs</a></li>
                                                        <li><a href="#">typing speed,</a></li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item" data-hash="two">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img1.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Carpenters & Joiners </h4>
                                                                <p>Temporary to Permanent</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £17 - £18 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Harlow</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('carpenters-&-joiners')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">carpenters,</a></li>
                                                        <li><a href="#">temp labourer,</a></li>
                                                        <li><a href="#">worker</a></li>
                                                        <li><a href="#">furniture,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img2.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Staffing Coordinator </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9 - £12 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('staffing-coordinator')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">staffing,</a></li>
                                                        <li><a href="#">staffing coordinator,</a></li>
                                                        <li><a href="#">coordinator</a></li>
                                                        <li><a href="#">staff,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img3.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Admin Assistant </h4>
                                                                <p>Temporary to Permanent </p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9 - £10 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp;London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('admin-assistant')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">admin assistant,</a></li>
                                                        <li><a href="#">assistant,</a></li>
                                                        <li><a href="#">admin</a></li>
                                                        <li><a href="#">Administrative Assistant,</a></li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="video_nav_img_wrapper">
                                    <div class="video_nav_img">
                                        <ul>
                                            <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                            <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                            <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="full-time">
                                <div class="ss_featured_products">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item" data-hash="zero">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img1.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Sales Assistant </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £8.72 - £9 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('sales-assistant-job-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">sales assistant,</a></li>
                                                        <li><a href="#">vendor job,</a></li>
                                                        <li><a href="#">dealer</a></li>
                                                        <li><a href="#">salesclerk,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img2.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>CPCS - 360 Excavator Driver </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £17 - £18 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Leatherhead</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('cpcs-job-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">driver,</a></li>
                                                        <li><a href="#">excavate,</a></li>
                                                        <li><a href="#">machinist</a></li>
                                                        <li><a href="#">operator,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img3.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>CSCS Labourer</h4>
                                                                <p>Permanent, Full Time</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9- £12 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('cscs-labourer-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">worker,</a></li>
                                                        <li><a href="#">employee,</a></li>
                                                        <li><a href="#">operative,</a></li>
                                                        <li><a href="#">handyman,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item" data-hash="one">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img1.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>DBS Cook </h4>
                                                                <p>Part Time</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £10 - £13 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; West London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('dbs-cook-job-page')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">cook,</a></li>
                                                        <li><a href="#">food,</a></li>
                                                        <li><a href="#">dbs cook</a></li>
                                                        <li><a href="#">chef,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img2.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Temp Recruitment Consultant </h4>
                                                                <p>Part Time</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9 - £12 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; East London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('temp-recruitment-consultant')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">recruitment,</a></li>
                                                        <li><a href="#">temp recruitment,</a></li>
                                                        <li><a href="#">consultant</a></li>
                                                        <li><a href="#">hiring,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img3.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Data Entry Operatives </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £8.72 - £9 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Southampton</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('dataentry-operative')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">typing,</a></li>
                                                        <li><a href="#">dataentry,</a></li>
                                                        <li><a href="#">jobs</a></li>
                                                        <li><a href="#">typing speed,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item" data-hash="two">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img1.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Carpenters & Joiners </h4>
                                                                <p>Temporary to Permanent</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £17 - £18 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Harlow</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('carpenters-&-joiners')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">carpenters,</a></li>
                                                        <li><a href="#">temp labourer,</a></li>
                                                        <li><a href="#">worker</a></li>
                                                        <li><a href="#">furniture,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img2.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Staffing Coordinator </h4>
                                                                <p>Temporary</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9 - £12 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('staffing-coordinator')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">staffing,</a></li>
                                                        <li><a href="#">staffing coordinator,</a></li>
                                                        <li><a href="#">coordinator</a></li>
                                                        <li><a href="#">staff,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img"> <img src="{{url('public/assets/images/content/job_post_img3.jpg')}}" alt="post_img" /> </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>Admin Assistant </h4>
                                                                <p>Temporary to Permanent </p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; £9 - £10 per hour</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp;London</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="{{url('admin-assistant')}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">admin assistant,</a></li>
                                                        <li><a href="#">assistant,</a></li>
                                                        <li><a href="#">admin</a></li>
                                                        <li><a href="#">Administrative Assistant,</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="video_nav_img_wrapper">
                                    <div class="video_nav_img">
                                        <ul>
                                            <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                            <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                            <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="jp_first_right_sidebar_main_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_add_resume_wrapper">
                                <div class="jp_add_resume_img_overlay"></div>
                                <div class="jp_add_resume_cont"> <img src="public/assets/images/header/animated-logo-wd.gif" alt="logo" />
                                    <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
                                    <ul>
                                        <li><a href="{{url('cv-registration')}}"><i class="fa fa-plus-circle"></i> CV Registration</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="jp_downlord_main_wrapper">
                            <div class="jp_downlord_img_overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                        <div class="jp_down_mob_img_wrapper"> <img style="height: 300px; width: 300px; padding: 0px 0px 15px 0px;" src="public/assets/images/content/mobail.png" alt="mobail_img" /> </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="ss_download_wrapper_details" style="padding-top: 0px;">
                                            <h2 style="font-size: 22px;"><span>Download</span><br>Job Portal App Now!</h2>
                                            <p style="font-size: 15px; margin: 0px 0px 25px 0px;">Fast, Simple & Delightful. All it takes is 30 seconds to Download.</p> <a href="https://play.google.com/store/apps/details?id=com.mst_developers.workers_direct&hl=en" class="ss_playstore"><span><i class="fa fa-android" aria-hidden="true"></i></span> Play Store</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-20">
                            <div class="jp_rightside_job_categories_heading">
                                <h4>Download Job Portal App Now!</h4>
                            </div>
                            <div class="jp_downlord_main_wrapper">
                                <div class="jp_downlord_img_overlay"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                            <div class="jp_down_mob_img_wrapper"> <img style="height: 300px;" src="public/assets/images/content/mobail.png" alt="mobail_img" /> </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="ss_download_wrapper_details" style="padding-top: 14px; padding-left: 14px; padding-bottom: 24px;">


                                                <a href="https://play.google.com/store/apps/details?id=com.mst_developers.workers_direct&hl=en" class="ss_playstore"><span><i class="fa fa-android" aria-hidden="true"></i></span> Play Store</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="ss_download_wrapper_details" style="padding-top: 14px; padding-left: 14px; padding-bottom: 24px;">


                                                <a style="padding-right: 18px;" href="https://play.google.com/store/apps/details?id=com.mst_developers.workers_direct&hl=en" class="ss_playstore"><span><i class="fab fa-app-store-ios"></i></span> Apple Store</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Jobs by Category</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <ul>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Graphic Designer <span>(214)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Engineering Jobs <span>(514)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Mainframe Jobs <span>(554)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Legal Jobs <span>(457)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">IT Jobs <span>(1254)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">R&D Jobs <span>(554)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Government Jobs <span>(350)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">PSU Jobs <span>(221)</span></a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">View All Categories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Hire a Temp</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content" style="padding-bottom: 25px;">
                                    <ul>
                                        <li><i class="fa fa-caret-right"></i> <a href="service-administrator">Administrative</a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="staffing-services/reception-staff">Receptionist</a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="personal-assistant">PA</a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="kitchen-assistant">Kitchen Assistant</a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="grill-chef">Chef/Cook</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">KP</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="jobs/general-labourer">General Labourer</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="carpenter-multi-skilled">Multi-Skilled Operative</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">Handyman</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="caretaker-bus-driver">Driver</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="staffing-services/warehouse-staff">Warehouse Operative</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="it-support-technician">IT Professional</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="data-entry-operator">Data Entry Staff</a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">Career</a></li>
                                        <li><i class="fa fa-plus-circle" style="color: #797979 !important;"></i> <a href="nursery-nurses" style="color: #797979 !important;text-transform: capitalize;font-weight: normal;">Nurse</a></li>
                                    </ul>
                                    <a href="{{url('submit-a-job')}}" class="bookNowBtn"> Book Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- jp first sidebar Wrapper End -->
<!-- jp Client Wrapper Start -->
<div class="jp_client_slider_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_first_client_slider_wrapper">
                    <div class="jp_first_client_slider_img_overlay"></div>
                    <div class="jp_client_heading_wrapper">
                        <h2>What Clients Say?</h2>
                    </div>
                    <div class="jp_client_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="jp_client_slide_show_wrapper">
                                    <div class="jp_client_slider_img_wrapper"> <img src="public/assets/images/content/client_slider_img.png" alt="client_img" /> </div>
                                    <div class="jp_client_slider_cont_wrapper">
                                        <p>“The temp provided by Workers Direct was of high quality with the knowledge and skills that we required. Workers Direct found this temp for us through a vigorous screening and interviewing process”</p> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i><span> &nbsp;<b>~ Adrian Vanessa</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="jp_client_slide_show_wrapper">
                                    <div class="jp_client_slider_img_wrapper"> <img src="public/assets/images/content/client_slider_img1.png" alt="client_img" /> </div>
                                    <div class="jp_client_slider_cont_wrapper">
                                        <p>“We have had a very good relationship with our Workers Direct consultant. The consultant has been able to address and resolve every problem that we experienced with temps in a professional manner.”</p> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i><span> &nbsp;<b>~ Amanda Navin </b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="jp_client_slide_show_wrapper">
                                    <div class="jp_client_slider_img_wrapper"> <img src="public/assets/images/content/client_slider_img2.png" alt="client_img" /> </div>
                                    <div class="jp_client_slider_cont_wrapper">
                                        <p>“ In addition to their excellent service Workers Direct is always willing to negotiate satisfactory fees for the temps that they place with us. Their money back guarantee gives us peace of mind about each temp that we hire from Workers Direct.”</p> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i><span> &nbsp;<b>~ Michael Shaw</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- jp Client Wrapper End -->
<!-- jp Client Wrapper Start -->
<div class="jp_hiring_heading_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="margin-top-30">Our Clients</h2>
                <section class="customer-logos slider margin-top-60">
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (1).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (2).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (3).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (4).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (5).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (6).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (7).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (8).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (9).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (10).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (11).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (12).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (13).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (14).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (15).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (16).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (17).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (18).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (19).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (20).jpeg"></div>
                    <div class="slide"><img src="public/assets/images/clientsLogos/Client Logos (21).jpeg"></div>
                </section>
            </div>
        </div>
    </div>
</div> <!-- jp Client Wrapper End -->
<div class="aboutus_section-1">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="jp_register_section_main_wrapper">
                <div class="jp_regis_left_side_box_wrapper">
                    <div class="jp_regis_left_side_box"> <img src="public/assets/images/content/regis_icon.png" alt="icon" />
                        <h4>I’m an EMPLOYER</h4>
                        <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                        <ul>
                            <li><a href="employer"><i class="white fa fa-plus-circle"></i> Employer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="jp_regis_right_side_box_wrapper">
                    <div class="jp_regis_left_side_box"> <img src="public/assets/images/content/regis_icon2.png" alt="icon" />
                        <h4>I’m a Job Seeker</h4>
                        <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                        <ul>
                            <li><a href="job-seeker"><i class="white fa fa-plus-circle"></i> Job Seeker</a></li>
                        </ul>
                    </div>
                    <div class="jp_regis_center_tag_wrapper">
                        <p>OR</p>
                    </div>
                </div>
                <!-- <div class="jp_regis_right_side_box_wrapper">
                    <div class="jp_regis_right_img_overlay"></div>
                    <div class="jp_regis_right_side_box"> <img src="public/assets/images/content/regis_icon2.png" alt="icon" />
                        <h4>I’m a Job Seeker</h4>
                        <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                        <ul>
                            <li><a href="job-seeker.php"><i class="white fa fa-plus-circle"></i> &nbsp;Job Seeker</a></li>
                        </ul>
                    </div>
                    <div class="jp_regis_center_tag_wrapper">
                        <p>OR</p>
                    </div>
                </div> -->
            </div>
        </div> <!-- </div> -->
    </div>
    <!-- jp downlord Wrapper Start -->
    <!-- <div class="jp_downlord_main_wrapper" style="height: 210px;">
        <div class="jp_downlord_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="jp_down_mob_img_wrapper"> <img src="public/assets/images/content/mobail.png" alt="mobail_img" /> </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="ss_download_wrapper_details">
                        <h2><span>Download</span><br>Job Portal App Now!</h2>
                        <p>Fast, Simple & Delightful. All it takes is 30 seconds to Download.</p> <a href="https://play.google.com/store/apps/details?id=com.mst_developers.workers_direct&hl=en" class="ss_playstore"><span><i class="fa fa-android" aria-hidden="true"></i></span> Play Store</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 visible-sm visible-xs">
                    <div class="jp_down_mob_img_wrapper"> <img src="public/assets/images/content/mobail.png" class="img-responsive" alt="mobail_img" /> </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="jp_downlord_main_wrapper" style="height: 210px;"> -->

    <!-- jp downlord Wrapper End -->
    <script src="public/assets/js/jquery-2.1.1.js"></script>
    <script src="public/assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    </script>
    @endsection