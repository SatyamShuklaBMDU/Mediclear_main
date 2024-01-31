<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomerBatch;
use App\Models\MedicalDetail;
use App\Models\CorporateBatch;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Faker\Provider\Medical;

class MedicaldetailsController extends Controller
{
    public function addconsumermedicaldetail(Request $request)
    {
        try {
            // dd(auth('customer-api')->user());
            // $rules=array(
            //     'name' => ['required', 'string', 'max:255'],
            //     'role' => ['required', 'in:subscriber,school,group' ],
            //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //     'phone' => ['required', 'string', 'min:10', 'max:10'],
            //     'password' => ['required', 'string', 'min:8'],
            //     //'age' => ['required', 'min:1','max:2' ],
            // );

            // $validator = Validator::make($request->all(),$rules);
            // if($validator->fails())
            // { 
            //     return Response::json(array(
            //         'status'    => 'error',
            //         'code'      =>  400,
            //         'message'   =>  array('msg'=>$validator->messages()->first())
            //     ), 400);
            //corporate-api
            //     //return $validator->messages()->all();  
            // } 
            // $user = Auth::user();
            // // Access the tokenable_type
            // $tokenableType = $user->tokenable_type;
            // Output or use the $tokenableType as needed
            if (Auth::check()) {
                $user = Auth::user();
                $modelName = $user->getMorphClass();
                $token_type = $modelName;
            }
            if ($token_type == "App\Models\Customer") {
                $consumerId = Auth::User()->id;
                $customerBatch = CustomerBatch::where('batch_no', $request->batch_no)->where('customer_id', $consumerId)->first();
            } elseif ($token_type == "App\Models\CorporateID") {
                $consumerId = Auth::User()->id;
                $customerBatch = CorporateBatch::where('batch_no', $request->batch_no)->where('company_id', $request->company_id)->first();
            }
            if (!isset($customerBatch)) {
                return response()->json([
                    'status' => 'forbidden',
                    'code' => 403,
                    'message' => 'Please enter Valid Batch Number',
                ], 403);
            }
            $latestMediaclDetailsSave = $customerBatch->getbatchdetails()->latest()->first();
            if (isset($latestMediaclDetailsSave)) {
                $testtypename = DB::table('test_types')->where('id', $request->test_type_id)->pluck('test_name');
                $latestcusmerbatchdetails_type = $latestMediaclDetailsSave->cusmerbatchdetails_type;
                $cusmerbatchdetails_id = $latestMediaclDetailsSave->cusmerbatchdetails_id;
                $latestComment = MedicalDetail::with('cusmerbatchdetails')
                    ->where('cusmerbatchdetails_type', $latestcusmerbatchdetails_type)
                    ->where('cusmerbatchdetails_id', $cusmerbatchdetails_id)
                    ->latest()
                    ->first();
                $CountMedicalsData = MedicalDetail::where('cusmerbatchdetails_type', $latestcusmerbatchdetails_type)->where('cusmerbatchdetails_id', $cusmerbatchdetails_id)->count();
                $remaingTest = ($latestComment->cusmerbatchdetails->test) - ($CountMedicalsData);
                if ($CountMedicalsData == $latestComment->cusmerbatchdetails->test) {
                    return response()->json([
                        'status' => 'forbidden',
                        'code' => 403,
                        'message' => 'You cross your limit of Testing',
                    ], 403);
                }
            }
            $image = $request->file('consumer_profile_image');
            $current_timestamp = Carbon::now()->timestamp;
            $imageName = $current_timestamp . '.' . $image->getClientOriginalName();
            $image->move(public_path('/images'), $imageName);
            $imagesign = $request->file('consumer_sign_image');
            $current_timestamp = Carbon::now()->timestamp;
            $imagesignName = $current_timestamp . '.' . $imagesign->getClientOriginalName();
            $imagesign->move(public_path('/sign'), $imagesignName);
            $medicaldetails = new MedicalDetail([
                'parent_id' => Auth::User()->user_id,
                'test_type_id' => $request->test_type_id,
                'consumer_name' => $request->consumer_name,
                'consumer_location' => $request->consumer_location,
                'consumer_mob_no' => $request->consumer_mob_no,
                'consumer_dob' => $request->consumer_dob,
                'consumer_addhar_number' => $request->consumer_addhar_number,
                'consumer_profile_image_name' => $imageName,
                'consumer_sign_image_name' => $imagesignName,
                'gender' => $request->gender,
                'light_hedness_or_swim_sensation_in_the_head' => $request->light_hedness_or_swim_sensation_in_the_head,
                'blacking_out_or_loss_of_consciousness' => $request->blacking_out_or_loss_of_consciousness,
                'object_spinning_or_turning_around_you' => $request->object_spinning_or_turning_around_you,
                'nausea_or_vomiting' => $request->nausea_or_vomiting,
                'tingling_in_your_fingers_toes_around_your_mouth' => $request->tingling_in_your_fingers_toes_around_your_mouth,
                'does_changes_of_position_make_you_dizzy' => $request->does_changes_of_position_make_you_dizzy,
                'when_you_are_dizzy_must_support_yourself_when_standing' => $request->when_you_are_dizzy_must_support_yourself_when_standing,
                'post_mediacal_history_disease' => json_encode($request->post_mediacal_history_disease),
                'defficulting_in_hearing' => json_encode($request->defficulting_in_hearing),
                'noise_in_ears' => json_encode($request->noise_in_ears),
                'fullness_or_stuffiness_in_your_ears' => json_encode($request->fullness_or_stuffiness_in_your_ears),
                'complaints' => json_encode($request->complaints),
            ]);
            $savemedicalDeatils = $customerBatch->getbatchdetails()->save($medicaldetails);
            $latestMediaclDetailsSave = $customerBatch->getbatchdetails()->latest()->first();
            $testtypename = DB::table('test_types')->where('id', $request->test_type_id)->pluck('test_name');
            $latestcusmerbatchdetails_type = $latestMediaclDetailsSave->cusmerbatchdetails_type;
            $cusmerbatchdetails_id = $latestMediaclDetailsSave->cusmerbatchdetails_id;
            $latestComment = MedicalDetail::with('cusmerbatchdetails')
                ->where('cusmerbatchdetails_type', $latestcusmerbatchdetails_type)
                ->where('cusmerbatchdetails_id', $cusmerbatchdetails_id)
                ->latest()
                ->first();
            $CountMedicalsData = MedicalDetail::where('cusmerbatchdetails_type', $latestcusmerbatchdetails_type)->where('cusmerbatchdetails_id', $cusmerbatchdetails_id)->count();
            $remaingTest = ($latestComment->cusmerbatchdetails->test) - ($CountMedicalsData);
            $post_mediacal_history_disease = json_decode($latestComment->post_mediacal_history_disease);
            $defficulting_in_hearing = json_decode($latestComment->defficulting_in_hearing);
            $noise_in_ears = json_decode($latestComment->noise_in_ears);
            $complaints = json_decode($latestComment->complaints);
            $fullness_or_stuffiness_in_your_ears = json_decode($latestComment->fullness_or_stuffiness_in_your_ears);
            $sendData = [];
            $sendData['parent_id'] = Auth::User()->id;
            $sendData['id'] = $latestComment->id;
            $sendData['consumer_name'] = $latestComment->consumer_name;
            $sendData['consumer_location'] = $latestComment->consumer_location;
            $sendData['consumer_mob_no'] = $latestComment->consumer_mob_no;
            $sendData['consumer_addhar_number'] = $latestComment->consumer_addhar_number;
            $sendData['gender'] = $latestComment->gender;
            $sendData['consumer_profile_image_name'] = asset('public' . '/images' . '/' . $latestComment->consumer_profile_image_name);
            $sendData['consumer_sign_image_name'] = asset('public' . '/sign' . '/' . $latestComment->consumer_sign_image_name);
            $sendData['light_hedness_or_swim_sensation_in_the_head'] = $latestComment->light_hedness_or_swim_sensation_in_the_head;
            $sendData['blacking_out_or_loss_of_consciousness'] = $latestComment->blacking_out_or_loss_of_consciousness;
            $sendData['object_spinning_or_turning_around_you'] = $latestComment->object_spinning_or_turning_around_you;
            $sendData['nausea_or_vomiting'] = $latestComment->nausea_or_vomiting;
            $sendData['tingling_in_your_fingers_toes_around_your_mouth'] = $latestComment->tingling_in_your_fingers_toes_around_your_mouth;
            $sendData['does_changes_of_position_make_you_dizzy'] = $latestComment->does_changes_of_position_make_you_dizzy;
            $sendData['when_you_are_dizzy_must_support_yourself_when_standing'] = $latestComment->when_you_are_dizzy_must_support_yourself_when_standing;
            $sendData['post_mediacal_history_disease'] = $post_mediacal_history_disease;
            $sendData['defficulting_in_hearing'] = $defficulting_in_hearing;
            $sendData['noise_in_ears'] = $noise_in_ears;
            $sendData['fullness_or_stuffiness_in_your_ears'] = $fullness_or_stuffiness_in_your_ears;
            $sendData['complaints'] = $complaints;
            $sendData['testname'] = $testtypename[0];
            $sendData['total_test'] = $latestComment->cusmerbatchdetails->test;
            $sendData['gave_test'] = $CountMedicalsData;
            $sendData['remaing_test'] = $remaingTest;
            if ($savemedicalDeatils) {
                return response()->json([
                    'success' => true,
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'medical data add sucessfully',
                    'data' => $sendData
                ], 200);
            }
        } catch (\Exception $e) {
            return Response::json(
                array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => $e->getmessage()
                ),
                404
            );
        }
    }
    public function allconsumerdata(Request $request)
    {
        try {
            if (Auth::check()) {
                $user = Auth::user();
                $modelName = $user->getMorphClass();
                $token_type = $modelName;
            }
            if ($token_type == "App\Models\Customer") {
                $consumerId = Auth::User()->id;
                $customerBatch = CustomerBatch::where('batch_no', $request->batch_no)->where('customer_id', $consumerId)->first();
            } elseif ($token_type == "App\Models\CorporateID") {
                $consumerId = Auth::User()->id;
                $customerBatch = CorporateBatch::where('batch_no', $request->batch_no)->where('corporate_id', $consumerId)->first();
            }
            if (!isset($customerBatch)) {
                return response()->json([
                    'status' => 'forbidden',
                    'code' => 403,
                    'message' => 'Please enter Valid Batch Number',
                ], 403);
            }
            $allConsumerData = $customerBatch->getbatchdetails;
            $allSendData = [];

            foreach ($allConsumerData as $k => $data) {
                $allSendData[$k]['id'] = $data->id;
                $allSendData[$k]['consumer_name'] = $data->consumer_name;
                $allSendData[$k]['consumer_profile_image_name'] = asset($data->consumer_profile_image_name);
                $allSendData[$k]['consumer_status'] = $data->consumer_status;

            }



            if ($allSendData) {
                return response()->json([
                    'success' => true,
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'Consumer Detail Data Before Examantion Of Test',
                    'data' => $allSendData


                ], 200);


            }
        } catch (\Exception $e) {

            return Response::json(
                array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => $e->getmessage()
                ),
                404
            );

        }


    }


    public function consumerData(Request $request)
    {
        try {
            $consumerData = MedicalDetail::where('id', $request->id)->first();



            $post_mediacal_history_disease = json_decode(json_decode($consumerData->post_mediacal_history_disease));
            $defficulting_in_hearing = json_decode(json_decode($consumerData->defficulting_in_hearing));
            $noise_in_ears = json_decode(json_decode($consumerData->noise_in_ears));


            $complaints = json_decode((json_decode($consumerData->complaints)));
            $fullness_or_stuffiness_in_your_ears = json_decode(json_decode($consumerData->fullness_or_stuffiness_in_your_ears));




            $sendData = [];
            $sendData['id'] = $consumerData->id;
            $sendData['parent_id'] = $consumerData->parent_id;

            $sendData['consumer_name'] = $consumerData->consumer_name;
            $sendData['consumer_location'] = $consumerData->consumer_location;
            $sendData['consumer_mob_no'] = $consumerData->consumer_mob_no;
            $sendData['consumer_addhar_number'] = $consumerData->consumer_addhar_number;
            $sendData['gender'] = $consumerData->gender;
            $sendData['consumer_profile_image_name'] = asset('public' . '/images' . '/' . $consumerData->consumer_profile_image_name);
            $sendData['consumer_sign_image_name'] = asset('public' . '/sign' . '/' . $consumerData->consumer_sign_image_name);
            $sendData['light_hedness_or_swim_sensation_in_the_head'] = $consumerData->light_hedness_or_swim_sensation_in_the_head;
            $sendData['blacking_out_or_loss_of_consciousness'] = $consumerData->blacking_out_or_loss_of_consciousness;
            $sendData['object_spinning_or_turning_around_you'] = $consumerData->object_spinning_or_turning_around_you;
            $sendData['nausea_or_vomiting'] = $consumerData->nausea_or_vomiting;
            $sendData['tingling_in_your_fingers_toes_around_your_mouth'] = $consumerData->tingling_in_your_fingers_toes_around_your_mouth;

            $sendData['does_changes_of_position_make_you_dizzy'] = $consumerData->does_changes_of_position_make_you_dizzy;
            $sendData['when_you_are_dizzy_must_support_yourself_when_standing'] = $consumerData->when_you_are_dizzy_must_support_yourself_when_standing;
            $sendData['post_mediacal_history_disease'] = $post_mediacal_history_disease;
            $sendData['defficulting_in_hearing'] = $defficulting_in_hearing;
            $sendData['noise_in_ears'] = $noise_in_ears;
            $sendData['fullness_or_stuffiness_in_your_ears'] = $fullness_or_stuffiness_in_your_ears;
            $sendData['complaints'] = $complaints;








            if ($sendData) {
                return response()->json([
                    'success' => true,
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'Consumer Detail Data Before Examantion Of Test',
                    'data' => $sendData


                ], 200);


            }

        } catch (\Exception $e) {
            return Response::json(
                array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => $e->getmessage()
                ),
                404
            );
        }



    }


    public function checkforbiddentoaddconsumer(Request $request)
    {

        try {


            if (Auth::check()) {
                $user = Auth::user();
                $modelName = $user->getMorphClass();

                $token_type = $modelName;

            }

            if ($token_type == "App\Models\Customer") {
                $consumerId = Auth::User()->id;

                $customerBatch = CustomerBatch::where('batch_no', $request->batch_no)->where('customer_id', $consumerId)->first();

            } elseif ($token_type == "App\Models\CorporateID") {
                $consumerId = Auth::User()->id;
                $customerBatch = CorporateBatch::where('batch_no', $request->batch_no)->where('corporate_id', $consumerId)->first();


            }

            if (!isset($customerBatch)) {
                return response()->json([

                    'status' => 'forbidden',
                    'code' => 403,
                    'message' => 'Please enter Valid Batch Number',
                ], 403);

            }





            $latestMediaclDetailsSave = $customerBatch->getbatchdetails()->latest()->first();

            if (isset($latestMediaclDetailsSave)) {
                $testtypename = DB::table('test_types')->where('id', $request->test_type_id)->pluck('test_name');

                $latestcusmerbatchdetails_type = $latestMediaclDetailsSave->cusmerbatchdetails_type;
                $cusmerbatchdetails_id = $latestMediaclDetailsSave->cusmerbatchdetails_id;

                $latestComment = MedicalDetail::with('cusmerbatchdetails')
                    ->where('cusmerbatchdetails_type', $latestcusmerbatchdetails_type)
                    ->where('cusmerbatchdetails_id', $cusmerbatchdetails_id)
                    ->latest()
                    ->first();

                $totalTestOfAvalible = $latestComment->cusmerbatchdetails->test;

                $CountMedicalsData = MedicalDetail::where('cusmerbatchdetails_type', $latestcusmerbatchdetails_type)->where('cusmerbatchdetails_id', $cusmerbatchdetails_id)->count();

                $remaingTest = ($latestComment->cusmerbatchdetails->test) - ($CountMedicalsData);

                if ($CountMedicalsData == $latestComment->cusmerbatchdetails->test) {
                    return response()->json([

                        'status' => 'forbidden',
                        'code' => 403,
                        'message' => 'You cross your limit of Testing',
                    ], 403);


                } else {
                    return response()->json([

                        'status' => 'sucess',
                        'code' => 200,
                        'message' => 'Please add your consumer',
                        'Total_you_have_test' => $totalTestOfAvalible,
                        'remaing_consumer_for_test' => $remaingTest,
                        'total_addconsumer' => $CountMedicalsData,
                    ], 200);



                }
            } else {

                return response()->json([

                    'status' => 'sucess',
                    'code' => 200,


                ], 200);

            }

        } catch (\Exception $e) {

            return Response::json(
                array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => $e->getmessage()
                ),
                404
            );

        }
    }



    public function editconsumerdetails(Request $request)
    {
        try {



            $image = $request->file('consumer_profile_image');
            if ($image) {
                $current_timestamp = Carbon::now()->timestamp;
                $imageName = $current_timestamp . '.' . $image->getClientOriginalName();
                $image->move(public_path('/images'), $imageName);
            } else {
                $imageDataBase = MedicalDetail::where('id', $request->id)->pluck('consumer_profile_image_name');
                $imageName = $imageDataBase[0];

            }






            $imagesign = $request->file('consumer_sign_image');
            if ($imagesign) {
                $current_timestamp = Carbon::now()->timestamp;
                $imagesignName = $current_timestamp . '.' . $imagesign->getClientOriginalName();
                $imagesign->move(public_path('/sign'), $imagesignName);

            } else {
                $imageDataBase = MedicalDetail::where('id', $request->id)->pluck('consumer_sign_image_name');
                $imagesignName = $imageDataBase[0];

            }








            $consumerData = MedicalDetail::where('id', $request->id)->update([
                'consumer_name' => $request->consumer_name,
                'consumer_location' => $request->consumer_location,
                'consumer_mob_no' => $request->consumer_mob_no,
                'consumer_dob' => $request->consumer_dob,
                'consumer_addhar_number' => $request->consumer_addhar_number,
                'consumer_profile_image_name' => $imageName,
                'consumer_sign_image_name' => $imagesignName,
                'gender' => $request->gender,
                'light_hedness_or_swim_sensation_in_the_head' => $request->light_hedness_or_swim_sensation_in_the_head,
                'blacking_out_or_loss_of_consciousness' => $request->blacking_out_or_loss_of_consciousness,
                'object_spinning_or_turning_around_you' => $request->object_spinning_or_turning_around_you,
                'nausea_or_vomiting' => $request->nausea_or_vomiting,
                'tingling_in_your_fingers_toes_around_your_mouth' => $request->tingling_in_your_fingers_toes_around_your_mouth,
                'does_changes_of_position_make_you_dizzy' => $request->does_changes_of_position_make_you_dizzy,
                'when_you_are_dizzy_must_support_yourself_when_standing' => $request->when_you_are_dizzy_must_support_yourself_when_standing,
                'post_mediacal_history_disease' => json_encode($request->post_mediacal_history_disease),
                'defficulting_in_hearing' => json_encode($request->defficulting_in_hearing),
                'noise_in_ears' => json_encode($request->noise_in_ears),
                'fullness_or_stuffiness_in_your_ears' => json_encode($request->fullness_or_stuffiness_in_your_ears),
                'complaints' => json_encode($request->complaints),



            ]);


            if ($consumerData) {
                return response()->json([
                    'success' => true,
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'Consumer Detail Data Before Examantion Of Test',



                ], 200);


            }













        } catch (\Exception $e) {
            return Response::json(
                array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => $e->getmessage()
                ),
                404
            );

        }
    }


}







