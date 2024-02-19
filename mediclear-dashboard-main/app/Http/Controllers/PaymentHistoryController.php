<?php

namespace App\Http\Controllers;

use App\Models\CorporateBatch;
use App\Models\CustomerBatch;
use App\Models\MedicalDetail;
use App\Models\Test;
use Illuminate\Http\Request;

class PaymentHistoryController extends Controller
{
    public function showPaymentReport()
    {
        return view('dashboard.history.payment-history');
    }
    public function PaymentHistoryReport(Request $request)
    {
        if ($request->consumertype == 'corporatehistory') {
            $company = CorporateBatch::where('payment_status','1')->get();
            return view('dashboard.history.company-payment', compact('company'));
        } elseif ($request->consumertype == 'customerhistory') {
            $customer = CustomerBatch::where('payment_status','1')->get();
            return view('dashboard.history.customer-payment', compact('customer'));
        }
    }
    public function filterCompany(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $company = CorporateBatch::where('payment_status','1')
            ->whereDate('date_of_approved', '>=', $start)
            ->whereDate('date_of_approved', '<=', $end)
            ->orderBy('date_of_approved', 'desc')
            ->get();
        return view('dashboard.history.company-payment', compact('company', 'start', 'end'));
    }
    public function filterCustomer(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $customer = CustomerBatch::where('payment_status','1')
            ->whereDate('date_of_approved', '>=', $start)
            ->whereDate('date_of_approved', '<=', $end)
            ->orderBy('date_of_approved', 'desc')
            ->get();
        return view('dashboard.history.customer-payment', compact('customer', 'start', 'end'));
    }
}
