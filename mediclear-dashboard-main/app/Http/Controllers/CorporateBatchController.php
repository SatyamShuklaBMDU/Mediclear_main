<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CorporateBatch;
use App\Models\CorporateID;
use App\Models\Company;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CorporateBatchController extends Controller
{
    public function corporateBatch()
    {
        $companyDetails = Company::select('id', 'name')->where('status', 'Active')->get();
        $corporateBatch = CorporateBatch::with(['corprateBelongCompany'])->orderBy('id', 'DESC')->get();
        return view('dashboard.corporatebatch', ['corporateBatch' => $corporateBatch, 'companyDetails' => $companyDetails]);
    }
    public function corporatefilter(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'fromdate' => ['required'],
            'todate' => ['required'],
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }
        $companyDetails = Company::select('id', 'name')->get();
        $corporatefilterBatchFilter = CorporateBatch::select(
            'corporatebatchs.id as corporatebatchs_id',
            'company.name as company_name',
            'corporatebatchs.batch_no as corporatebatchs_batch_no',
            'corporatebatchs.test as test',
            'company.mobile_no as mobile_no',
            'company.email as email',
            DB::raw("DATE_FORMAT(corporatebatchs.created_at ,'%d/%m/%Y') AS date")
        )->join('company', 'corporatebatchs.company_id', '=', 'company.id')
            ->whereDate('corporatebatchs.created_at', '>=', $request->fromdate)
            ->whereDate('corporatebatchs.created_at', '<=', $request->todate)
            ->get();
        $corporatefilterBatchFilterdate['fromdate'] = $request->fromdate;
        $corporatefilterBatchFilterdate['todate'] = $request->todate;
        return view('dashboard.corporatebatch', ['corporatefilterBatchFilterdate' => $corporatefilterBatchFilterdate, 'companyDetails' => $companyDetails, 'corporatefilterBatchFilter' => $corporatefilterBatchFilter]);
    }
    public function corporateBatchCompanyData(Request $request)
    {
        $company_data = Company::where('id', $request->id)->get();
        return response()->json(['company_data' => $company_data]);
    }
    public function corporateBatchSave(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'company_corporate_batch_no' => ['required', 'string', Rule::unique('corporatebatchs', 'batch_no')],
        ]);

        if ($validate->fails()) {
            return redirect('/corporate-batch')->withErrors($validate)->withInput();
        }
        $input = [
            'batch_no' => $request->company_corporate_batch_no,
            'test' => $request->company_test,
            'company_id' => $request->company_id,
        ];
        $corporateBatchData = CorporateBatch::create($input);
        if ($corporateBatchData) {
            return redirect('/corporate-batch')->with('message', 'User Batch Added Successfully');
        }
    }
    public function corporateBatchEdit(Request $request)
    {
        // $corporateBatch = CorporateBatch::where('id', $request->id)->get();
        $corporateBatch = DB::table('corporatebatchs')
            ->join('company', 'company.id', '=', 'corporatebatchs.company_id')
            ->where('corporatebatchs.id', '=', $request->id)
            ->get();
        $corporateBatch[0]->corporatebatchs_id = (float) $request->id;
        return $corporateBatch;
    }

    public function corporateBatchUpdate(Request $request)
    {


        $validate = Validator::make($request->all(), [

            'corporateBatchNo' => ['required', 'string', Rule::unique('corporatebatchs', 'batch_no')->ignore($request->corporateBatchId)],
        ]);



        // if ($validate->fails()) {


        //      return back()->withErrors($validate)->withInput();
        //  }



        $update = [
            'batch_no' => $request->corporateBatchNo,
            'test' => $request->corporateTest,
            'company_id' => $request->companyId,

        ];
        $corporateBatchDataUpdate = CorporateBatch::where('id', $request->corporateBatchId)->update($update);



        $corporateBatchWithComapny = DB::table('corporatebatchs')
            ->join('company', 'company.id', '=', 'corporatebatchs.company_id')
            ->where('corporatebatchs.id', '=', $request->corporateBatchId)
            ->get();


        $corporateBatchWithComapny = CorporateBatch::select(
            'corporatebatchs.id as corporatebatchs_id',
            'company.name as company_name',
            'corporatebatchs.batch_no as corporatebatchs_batch_no',
            'corporatebatchs.test as test',
            'company.mobile_no as mobile_no',
            'company.email as email',
            DB::raw("DATE_FORMAT(corporatebatchs.created_at ,'%d/%m/%Y') AS date")
        )->join('company', 'corporatebatchs.company_id', '=', 'company.id')
            ->where('corporatebatchs.id', '=', $request->corporateBatchId)
            ->get();












        if ($corporateBatchDataUpdate) {
            return response()->json([
                'corporateBatchWithComapny' => $corporateBatchWithComapny,
                'message' => 'Batch Data Update Sucessfully'
            ]);
        }

    }


    public function corporateBatchDelete(Request $request)
    {
        $delete = CorporateBatch::where('id', '=', $request->id)->delete();
        if ($delete) {
            response()->json([
                'message' => "data deleted Successfully",
            ]);

        }

    }
}
