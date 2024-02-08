<?php

namespace App\Http\Controllers;

use App\Models\CorporateID;
use App\Models\Customer;
use App\Models\Banner;

use App\Models\Notification_for;
use App\Models\Notifications_for;
use App\Notifications\MyNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;



class NotificationController extends Controller
{
    //

    public function customerNotification(){
        $notification=Notification_for::orderBy('id','desc')->get();
        return view('dashboard.notification',compact('notification'));
    }
    public function deleteNotification(Request $request){
        Notification_for::where('id',$request->id)->delete();
        return redirect()->back()->with('message','Delete successful!');
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


 public function notification(Request $req)
    {

        $status = $req->user()->status;
        if ($status == "Deactive") {
            return response()->json(['status' => false], 404);
        }



        $notifications = $req->user()->notifications;



        // foreach ($user->unreadNotifications as $notification) {
        //     echo $notification->type;
        // }
        // $order=Order::where('cin_no',$cin_no)->get();
        // dd($notifications->type);
        
         $req->user()->unreadNotifications->markAsRead();

        return response()->json(['data' => $notifications, 'status' => true]);

    }
    
    
    public function newnotification(Request $req)
    {
        $status = $req->user()->status;
        if ($status == "Deactive") {
            return response()->json(['status' => false], 404);
        }
        $notifications = $req->user()->unreadNotifications;
        $count=count($notifications);

        return response()->json(['notifications' => $count, 'status' => true]);

    }




    public function showbanner(){
        $banners=Banner::all();


        return view('dashboard.banner',compact("banners"));
    }






    public function addBanner(Request $request){

        $validator=Validator::make($request->all(),[
'for'=>'required',
'banner'=>'required',
        ]);


        if($validator->fails()){
            return redirect()->back()->with(['message'=>"Enter All Details!!"]);
        }



        $videofukuda = $request->file('banner');
        $current_timestamp = Carbon::now()->timestamp;
        $videofukudaName = 'banner' . $current_timestamp . '.' . $videofukuda->getClientOriginalName();

        $videofukuda->move(public_path('/images'), $videofukudaName);




        $banners=Banner::create([
            "for"=>$request->for,
            "banner"=>$videofukudaName,
        ]);

        if($banners){
            return redirect()->back()->with(['message'=>
            "Added Successfully!"]);
        }

        // return view('dashboard.banner',compact("banners"));
    }




    public function deleteBanner($id){

// dd($id);
        $banner=Banner::where('id',$id)->delete();
if($banner){

    return redirect()->back()->with(['message'=>
    "Delete Successfully!"]);
}else{

    return redirect()->back()->with(['message'=>
    "failed!"]);
}

    }




public function showBannerAPI(Request $request){
    $banner1=Banner::where('for','vertigo')->get();
    // $banner = new \stdClass;

   $count=count( $banner1);
   $imgobject=[];
   for($i=0;$i<$count;$i++){
         $imgobject1=new \stdClass;
         $imgobject1->url=($banner1[$i]->banner == null) ? ("bannner not updated") : asset('public' . '/images' . '/' . $banner1[$i]->banner);         $imgobject[$i]=$imgobject1;
   }



    return response()->json(['banner'=>$imgobject,'status'=>true],200);
}









}
