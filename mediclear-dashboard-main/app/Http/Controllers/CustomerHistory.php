<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerHistory extends Controller
{
    //


    public function showCustomerHistory(){

        return view('dashboard.customerreport');
        }

}
