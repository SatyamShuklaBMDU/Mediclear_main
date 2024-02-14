<?php

namespace App\Http\Controllers;

use App\Models\CorporateBatch;
use App\Models\CustomerBatch;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function CustomerSection()
    {
        $customer = CustomerBatch::all();
        return view('dashboard.CustomerAccount',compact('customer'));
    }
    public function CompanySection()
    {
        $company = CorporateBatch::all();
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
}
