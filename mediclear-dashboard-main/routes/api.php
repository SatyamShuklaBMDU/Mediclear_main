<?php

use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\API\Corporate_auth_controller;
use App\Http\Controllers\API\Customer_auth_controller;
use App\Http\Controllers\API\FeedbackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MedicaldetailsController;
use App\Http\Controllers\API\TestController;

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



Route::post('Customer/login', [Customer_auth_controller::class, 'login']);
Route::post('Customer/register', [Customer_auth_controller::class, 'register']);
Route::match(['get', 'post'], '/customer-profile', [Customer_auth_controller::class, 'addcustomerprofiledata'])->middleware('auth:sanctum');


Route::post('Corporate/login', [Corporate_auth_controller::class, 'login']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// allconsumerdata checkforbiddentoaddconsumer addcustomerprofiledata editconsumerdetails
Route::post('/feedback', [FeedbackController::class, 'feedbackDetail'])->middleware('auth:sanctum');
Route::post('/company', [CompanyController::class, 'companyDetail'])->middleware('auth:sanctum');
Route::post('/add-consumer-medical-details', [MedicaldetailsController::class, 'addconsumermedicaldetail'])->middleware('auth:sanctum');
Route::post('/all-consumer-data', [MedicaldetailsController::class, 'allconsumerdata'])->middleware('auth:sanctum');
Route::post('/consumer-data', [MedicaldetailsController::class, 'consumerData'])->middleware('auth:sanctum');
Route::post('/forbiddenlity-add-consumer', [MedicaldetailsController::class, 'checkforbiddentoaddconsumer'])->middleware('auth:sanctum');
Route::post('/edit-consumer-medical-data', [MedicaldetailsController::class, 'editconsumerdetails'])->middleware('auth:sanctum');

///Testing
Route::post('/bpdata', [TestController::class, 'bp'])->middleware('auth:sanctum');
Route::post('/hearingdata', [TestController::class, 'hearingData']);
Route::post('/rombergTest', [TestController::class, 'rombergTest'])->middleware('auth:sanctum');

