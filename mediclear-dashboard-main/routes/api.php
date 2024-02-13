<?php

use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\API\Corporate_auth_controller;
use App\Http\Controllers\API\Customer_auth_controller;
use App\Http\Controllers\API\FeedbackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MedicaldetailsController;
use App\Http\Controllers\API\TestController;
use App\Http\Controllers\NotificationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//cutomer/////////////////////////////
Route::post('Customer/login', [Customer_auth_controller::class,'login']);
Route::post('Customer/register', [Customer_auth_controller::class,'register']);
Route::match(['get', 'post'], '/customer-profile', [Customer_auth_controller::class, 'addcustomerprofiledata'])->middleware('auth:sanctum');

//corporate///////
Route::post('Corporate/login', [Corporate_auth_controller::class,'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/feedback',[FeedbackController::class,'feedbackDetail'])->middleware('auth:sanctum');
Route::post('/company',[CompanyController::class,'companyDetail']);
Route::post('/add-consumer-medical-details', [MedicaldetailsController::class, 'addconsumermedicaldetail'])->middleware('auth:sanctum');
Route::post('/all-consumer-data', [MedicaldetailsController::class, 'allconsumerdata'])->middleware('auth:sanctum');
Route::post('/consumer-data', [MedicaldetailsController::class, 'consumerData'])->middleware('auth:sanctum');
Route::post('/forbiddenlity-add-consumer', [MedicaldetailsController::class, 'checkforbiddentoaddconsumer'])->middleware('auth:sanctum');
Route::post('/edit-consumer-medical-data', [MedicaldetailsController::class, 'editconsumerdetails'])->middleware('auth:sanctum');
Route::post('/corporate-company-list', [MedicaldetailsController::class, 'companywithbatch'])->middleware('auth:sanctum');
Route::post('/consumer-medical-data-delete', [MedicaldetailsController::class, 'deleteConsumerMedicaldata'])->middleware('auth:sanctum');

///Testing
Route::post('/bpdata', [TestController::class, 'bp']);
Route::post('/rombergTest', [TestController::class, 'rombergTest'])->middleware('auth:sanctum');
Route::post('/check-access-test', [TestController::class, 'checkaccesoftest'])->middleware('auth:sanctum');
Route::post('/eyecheckup', [TestController::class, 'eyecheckup'])->middleware('auth:sanctum');
Route::post('/eyedistance', [TestController::class, 'eyedistance']);
Route::post('/hearingdata', [TestController::class, 'hearingData']);
Route::post('/videonystagmography', [TestController::class, 'videonystagmography'])->middleware('auth:sanctum');
Route::post('/flatfoot', [TestController::class, 'flatfoot'])->middleware('auth:sanctum');
Route::post('/bppv', [TestController::class, 'bppv'])->middleware('auth:sanctum');
Route::post('/fukuda', [TestController::class, 'fukuda'])->middleware('auth:sanctum');
Route::post('/get-report',[TestController::class,'certificationreport']);
//Notification
Route::post('/notification', [NotificationController::class, 'notification'])->middleware('auth:sanctum');
Route::post('/newnotification', [NotificationController::class, 'newnotification'])->middleware('auth:sanctum');
//banner api
Route::post('/banner', [NotificationController::class, 'showBannerAPI'])->middleware('auth:sanctum');
//banner api
