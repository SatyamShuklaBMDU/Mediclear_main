<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\CorporateID;
use App\Models\Customer;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function showComplaint(){
        $complaint= Complaint::orderBy('created_at','desc')->get();
        $name = [];
        foreach ($complaint as $com) {
            $user = Customer::where('user_id', $com->user_id)->first();
            if (!$user) {
                $user = CorporateID::where('user_id', $com->user_id)->first();
            }
            if ($user) {
                $name[] = $user->name;
            } else {
                $name[] = '';
            }
        }
        return view('dashboard.complaint',compact('complaint','name'));
    }
    public function filterComplaint(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $complaint = Complaint::whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->orderBy('created_at', 'desc')
            ->get();
            $name = [];
        foreach ($complaint as $com) {
            $user = Customer::where('user_id', $com->user_id)->first();
            if (!$user) {
                $user = CorporateID::where('user_id', $com->user_id)->first();
            }
            if ($user) {
                $name[] = $user->name;
            } else {
                $name[] = '';
            }
        }
        return view('dashboard.complaint', compact('complaint', 'start', 'end','name'));
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
