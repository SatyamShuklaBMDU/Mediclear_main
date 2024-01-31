<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    //



    public function showComplaint(){

        $complaint= Complaint::orderBy('created_at','desc')
         ->get();

         return view('dashboard.complaint',compact('complaint'));
     }







     public function deleteComplaint(Request $req){

         $result=Complaint::where('id',$req->id)->delete();

     if($result){
         return redirect()->back()->with('message','Delete Successfully');
     }else{
         return redirect()->back()->with('message',' Failed');
     }
     }



}
