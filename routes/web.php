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
Route::get('/terms-&-conditions', function () {
    return view('terms-&-conditions');
});
Route::get('/submit-a-job', function () {
    return view('submit-a-job');
});
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
Route::get('/job-seeker', function () {
    return view('job-seeker');
});
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
Route::get('/temporary-staffing', function () {
    return view('temporary-staffing');
});
Route::get('/catering-staff', function () {
    return view('catering-staff');
});
Route::get('/cleaners', function () {
    return view('cleaners');
});
Route::get('/event-staff', function () {
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
Route::get('/warehouse-staff', function () {
    return view('warehouse-staff');
});
Route::get('/reception-staff', function () {
    return view('reception-staff');
});
Route::get('/general-labourer', function () {
    return view('general-labourer');
});
Route::get('/telesales-executive', function () {
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
Route::get('/packing-staff', function () {
    return view('packing-staff');
});
Route::get('/temp-jobs-london', function () {
    return view('temp-jobs-london');
});
Route::get('/healthcare-staff', function () {
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
Route::get('/school-staffing', function () {
    return view('school-staffing');
});
Route::get('/shop-manager', function () {
    return view('shop-manager');
});
Route::get('/admin-staff', function () {
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
Route::get('/construction-staff', function () {
    return view('construction-staff');
});
Route::get('/pages-links', function () {
    return view('pages-links');
});