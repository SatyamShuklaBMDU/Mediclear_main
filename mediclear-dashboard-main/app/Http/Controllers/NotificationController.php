<?php

namespace App\Http\Controllers;

use App\Models\CorporateID;
use App\Models\Customer;
use App\Models\Notification_for;
use App\Models\Notifications_for;
use App\Notifications\MyNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class NotificationController extends Controller
{
    //

    public function customerNotification(){

        return view('dashboard.notification');
    }




    public function sendNotification(Request $request){

        $validator = Validator::make($request->all(), [
            'subject' => 'required',
            'for' => 'required',
            'message' => 'required',
        ]);


    Notification_for::create([
        'for'=>$request->for,
        'subject'=>$request->subject,
        'message'=>$request->message,
    ]);


        if($request->for=="all"){
            $title = $request->subject;
            $body   =$request->message;

            // $deposit = [
            //     // 'user_id' =>Auth::user()->id,
            // ];
            // User::all()->notify(new MyNotification($title,$body));
            $users = Customer::all();
            foreach ($users as $user) {

                Notification::send($user, new MyNotification($title,$body));
              }

              $user = CorporateID::all();
            foreach ($user as $use) {

                Notification::send($use, new MyNotification($title,$body));
              }

            return redirect()->back()->with('message','notification was successful!');

        }else if($request->for=='customer'){
            $title = $request->subject;
            $body   =$request->message;
                $users=Customer::all();

            foreach ($users as $user) {
            Notification::send($user, new MyNotification($title,$body));
              }
            return redirect()->back()->with('message','notification was successful!');
        }else if($request->for=='corporate'){

            $title = $request->subject;
            $body   =$request->message;

            $users=CorporateID::all();

            foreach ($users as $user) {
                Notification::send($user, new MyNotification($title,$body));
                  }
                return redirect()->back()->with('message','notification was successful!');
                }

        // $deposit = Notification::create([
        //     // 'user_id' =>Auth::user()->id,
        //     'title'  => $request->title,
        //     'body'   =>$request->body,
        // ]);
        // User::find()->notify(new MyNotification($deposit->title,$deposit->body));
        return redirect()->back()->with('message','notification not  sent !');

    }






}
