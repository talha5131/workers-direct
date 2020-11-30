<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/404-error', function () {
    return view('404_error');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/employer', function () {
    return view('employer');
});
Route::get('/why-us', function () {
    return view('why-us');
});
Route::get('/terms-conditions', function () {
    return view('terms-&-conditions');
});
Route::get('/submit-a-job', 'JobController@Postajob');

Route::post('/submit-a-job', 'JobController@PostJob');

Route::get('/register', function () {
    return view('register');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/message', function () {
    return view('message');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/listing-single', function () {
    return view('listing-single');
});
Route::get('/listing-right', function () {
    return view('listing-right');
});
Route::get('/listing-left', function () {
    return view('listing-left');
});
Route::get('/job-seeker', 'JobController@Seekajob');

Route::post('/job-seeker', 'JobController@SeekJob');

Route::get('/index_vi', function () {
    return view('index_vi');
});
Route::get('/index_v', function () {
    return view('index_v');
});
Route::get('/index_map', function () {
    return view('index_map');
});
Route::get('/index_iv', function () {
    return view('index_iv');
});
Route::get('/index_II', function () {
    return view('index_II');
});
// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/cv-registration', function () {
    return view('cv-registration');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/company-listing-single-results', function () {
    return view('company-listing-single-results');
});
Route::get('/company-listing-single', function () {
    return view('company-listing-single');
});
Route::get('/company-listing', function () {
    return view('company-listing');
});
Route::get('/client-review', function () {
    return view('client-review');
});
Route::get('/candidate-profile', function () {
    return view('candidate-profile');
});
Route::get('/candidate-listing', function () {
    return view('candidate-listing');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/blog-single-right', function () {
    return view('blog-single-right');
});
Route::get('/blog-single-left', function () {
    return view('blog-single-left');
});
Route::get('/blog-right', function () {
    return view('blog-right');
});
Route::get('/blog-left', function () {
    return view('blog-left');
});
Route::get('staffing-services/temporary-staffing', function () {
    return view('temporary-staffing');
});
Route::get('/staffing-services/catering-staff', function () {
    return view('catering-staff');
});
Route::get('/cleaners', function () {
    return view('cleaners');
});
Route::get('/staffing-services/event-staff', function () {
    return view('event-staff');
});
Route::get('/workers-direct-the-best-temping-agency-in-london', function () {
    return view('best-temping-london');
});
Route::get('/kitchen-porter', function () {
    return view('kitchen-porter');
});
Route::get('/temp-chef-agency', function () {
    return view('temp-chef-agency');
});
Route::get('/staffing-services/warehouse-staff', function () {
    return view('warehouse-staff');
});
Route::get('/staffing-services/reception-staff', function () {
    return view('reception-staff');
});
Route::get('/jobs/general-labourer', function () {
    return view('general-labourer');
});
Route::get('/latest-jobs/telesales-executive', function () {
    return view('telesales-executive');
});
Route::get('/picker-packer', function () {
    return view('picker-packer');
});
Route::get('/jobs/pastry-chef', function () {
    return view('pastry-chef');
});
Route::get('/jobs/catering/relief-chef-agency', function () {
    return view('relief-chef-agency');
});
Route::get('/jobs/catering/local-chef-agency', function () {
    return view('local-chef-agency');
});
Route::get('/it-support-technician', function () {
    return view('it-support-technician');
});
Route::get('/cpcs-forklift-driver', function () {
    return view('forklift-driver');
});
Route::get('/staffing-services/packing-staff', function () {
    return view('packing-staff');
});
Route::get('/temp-jobs-london', function () {
    return view('temp-jobs-london');
});
Route::get('/staffing-services/healthcare-staff', function () {
    return view('healthcare-staff');
});
Route::get('/data-entry-operator', function () {
    return view('data-entry-operator');
});
Route::get('/sous-chef-jobs', function () {
    return view('sous-chef-jobs');
});
Route::get('/latest-jobs', function () {
    return view('latest-jobs');
});
Route::get('/temp-jobs-registration', function () {
    return view('temp-jobs-registration');
});
Route::get('/cscs-painter', function () {
    return view('cscs-painter');
});
Route::get('/jobs/catering/kitchen-assistant', function () {
    return view('kitchen-assistant');
});
Route::get('/jobs/catering/poea-cook-jobs-abroad', function () {
    return view('poea-cook-jobs-abroad');
});
Route::get('/jobs/catering/pastry-chef-recruitment-agencies', function () {
    return view('pastry-chef-recruitment');
});
Route::get('/jobs/catering/freelance-chef-agency', function () {
    return view('freelance-chef-agency');
});
Route::get('/jobs/catering/school-cook', function () {
    return view('school-cook');
});
Route::get('/jobs/catering/agency-chef-jobs', function () {
    return view('agency-chef-jobs');
});
Route::get('/housekeepers', function () {
    return view('housekeepers');
});
Route::get('/staffing-services/school-staffing', function () {
    return view('school-staffing');
});
Route::get('/shop-manager', function () {
    return view('shop-manager');
});
Route::get('/staffing-services/admin-staff', function () {
    return view('admin-staff');
});
Route::get('/mortgage-administrator', function () {
    return view('mortgage-administrator');
});
Route::get('/temporary-jobs-agency', function () {
    return view('temporary-jobs-agency');
});
Route::get('/luggage-porter', function () {
    return view('luggage-porter');
});
Route::get('/caretaker-bus-driver', function () {
    return view('caretaker-bus-driver');
});
Route::get('/hairdresser-jobs', function () {
    return view('hairdresser-jobs');
});
Route::get('/waxing-therapist', function () {
    return view('waxing-therapist');
});
Route::get('/telesales-executive-jobs', function () {
    return view('telesales-executive-jobs');
});
Route::get('/activities-coordinator', function () {
    return view('activities-coordinator');
});
Route::get('/waiting-staff', function () {
    return view('waiting-staff');
});
Route::get('/school-bus-driver', function () {
    return view('school-bus-driver');
});
Route::get('/virtual-assistant', function () {
    return view('virtual-assistant');
});
Route::get('/beautician-jobs', function () {
    return view('beautician-jobs');
});
Route::get('/forklift-driver-warehouse-assistant', function () {
    return view('forklift-driver-warehouse');
});
Route::get('/hospitality-staff', function () {
    return view('hospitality-staff');
});
Route::get('/van-drivers', function () {
    return view('van-drivers');
});
Route::get('/jobs/catering/waitress', function () {
    return view('waitress');
});
Route::get('/jobs/catering/temp-chef-agencies', function () {
    return view('temp-chef-agencies');
});
Route::get('/jobs/catering/pizza-chef-agency', function () {
    return view('pizza-chef-agency');
});
Route::get('/jobs/catering/sushi-chef-agency', function () {
    return view('sushi-chef-agency');
});
Route::get('/jobs/catering/private-chef-agency', function () {
    return view('private-chef-agency');
});
Route::get('/jobs/catering/chinese-chef', function () {
    return view('chinese-chef');
});
Route::get('/jobs/catering/personal-chef-agencies', function () {
    return view('personal-chef-agencies');
});
Route::get('/jobs/catering/front-of-house', function () {
    return view('front-of-house');
});
Route::get('/jobs/grill-chef', function () {
    return view('grill-chef');
});
Route::get('/jobs/catering/indian-chef', function () {
    return view('indian-chef');
});
Route::get('/jobs/catering/freelance-chef-recruitment-agencies', function () {
    return view('freelance-chef-recruitment-agencies');
});
Route::get('/jobs/catering/head-chef', function () {
    return view('head-chef');
});
Route::get('/jobs/catering/agency-chef', function () {
    return view('agency-chef');
});
Route::get('/jobs/catering/executive-chef-recruitment-agencies', function () {
    return view('executive-chef-recruitment');
});
Route::get('/jobs/catering/international-chef-recruitment-agencies', function () {
    return view('international-chef-recruitment');
});
Route::get('/jobs/catering/dishwasher', function () {
    return view('dishwasher');
});
Route::get('/jobs/catering/executive-chef', function () {
    return view('executive-chef');
});
Route::get('/what-we-do/agency-workers', function () {
    return view('agency-workers');
});
Route::get('/nursery-nurses', function () {
    return view('nursery-nurses');
});
Route::get('/thai-chef-job', function () {
    return view('thai-chef-job');
});
Route::get('/sous-chef-jobs-2', function () {
    return view('sous-chef-jobs-2');
});
Route::get('/staffing-services/construction-staff', function () {
    return view('construction-staff');
});
Route::get('/pages-links', function () {
    return view('pages-links');
});
Route::get('/latest-jobs/upholsterer-upholstery-tailor', function () {
    return view('upholsterer-upholstery-tailor');
});
Route::get('/london-recruitment-agencies', function () {
    return view('london-recruitment-agencies');
});
Route::get('/qualified-electrician', function () {
    return view('qualified-electrician');
});
Route::get('/kitchen-assistant-parttime', function () {
    return view('kitchen-assistant-parttime');
});
Route::get('/carpenter-multi-skilled', function () {
    return view('carpenter-multi-skilled');
});
Route::get('/service-administrator', function () {
    return view('service-administrator');
});
Route::get('/jobs', function () {
    return view('jobs');
});
Route::get('/school-receptionist', function () {
    return view('school-receptionist');
});
Route::get('/hr-assistant', function () {
    return view('hr-assistant');
});
Route::get('/cscs-labourer', function () {
    return view('cscs-labourer');
});
Route::get('/temporary-jobs', function () {
    return view('temporary-jobs');
});
Route::get('/temp-agencies-near-me', function () {
    return view('temp-agencies-near');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/industrial-staff', function () {
    return view('industrial-staff');
});
Route::get('/personal-assistant', function () {
    return view('personal-assistant');
});
Route::get('/staffing-services', function () {
    return view('staffing-services');
});
Route::get('/temping-agencies', function () {
    return view('temping-agencies');
});
Route::get('/services/it-telecoms', function () {
    return view('it-telecoms');
});
Route::get('/promotional-staff', function () {
    return view('promotional-staff');
});
Route::get('/what-we-do/short-term-staff', function () {
    return view('short-term-staff');
});
Route::get('/our-approach', function () {
    return view('our-approach');
});
Route::get('/our-statistics', function () {
    return view('our-statistics');
});
Route::get('/our-gurantee', function () {
    return view('our-gurantee');
});
Route::get('/our-clients', function () {
    return view('our-clients');
});
Route::get('/location', function () {
    return view('location');
});
Route::get('/temp-agency-london', function () {
    return view('temp-agency-london');
});
Route::get('/reception-job-page', function () {
    return view('reception-job-page');
});
Route::get('/handyman-job-page', function () {
    return view('handyman-job-page');
});
Route::get('/careassistant-job-page', function () {
    return view('careassistant-job-page');
});
Route::get('/sales-assistant-job-page', function () {
    return view('sales-assistant-job-page');
});
Route::get('/cpcs-job-page', function () {
    return view('cpcs-job-page');
});
Route::get('/cscs-labourer-page', function () {
    return view('cscs-labourer-page');
});
Route::get('/dbs-cook-job-page', function () {
    return view('dbs-cook-job-page');
});
Route::get('/temp-recruitment-consultant', function () {
    return view('temp-recruitment-consultant');
});
Route::get('/dataentry-operative', function () {
    return view('dataentry-operative');
});
Route::get('/carpenters-&-joiners', function () {
    return view('carpenters-&-joiners');
});
Route::get('/staffing-coordinator', function () {
    return view('staffing-coordinator');
});
Route::get('/admin-assistant', function () {
    return view('admin-assistant');
});
Route::get('/warehouse-operatives', function () {
    return view('warehouse-operatives');
});
Route::get('/quick-staffing', function () {
    return view('quick-staffing');
});
Route::get('/temp-to-perm', function () {
    return view('temp-to-perm');
});
Route::get('/nation-wide-temp', function () {
    return view('nation-wide-temp');
});
Route::get('/payroll-service', function () {
    return view('payroll-service');
});
Route::get('/reference-check', function () {
    return view('reference-check');
});
Route::get('/candidate-screening-selection', function () {
    return view('candidate-screening-selection');
});
Route::get('/on-site-recruitment', function () {
    return view('on-site-recruitment');
});
Route::get('/how-we-work', function () {
    return view('how-we-work');
});
Route::get('/quick-placement', function () {
    return view('quick-placement');
});
Route::get('/cost-effective-way', function () {
    return view('cost-effective-way');
});
Route::get('/f-a-q', function () {
    return view('f-a-q');
});
Route::get('/immediate-start', function () {
    return view('immediate-start');
});
Route::get('/temp-to-perm-jobs', function () {
    return view('temp-to-permjobs');
});
Route::get('/career-advice', function () {
    return view('career-advice');
});
Route::get('/time-sheet', function () {
    return view('time-sheet');
});
Route::get('/catering-assistant', function () {
    return view('catering-assistant');
});
Route::get('/ground-workers', function () {
    return view('ground-workers');
});
Route::get('/registered-nurse', function () {
    return view('registered-nurse');
});
Route::get('/ask-us', function () {
    return view('ask-us');
});
Route::get('/delivery-driver', function () {
    return view('delivery-driver');
});
Route::get('/warehouse-assistant', function () {
    return view('warehouse-assistant');
});
Route::get('/telehandler', function () {
    return view('telehandler');
});
Route::get('/painters-&-decorators', function () {
    return view('painters-&-decorators');
});
Route::get('/pickers-&-packers', function () {
    return view('pickers-&-packers');
});
Route::get('/customer-service-representative', function () {
    return view('customer-service-representative');
});
Route::get('/part-time-cleaners', function () {
    return view('part-time-cleaners');
});
Route::get('/school-caretaker', function () {
    return view('school-caretaker');
});
Route::get('/forklift-driver-job', function () {
    return view('forklift-driver-job');
});
Route::get('/electricians', function () {
    return view('electricians');
});
Route::get('/chef-de-partie', function () {
    return view('chef-de-partie');
});
Route::get('/electricians-mate', function () {
    return view('electricians-mate');
});
Route::get('/kitchen-porter-job', function () {
    return view('kitchen-porter-job');
});
Route::get('/head-sous-chef', function () {
    return view('head-sous-chef');
});
Route::get('/terms-of-engagement-for-agency-workers', function () {
    return view('terms-of-engagement');
});
Route::get('/locations/england/recruitment-agency-in-bowling-alley', function () {
    return view('recruitment-agency-in-bowling');
});
Route::get('/locations/england/recruitment-agency-in-iver', function () {
    return view('recruitment-agency-iver');
});
Route::get('/locations/england/job-agency-in-west-worldham', function () {
    return view('job-agency-west');
});
Route::get('/best-temp-talent', function () {
    return view('best-temp-talent');
});
Route::get('/locations/england/recruitment-agency-in-grazeley-green', function () {
    return view('recruitment-agency-grazeley');
});
Route::get('/recruitment-agency-ashburton', function () {
    return view('recruitment-agency-ashburton');
});
Route::get('/locations/england/job-agency-in-upper-holloway', function () {
    return view('job-agency-upper-holloway');
});
Route::get('/locations/england/recruitment-agency-in-harmans-water', function () {
    return view('recruitment-agency-harmans');
});
Route::get('/locations/england/recruitment-agency-in-sydenham', function () {
    return view('recruitment-agency-sydenham');
});
Route::get('/workers-direct-a-platform-for-hiring-employees', function () {
    return view('workers-direct-platform-hiring');
});
Route::get('/recruitment-agency-abdon', function () {
    return view('recruitment-agency-abdon');
});
Route::get('/recruitment-agency-aldreth', function () {
    return view('recruitment-agency-aldreth');
});
Route::get('/locations/england/recruitment-agency-in-brooks-green', function () {
    return view('recruitment-agency-brooks');
});
Route::get('/recruitment-agency-allington', function () {
    return view('recruitment-agency-allington');
});
Route::get('/recruitment-agency-abbeystead', function () {
    return view('recruitment-agency-abbeystead');
});
Route::get('/locations/england/recruitment-agency-in-latchingdon', function () {
    return view('recruitment-agency-latchingdon');
});
Route::get('/services/adult-education', function () {
    return view('adult-education');
});
Route::get('/locations/england/recruitment-agency-in-great-henny', function () {
    return view('recruitment-agency-henny');
});
Route::get('/what-we-do/job-advertisements-solutions', function () {
    return view('job-advertisements-solutions');
});
Route::get('/locations/england/recruitment-agency-in-redhill', function () {
    return view('recruitment-agency-redhill');
});
Route::get('/survey-staff', function () {
    return view('survey-staff');
});
Route::get('/locations/england/recruitment-agency-in-hatchford-end', function () {
    return view('recruitment-agency-hatchford');
});
Route::get('/locations/england/recruitment-agency-in-smiths-green', function () {
    return view('recruitment-agency-smiths');
});
Route::get('/recruitment-agency-aspull', function () {
    return view('recruitment-agency-aspull');
});
Route::get('/locations/england/recruitment-agency-in-haywards-heath', function () {
    return view('recruitment-agency-haywards');
});
Route::get('/locations/england/recruitment-agency-in-nasty', function () {
    return view('recruitment-agency-nasty');
});
Route::get('/locations/england/recruitment-agency-in-dungate', function () {
    return view('recruitment-agency-dungate');
});
Route::get('/locations/england/recruitment-agency-in-minsted', function () {
    return view('recruitment-agency-minsted');
});
Route::get('/locations/england/recruitment-agency-in-crockham-hill', function () {
    return view('recruitment-agency-crockham');
});
Route::get('/locations/england/recruitment-agency-in-peppers-green', function () {
    return view('recruitment-agency-peppers');
});
Route::get('/locations/england/recruitment-agency-in-bromham', function () {
    return view('recruitment-agency-bromham');
});
Route::get('/locations/england/recruitment-agency-in-hollingbourne', function () {
    return view('recruitment-agency-hollingbourne');
});
Route::get('/locations/england/recruitment-agency-in-runwell', function () {
    return view('recruitment-agency-runwell');
});
Route::get('/recruitment-agency-alderley', function () {
    return view('recruitment-agency-alderley');
});
Route::get('/locations/england/recruitment-agency-in-furnace-green', function () {
    return view('recruitment-agency-furnace');
});
Route::get('/locations/england/recruitment-agency-in-south-croydon', function () {
    return view('recruitment-agency-south');
});
Route::get('/sous-chef-head-chef', function () {
    return view('sous-chef-head-chef');
});
Route::get('/recruitment-agency-anmore', function () {
    return view('recruitment-agency-anmore');
});
Route::get('/locations/england/recruitment-agency-in-smarden', function () {
    return view('recruitment-agency-smarden');
});
Route::get('/locations/england/recruitment-agency-in-shalden', function () {
    return view('recruitment-agency-shalden');
});
Route::get('/locations/england/recruitment-agency-in-elmdon', function () {
    return view('recruitment-agency-elmdon');
});
Route::get('/locations/england/recruitment-agency-in-etchingham', function () {
    return view('recruitment-agency-etchingham');
});
Route::get('/locations/england/recruitment-agency-in-dorney-reach', function () {
    return view('recruitment-agency-dorney');
});
Route::get('/locations/england/recruitment-agency-in-speen', function () {
    return view('recruitment-agency-speen');
});
Route::get('/locations/england/recruitment-agency-in-horsleys-green', function () {
    return view('recruitment-agency-horsleys');
});
Route::get('/locations/england/recruitment-agency-in-marden-beech', function () {
    return view('recruitment-agency-marden');
});
Route::get('/locations/england/job-agency-in-wavendon-gate', function () {
    return view('job-agency-wavendon');
});
Route::get('/locations/england/recruitment-agency-in-fleeden', function () {
    return view('recruitment-agency-fleeden');
});
Route::get('/locations/england/recruitment-agency-in-greenwich', function () {
    return view('recruitment-agency-greenwich');
});
Route::get('/locations/england/job-agency-in-westland-green', function () {
    return view('job-agency-westland');
});
Route::get('/arabian-recruitment-consultancy', function () {
    return view('arabian-recruitment-consultancy');
});
Route::get('/locations/england/recruitment-agency-in-cannons-green', function () {
    return view('recruitment-agency-cannons');
});
Route::get('/recruitment-agency-ash-street', function () {
    return view('recruitment-agency-ash-street');
});
Route::get('/locations/england/recruitment-agency-in-pinner', function () {
    return view('recruitment-agency-pinner');
});
Route::get('/recruitment-agency-aldon', function () {
    return view('recruitment-agency-aldon');
});
Route::get('/locations/england/recruitment-agency-in-clophill', function () {
    return view('recruitment-agency-clophill');
});
Route::get('/locations/england/recruitment-agency-in-highmoor', function () {
    return view('recruitment-agency-highmoor');
});
Route::get('/social-media-executive-german-speaking', function () {
    return view('social-media-executive-german');
});
Route::get('/recruitment-agency-atherstone', function () {
    return view('recruitment-agency-atherstone');
});
Route::get('/locations/england/recruitment-agency-in-stroude', function () {
    return view('recruitment-agency-stroude');
});
Route::get('/locations/england/recruitment-agency-in-lexden', function () {
    return view('recruitment-agency-lexden');
});
Route::get('/top-staffing-agencies', function () {
    return view('top-staffing-agencies');
});
Route::get('/recruitment-agency-achreamie', function () {
    return view('recruitment-agency-achreamie');
});
Route::get('/locations/england/recruitment-agency-in-great-wigborough', function () {
    return view('recruitment-agency-wigborough');
});
Route::get('/locations/england/job-agency-in-woolley-green', function () {
    return view('job-agency-woolley');
});
Route::get('/locations/england/recruitment-agency-in-leytonstone', function () {
    return view('recruitment-agency-leytonstone');
});
Route::get('/recruitment-agency-avonwick', function () {
    return view('recruitment-agency-avonwick');
});
Route::get('/locations/england/recruitment-agency-in-dunton-green', function () {
    return view('recruitment-agency-dunton');
});
Route::get('/locations/england/recruitment-agency-in-lilley', function () {
    return view('recruitment-agency-lilley');
});
Route::get('/locations/england/recruitment-agency-in-north-feltham', function () {
    return view('recruitment-agency-feltham');
});
Route::get('/locations/england/recruitment-agency-in-harlington', function () {
    return view('recruitment-agency-harlington');
});
Route::get('/services/utilities', function () {
    return view('utilities');
});
Route::get('/locations/england/recruitment-agency-in-chalfont-st-peter', function () {
    return view('recruitment-agency-chalfont');
});
Route::get('/locations/england/recruitment-agency-in-forstal', function () {
    return view('recruitment-agency-forstal');
});
Route::get('/locations/england/recruitment-agency-in-chandlers-cross', function () {
    return view('recruitment-agency-chandlers');
});
Route::get('/locations/england/recruitment-agency-in-chelsham', function () {
    return view('recruitment-agency-chelsham');
});
Route::get('/locations/england/recruitment-agency-in-takeley', function () {
    return view('recruitment-agency-takeley');
});
Route::get('/locations/england/recruitment-agency-in-foxhall', function () {
    return view('recruitment-agency-foxhall');
});
Route::get('/locations/england/recruitment-agency-in-cowden', function () {
    return view('recruitment-agency-cowden');
});
Route::get('/locations/england/recruitment-agency-in-bopeep', function () {
    return view('recruitment-agency-bopeep');
});
Route::get('/locations/england/job-agency-in-warren-row', function () {
    return view('job-agency-warren');
});
Route::get('/locations/england/recruitment-agency-in-lower-stondon', function () {
    return view('recruitment-agency-stondon');
});
Route::get('/locations/england/recruitment-agency-in-old-hatfield', function () {
    return view('recruitment-agency-hatfield');
});
Route::get('/locations/england/recruitment-agency-in-theydon-bois', function () {
    return view('recruitment-agency-theydon');
});
Route::get('/locations/england/recruitment-agency-in-otford', function () {
    return view('recruitment-agency-otford');
});
Route::get('/locations/england/recruitment-agency-in-elstow', function () {
    return view('recruitment-agency-elstow');
});
Route::get('/locations/england/recruitment-agency-in-chiswell-green', function () {
    return view('recruitment-agency-chiswell');
});
Route::get('/locations/england/recruitment-agency-in-hankham', function () {
    return view('recruitment-agency-hankham');
});
Route::get('/locations/england/recruitment-agency-in-heston', function () {
    return view('recruitment-agency-heston');
});
Route::get('/locations/england/job-agency-in-west-kingsdown', function () {
    return view('job-agency-kingsdown');
});
Route::get('/locations/england/recruitment-agency-in-carshalton', function () {
    return view('recruitment-agency-carshalton');
});
Route::get('/recruitment-agency-ashgate', function () {
    return view('recruitment-agency-ashgate');
});
Route::get('/locations/england/recruitment-agency-in-greys-green', function () {
    return view('recruitment-agency-grey');
});
Route::get('/locations/england/job-agency-in-windlesham', function () {
    return view('job-agency-windlesham');
});
Route::get('/locations/england/recruitment-agency-in-chickney', function () {
    return view('recruitment-agency-chickney');
});
Route::get('/locations/england/recruitment-agency-in-sulhamstead', function () {
    return view('recruitment-agency-sulhamstead');
});
Route::get('/locations/england/job-agency-in-willian', function () {
    return view('job-agency-willian');
});
Route::get('/locations/england/recruitment-agency-in-eridge-green', function () {
    return view('recruitment-agency-eridge');
});
Route::get('/locations/england/recruitment-agency-in-east-oakley', function () {
    return view('recruitment-agency-oakley');
});
Route::get('/locations/england/recruitment-agency-in-catford', function () {
    return view('recruitment-agency-catford');
});
Route::get('/recruitment-agency-ashendon', function () {
    return view('recruitment-agency-ashendon');
});
Route::get('/locations/england/recruitment-agency-in-lenham', function () {
    return view('recruitment-agency-lenham');
});
Route::get('/locations/england/recruitment-agency-in-colesden', function () {
    return view('recruitment-agency-colesden');
});
Route::get('/locations/england/recruitment-agency-in-bygrave', function () {
    return view('recruitment-agency-bygrave');
});
Route::get('/locations/england/recruitment-agency-in-clatterford-end', function () {
    return view('recruitment-agency-clatterford');
});
Route::get('/locations/england/job-agency-in-wexham-street', function () {
    return view('job-agency-wexham');
});
Route::get('/recruitment-agency-ardoch', function () {
    return view('recruitment-agency-ardoch');
});
Route::get('/locations/england/job-agency-in-wokingham', function () {
    return view('job-agency-wokingham');
});
Route::get('/recruitment-agency-anchor', function () {
    return view('recruitment-agency-anchor');
});
Route::get('/locations/england/recruitment-agency-in-jacks-hatch', function () {
    return view('recruitment-agency-jacks');
});
Route::get('/locations/england/job-agency-in-watersfield', function () {
    return view('job-agency-watersfield');
});
Route::get('/locations/england/recruitment-agency-in-snow-hill', function () {
    return view('recruitment-agency-snow-hill');
});
Route::get('/locations/england/recruitment-agency-in-tadlow', function () {
    return view('recruitment-agency-tadlow');
});
Route::get('/locations/england/recruitment-agency-in-swanton', function () {
    return view('recruitment-agency-swanton');
});
Route::get('/recruitment-agency-albury', function () {
    return view('recruitment-agency-albury');
});
Route::get('/catering-manager', function () {
    return view('catering-manager');
});
Route::get('/burger-chef', function () {
    return view('burger-chef');
});
Route::get('/chef-wanted', function () {
    return view('chef-wanted');
});
Route::get('/recruitment-agency-aller', function () {
    return view('recruitment-agency-aller');
});
Route::get('/hr-recruitment-agencies', function () {
    return view('hr-recruitment-agencies');
});
Route::get('/hiring-a-temp', function () {
    return view('hiring-a-temp');
});
Route::get('/locations/england/recruitment-agency-in-gatton', function () {
    return view('recruitment-agency-gatton');
});
Route::get('/services/chemical-process', function () {
    return view('chemical-process');
});
Route::get('/locations/england/job-agency-in-warrens-green', function () {
    return view('job-agency-warrens');
});
Route::get('/support-workers', function () {
    return view('support-workers');
});
Route::get('/locations/england/recruitment-agency-in-chilton', function () {
    return view('recruitment-agency-chilton');
});
Route::get('/recruitment-agency-arne', function () {
    return view('recruitment-agency-arne');
});
Route::get('/recruitment-agency-ardminish', function () {
    return view('recruitment-agency-ardminish');
});
Route::get('/grill-chef-jobs', function () {
    return view('grill-chef-jobs');
});
Route::get('/recruitment-agency-aby', function () {
    return view('recruitment-agency-aby');
});
Route::get('/locations/england/recruitment-agency-in-stiff-street', function () {
    return view('recruitment-agency-stiff');
});
Route::get('/locations/england/recruitment-agency-in-stiff-street', function () {
    return view('recruitment-agency-stiff');
});
Route::get('/temporary-companies', function () {
    return view('temporary-companies');
});
Route::get('/recruitment-agency-apuldram', function () {
    return view('recruitment-agency-apuldram');
});
Route::get('/hospitlaity-staff', function () {
    return view('hospitlaity-staff');
});
Route::get('/terms-of-engagement-for-agency-workers', function () {
    return view('terms-of-engagement-agency-workers');
});
Route::get('/locations/england/recruitment-agency-in-golden-cross', function () {
    return view('recruitment-agency-golden-cross');
});
Route::get('/what-we-do/recruitment-solutions', function () {
    return view('recruitment-solutions');
});
Route::get('/locations/england/recruitment-agency-in-gaston-green', function () {
    return view('recruitment-agency-gaston');
});
Route::get('/pickers-packers', function () {
    return view('pickers-packers');
});
Route::get('/why-are-cooks-in-demand', function () {
    return view('why-cooks-demand');
});
Route::get('/locations/england/recruitment-agency-in-brock-hill', function () {
    return view('recruitment-agency-brock');
});
Route::get('/employers/get-a-quote', function () {
    return view('get-a-quote');
});

