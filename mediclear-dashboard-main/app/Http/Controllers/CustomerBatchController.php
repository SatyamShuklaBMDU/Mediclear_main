<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerBatch;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CustomerBatchController extends Controller
{
    //

    public function customerBatch()
    {
        $activeCustomerId = Customer::select('user_id')->where('status', 'Active')->get();

        $customerBatch = CustomerBatch::with('customers')->get();
        return view('dashboard.customerbatch', ['activeCustomerId' => $activeCustomerId, 'customerBatch' => $customerBatch]);
    }

    public function customerBatchUserData(Request $request)
    {
        $user_data = Customer::where('user_id', $request->id)->get();
        return response()->json(['user_data' => $user_data]);
    }

    public function customerBatchSave(Request $request)
    {


        $validate = Validator::make($request->all(), [

            'user_customer_batch_no' => ['required', 'string', Rule::unique('customerbatchs', 'batch_no')],
        ]);



        if ($validate->fails()) {


            return redirect('/customer-batch')->withErrors($validate)->withInput();
        }


        $input = [
            'batch_no' => $request->user_customer_batch_no,
            'test' => $request->user_test,
            'customer_id' => $request->customer_id,
        ];


        $customerBatchData = CustomerBatch::create($input);



        if ($customerBatchData) {

            return redirect('/customer-batch')->with('message', 'User Batch Added Successfully');
        }


    }

    public function customerBatchEdit(Request $request)
    {
        $customerBatch = CustomerBatch::where('id', $request->id)->get();
        return $customerBatch;
    }

    public function customerBatchUpdate(Request $request)
    {
        $validate = Validator::make($request->all(), [

            'customerBatchNo' => ['required', 'string', Rule::unique('customerbatchs', 'batch_no')->ignore($request->customerBatchId)],
        ]);

        if ($validate->fails()) {


            return back()->withErrors($validate)->withInput();
        }

        $update = [
            'batch_no' => $request->customerBatchNo,
            'test' => $request->customerTest,

        ];
        $customerBatchDataUpdate = CustomerBatch::where('id', $request->customerBatchId)->update($update);

        $updatedCustomerBatchData = CustomerBatch::where('id', $request->customerBatchId)->first();

        $customerProfile = Customer::where('id', $request->customerId)->first();








        if ($customerBatchDataUpdate) {
            return response()->json([
                'updatedCustomerBatchData' => $updatedCustomerBatchData,
                'customerProfile' => $customerProfile,
                'message' => 'Batch Data Update Sucessfully'
            ]);
        }

    }


    public function customerBatchDelete(Request $request)
    {
        $delete = CustomerBatch::where('id', '=', $request->id)->delete();
        if ($delete) {
            response()->json([
                'message' => "data deleted Successfully",
            ]);

        }

    }

    public function customerfilterData(Request $request)
    {

        $validate = Validator::make($request->all(), [

            'fromdate' => ['required'],
            'todate' => ['required'],
        ]);

        if ($validate->fails()) {


            return back()->withErrors($validate)->withInput();
        }


        $activeCustomerId = Customer::select('user_id')->where('status', 'Active')->get();

        // $customerBatch = CustomerBatch::with(['customers' => function ($query) use ($request) {
        //     $query->whereDate('customerbatchs.created_at', '>=', $request->fromdate)
        //         ->whereDate('customerbatchs.created_at', '<=', $request->todate)
        //         ->orderBy('customerbatchs.created_at', 'desc');


        // },])->get();



        // $startDate = $request->fromdate;

        // $endDate = $request->todate;
        // dd($startDate, $endDate);

        //$customerBatch = CustomerBatch::whereBetween(DB::raw('DATE(created_at)'), [$startDate, $endDate])->get();

        $customerBatchFilter = CustomerBatch::select(
            'customerbatchs.id as customerbatchs_id',
            'customers.name as customer_name',
            'customers.user_id as user_id',
            'customerbatchs.batch_no as customer_batch_no',
            'customerbatchs.test as test',
            'customers.mobile_no as mobile_no',
            'customers.email as email',
            \DB::raw("DATE_FORMAT(customerbatchs.created_at ,'%d/%m/%Y') AS date")
        )
            ->join('customers', 'customerbatchs.customer_id', '=', 'customers.id')
            ->whereDate('customerbatchs.created_at', '>=', $request->fromdate)
            ->whereDate('customerbatchs.created_at', '<=', $request->todate)
            ->get();

        $customerBatchFilterdate['fromdate'] = $request->fromdate;
        $customerBatchFilterdate['todate'] = $request->todate;






        return view('dashboard.customerbatch', ['activeCustomerId' => $activeCustomerId, 'customerBatchFilter' => $customerBatchFilter, 'customerBatchFilterdate' => $customerBatchFilterdate]);











    }

}
