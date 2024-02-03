<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{

    public function showCompany()
    {

        $company = Company::orderBy('created_at', 'desc')->get();

        return view('dashboard.add-company', compact('company'));
    }






    public function filterCompany(Request $req)
    {
        $start=$req->start;
$end=$req->end;
        $company = Company::whereDate('created_at', '>=', $start)
        ->whereDate('created_at', '<=', $end)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('dashboard.add-company', compact('company','start','end'));
    }



    public function CreateCompany(Request $req)
    {
        // dd($req->all());
        $validate = Validator::make($req->all(), [
            'name' => 'required',
            // 'user_id' => 'required|unique:corporate_i_d_s',
            // 'address' => 'required',
            'mobile_no' => 'required|numeric|unique:company|digits:10',
            'email' => 'required|email|unique:company',
            'city' => 'required',
        ]);
        if ($validate->fails()) {
            // return back()->withErrors($validate)->withInput();
            return back()->withErrors($validate);
        }
        //  $this->sendError('Validation Error.', $validate->errors());}
        $company = Company::create([
            'name' => $req->name,
            'city' => $req->city,
            'mobile_no' => $req->mobile_no,
            'email' => $req->email,
            'status' => 'Active',

        ]);
        return back()->with('message', 'Company Added Successfully');
        // return view('dashboard.add-company',compact('company'));
    }






    public function updateCompany(Request $req)
    {


        // dd($req->all());
        $validate = Validator::make($req->all(), [
            'name' => 'required',
            // 'user_id' => 'required|unique:corporate_i_d_s',
            // 'address' => 'required',
            'mobile_no' => 'required|numeric',
            'email' => 'required|email',
            'city' => 'required',
        ]);

        if ($validate->fails()) {

            // return back()->withErrors($validate)->withInput();
            return back()->withErrors($validate);
        }
        //  $this->sendError('Validation Error.', $validate->errors());}
        $company = Company::where('id',$req->id)
        ->update([
            'name' => $req->name,
            'city' => $req->city,
            'mobile_no' => $req->mobile_no,
            'email' => $req->email,
            // 'status' => 'Pending',

        ]);

        if($company){
        return back()->with('message', 'Company Updated Successfully');
        }else{
            return back()->with('message', 'Failed');

        }
        // return view('dashboard.add-company',compact('company'));
    }










public function deleteCompany(Request $req){

    $result=Company::where('id',$req->id)->delete();

if($result){
    return redirect()->back()->with('message','Delete Successfully');
}else{
    return redirect()->back()->with('message',' Failed');

}

}








public function updateStatusCompany($type ,$id){

    if($type=="Pending"){

        Company::where('id',$id)->update(['status'=>'Pending']);
    }else if($type=="Active"){

        Company::where('id',$id)->update(['status'=>'Active']);
    }else if($type=="Deactive"){

        Company::where('id',$id)->update(['status'=>'Deactive']);
    }

    return redirect()->back()->with('message','Updated Successfully');

}




    //
}
