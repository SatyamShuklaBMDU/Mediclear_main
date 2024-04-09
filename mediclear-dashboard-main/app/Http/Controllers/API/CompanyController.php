<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CorporateBatch;
use App\Models\CustomerBatch;
use App\Models\MedicalDetail;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    //

    public function companyDetail(Request $request)
    {
        $company = Company::where('status', '!=', 'Deactive')
            ->orderBy('name', 'asc')->get();
        if ($company) {
            return response()->json(['data' => $company, 'status' => true], 200);
        } else {
            return response()->json(['message' => "No data found", 'status' => false], 200);
        }
    }
    public function testResult(Request $request)
    {
        try {
            // $user_id = $request->id;
            $user = Auth::user();
            $user_id = $user->user_id;
            $medical = MedicalDetail::where('parent_id', $user_id)->get();
            $name = [];
            $status = [];
            $date = [];
            $batch = [];
            if (!empty($medical)) {
                foreach ($medical as $each) {
                    $testsresult = Test::where('medical_details_id', $each->id)->count();
                    if ($each->cusmerbatchdetails_type == 'App\Models\CorporateBatch') {
                        $corporate = CorporateBatch::find($each->cusmerbatchdetails_id);
                        $batch_no = $corporate->batch_no;
                        if ($testsresult == 9) {
                            $name[] = $each->consumer_name;
                            $status[] = 'DONE';
                            $date[] = Carbon::parse($each->created_at)->format('d-m-Y');
                            $batch[] = $batch_no;
                        } elseif ($testsresult < 9) {
                            $name[] = $each->consumer_name;
                            $status[] = 'Pending';
                            $date[] = Carbon::parse($each->created_at)->format('d-m-Y');
                            $batch[] = $batch_no;
                        }
                    } elseif ($each->cusmerbatchdetails_type == 'App\Models\CustomerBatch') {
                        $corporate = CustomerBatch::find($each->cusmerbatchdetails_id);
                        $batch_no = $corporate->batch_no;
                        if ($testsresult == 9) {
                            $name[] = $each->consumer_name;
                            $status[] = 'DONE';
                            $date[] = Carbon::parse($each->created_at)->format('d-m-Y');
                            $batch[] = $batch_no;
                        } elseif ($testsresult < 9) {
                            $name[] = $each->consumer_name;
                            $status[] = 'Pending';
                            $date[] = Carbon::parse($each->created_at)->format('d-m-Y');
                            $batch[] = $batch_no;
                        }
                    }
                }
                if (!empty($name)) {
                    $formattedData = [];
                    for ($i = 0; $i < count($name); $i++) {
                        $formattedData[] = [
                            'name' => $name[$i],
                            'result' => $status[$i],
                            'date' => $date[$i],
                            'batch' => $batch[$i],
                            'status' => true,
                        ];
                    }
                    return response()->json(['data' => $formattedData], 200);
                } else {
                    return response()->json(['message' => "No data found", 'status' => false], 200);
                }
            } else {
                return response()->json(['message' => "No data found", 'status' => false], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'status' => false], 500);
        }
    }
}
