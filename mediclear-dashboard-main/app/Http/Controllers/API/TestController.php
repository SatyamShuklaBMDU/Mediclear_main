<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MedicalDetail;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{

    public function bp(Request $request)
    {
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), [
                'lower_bp' => 'required',
                'medical_details_id' => 'required',
                'test_type_id' => 'required',
                'upper_bp' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    "status" => "error",
                    "message" => $validator->errors(),
                ], 401);
            }
            $test = Test::create([
                'medical_details_id' => $request->medical_details_id,
                'test_type_id' => $request->test_type_id,
                'data' => json_encode(['lower_bp' => $request->lower_bp, 'upper_bp' => $request->upper_bp]),
                'features' => 'bp',
            ]);
            $updateMedicalStatusOfConsumer = MedicalDetail::where('id', $request->medical_details_id)->update([
                'consumer_status' => '1',
            ]);
            DB::commit();
            if ($test) {
                return response()->json([
                    "status" => "success",
                    "message" => "Blood Pressure test added successfully!",
                    "consumer_status" => "1",
                    "verified" => "You gave test and your profile  is varifyed",

                ], 200);
            } else {
                return response()->json([
                    "status" => "error",
                    "message" => "Something went wrong!",
                ], 500);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return Response::json(
                array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => $e->getmessage(),
                ), 404);
        }
    }
    public function hearingdata(Request $request)
    {
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), [
                'left_ear_problem' => 'required',
                'left_ear_fixed' => 'required',
                'medical_details_id' => 'required',
                'test_type_id' => 'required',
                'right_ear_problem' => 'required',
                'right_ear_fixed' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    "status" => "error",
                    "message" => $validator->errors(),
                ], 401);
            }
            // dd($request->all());
            $test = Test::create([
                'medical_details_id' => $request->medical_details_id,
                'test_type_id' => $request->test_type_id,
                'test_status' => 1,
                'test_result' => 0,
                'data' => json_encode(['left_ear_problem' => $request->left_ear_problem, 'right_ear_problem' => $request->right_ear_problem, 'left_ear_fixed' => $request->left_ear_fixed, 'right_ear_fixed' => $request->right_ear_fixed]),
                'features' => 'hearingtest',
            ]);
            $updateMedicalStatusOfConsumer = MedicalDetail::where('id', $request->medical_details_id)->update([
                'consumer_status' => '1',
            ]);
            DB::commit();
            if ($test) {
                return response()->json([
                    "status" => "success",
                    "message" => "Hearing test added successfully!",
                    "consumer_status" => "1",
                    "verified" => "You gave test and your profile  is varifyed",

                ], 200);
            } else {
                return response()->json([
                    "status" => "error",
                    "message" => "Something went wrong!",
                ], 500);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return Response::json(
                array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => $e->getmessage(),
                ), 404);
        }
    }

    //
    public function rombergTest(Request $request)
    {
        DB::beginTransaction();

        try {

            $validator = Validator::make($request->all(), [
                'medical_details_id' => 'required',
                'test_type_id' => 'required',
                'both_legs' => 'required|mimetypes:video/mp4',
                'left_leg' => 'required|mimetypes:video/mp4',
                'right_leg' => 'required|mimetypes:video/mp4',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    "status" => "error",
                    "message" => $validator->errors(),
                ], 403);
            }

            $videoBothLegs = $request->file('both_legs');

            $current_timestamp = Carbon::now()->timestamp;
            $videoBothLegsName = 'both_legs' . $current_timestamp . '.' . $videoBothLegs->getClientOriginalName();

            $videoBothLegs->move(public_path('/videos'), $videoBothLegsName);

            $videoLeftLegs = $request->file('left_leg');

            $current_timestamp = Carbon::now()->timestamp;
            $videoLeftLegsName = 'left_leg' . $current_timestamp . '.' . $videoLeftLegs->getClientOriginalName();

            $videoLeftLegs->move(public_path('/videos'), $videoLeftLegsName);

            $videoRightLegs = $request->file('right_leg');

            $current_timestamp = Carbon::now()->timestamp;
            $videoRightLegsName = 'right_leg' . $current_timestamp . '.' . $videoRightLegs->getClientOriginalName();

            $videoRightLegs->move(public_path('/videos'), $videoRightLegsName);

            $test = Test::create([
                'medical_details_id' => $request->medical_details_id,
                'test_type_id' => $request->test_type_id,
                'data' => json_encode(['both_legs' => $videoBothLegsName, 'left_leg' => $videoLeftLegsName, 'right_leg' => $videoRightLegs]),
                'features' => 'rt',
            ]);

            $updateMedicalStatusOfConsumer = MedicalDetail::where('id', $request->medical_details_id)->update([
                'consumer_status' => '1',
            ]);

            DB::commit();

            return response()->json([
                "status" => "success",
                "message" => "all videos add sucessfully!",
                "consumer_status" => "1",
                "verified" => "You gave test and your profile  is varifyed",

            ], 200);

        } catch (\Exception $e) {

            DB::rollBack();
            return Response::json(
                array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => $e->getmessage(),
                ), 404);

        }

    }

}
