<?php

namespace App\Http\Controllers;

use App\Models\CorporateBatch;
use App\Models\CustomerBatch;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function CustomerSection()
    {
        $customer = CustomerBatch::where('payment_status', '0')->orWhere('payment_status','-1')->get();
        return view('dashboard.CustomerAccount',compact('customer'));
    }
    public function CompanySection()
    {
        $company = CorporateBatch::where('payment_status','0')->orWhere('payment_status','-1')->get();
        return view('dashboard.CompanyAccount',compact('company'));
    }
    public function filterCustomer(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $customer = CustomerBatch::whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard.CustomerAccount', compact('customer', 'start', 'end'));
    }
    public function filterCompany(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $company = CorporateBatch::whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard.CompanyAccount', compact('company', 'start', 'end'));
    }
    public function updateCustomerPaymentDetails(Request $request)
    {
        // dd($request->all());
        $customerId = $request->input('customer_id');
        $receivedAmount = $request->input('received_amount');
        $pendingAmount = $request->input('pending_amount');
        $status = $request->input('status');
        $customerBatch = CustomerBatch::find($customerId);
        if (!$customerBatch) {
            return response()->json(['success' => false, 'message' => 'Customer batch record not found']);
        }
        $customerBatch->recieved_payment = $receivedAmount;
        $customerBatch->pending_payment = $pendingAmount;
        $customerBatch->payment_status = $status;
        if ($status == 1) {
            $customerBatch->report_status = '1';
            $customerBatch->date_of_approved = Carbon::now(); 
        }
        $customerBatch->save();
        return response()->json(['success' => true, 'message' => 'Customer payment details updated successfully']);
    }
    public function updateCompanyPayment(Request $request)
    {
        $customerId = $request->input('customer_id');
        $receivedAmount = $request->input('received_amount');
        $pendingAmount = $request->input('pending_amount');
        $status = $request->input('status');
        
        $customerBatch = CorporateBatch::find($customerId);

        if (!$customerBatch) {
            return response()->json(['success' => false, 'message' => 'Corporate batch record not found']);
        }

        $customerBatch->recieved_payment = $receivedAmount;
        $customerBatch->pending_payment = $pendingAmount;
        $customerBatch->payment_status = $status;

        if ($status == 1) {
            $customerBatch->report_status = '1';
            $customerBatch->date_of_approved = Carbon::now();
        }

        $customerBatch->save();

        return response()->json(['success' => true, 'message' => 'Company payment details updated successfully']);
    }
}
