<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

    public function showCustomer(){


        $customer=Customer::orderBy('created_at','desc')->get();

        return view('dashboard.customer-profile',compact('customer'));

    }







    public function updateStatusCustomer($type ,$id){

        if($type=="Pending"){

            Customer::where('id',$id)->update(['status'=>'Pending']);
        }else if($type=="Active"){

            Customer::where('id',$id)->update(['status'=>'Active']);
        }else if($type=="Deactive"){

            Customer::where('id',$id)->update(['status'=>'Deactive']);
        }

        return redirect()->back()->with('message','Updated Successfully');

    }


    public function deleteCustomer(Request $req){

        $result=Customer::where('id',$req->id)->delete();

        if($result){
            return redirect()->back()->with('message','Delete Successfully');
        }else{
            return redirect()->back()->with('message',' Failed');
        }



    }





}
