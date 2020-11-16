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
Route::get('/cv-register', function () {
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
Route::get('/pastry-chef', function () {
    return view('pastry-chef');
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
Route::get('/kitchen-assistant', function () {
    return view('kitchen-assistant');
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
Route::get('/waitress', function () {
    return view('waitress');
});
Route::get('/grill-chef', function () {
    return view('grill-chef');
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
Route::get('/upholsterer-upholstery-tailor', function () {
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
