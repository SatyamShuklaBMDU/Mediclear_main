<?php

namespace App\Http\Controllers;

use App\Models\CorporateBatch;
use App\Models\CustomerBatch;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function getCustomer(){
        $customer = CustomerBatch::all();
        return view('dashboard.customerPayment',compact('customer'));
    }
    public function getCompany(){
        $company = CorporateBatch::all();
        return view('dashboard.companyPayment',compact('company'));
    }
    public function filterCustomer(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $customer = CustomerBatch::whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard.customerPayment', compact('customer', 'start', 'end'));
    }
    public function filterCompany(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $company = CorporateBatch::whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard.companyPayment', compact('company', 'start', 'end'));
    }
}
