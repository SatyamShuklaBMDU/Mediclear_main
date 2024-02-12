<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function showComplaint(){
        $complaint= Complaint::orderBy('created_at','desc')->get();
        return view('dashboard.complaint',compact('complaint'));
    }
    public function filterComplaint(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $complaint = Complaint::whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard.complaint', compact('complaint', 'start', 'end'));
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
