<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{


    public function showFeedback(){

       $feedback= Feedback::orderBy('created_at','desc')
        ->get();

        return view('dashboard.feedback',compact('feedback'));
    }







    public function deleteFeedback(Request $req){

        $result=Feedback::where('id',$req->id)->delete();

    if($result){
        return redirect()->back()->with('message','Delete Successfully');
    }else{
        return redirect()->back()->with('message',' Failed');

    }

    }



    //
}
