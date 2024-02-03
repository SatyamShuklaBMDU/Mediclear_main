<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //

public function companyDetail(Request $request){
    $company=Company::where('status','!=','Deactive')
    ->orderBy('name','asc')->get();
if($company){
    return response()->json(['data'=>$company,'status'=>true],200);
}else{
    return response()->json(['message'=>"No data found",'status'=>false],200);
}
}
}
