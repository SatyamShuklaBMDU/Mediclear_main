<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class DoctorController extends Controller
{
    //

    public function showDocter(){
        $doctor=Doctor::orderBy('created_at','desc')->get();
        return view('dashboard.add-doctor',compact('doctor'));
    }
    public function filterDocter(Request $request){
        $request->validate([
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
        ], [
            'start.required' => 'Start date is required.',
            'end.required' => 'End date is required.',
            'start.date' => 'Start date must be a valid date format.',
            'end.date' => 'End date must be a valid date format.',
            'end.after_or_equal' => 'End date must be equal to or after the start date.',
        ]);
        $start=$request->start;
        $end=$request->end;
        $doctor=Doctor::whereDate('created_at', '>=', $start)
        ->whereDate('created_at', '<=', $end)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('dashboard.add-doctor',compact('doctor','start','end'));
    }
     public function addDocter(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'mobile_no' => 'required|numeric|unique:doctors|digits:10|regex:/^[6-9]\d{9}$/',
            'email' => 'required|email|unique:doctors',
            'post' => 'required',
            'registration_number' => 'required|unique:doctors',
            'sign' => 'required|image|mimes:png,jpg,jpeg|max:2048', // Adjust max file size as needed
            'seal' => 'required|image|mimes:png,jpg,jpeg|max:2048', // Adjust max file size as needed
        ], [
            'mobile_no.regex' => 'The mobile number must start with a digit between 6 and 9.',
            'sign.required' => 'Signature is required.',
            'sign.image' => 'The signature must be an image file (PNG, JPG).',
            'sign.mimes' => 'The signature must be a PNG or JPG image.',
            'sign.max' => 'The signature may not be greater than 2MB in size.',
            'seal.required' => 'Seal of doctor is required.',
            'seal.image' => 'The seal must be an image file (PNG, JPG).',
            'seal.mimes' => 'The seal must be a PNG or JPG image.',
            'seal.max' => 'The seal may not be greater than 2MB in size.',
        ]);
        
        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }
        if (empty($request->sign)) {
            return redirect()->back()->with('message', "Signature is required");
            // return response()->json(['status'=>'fail','message'=>"Signature is required"]);
        } else {
            $image = $request->file('sign');
            $current_timestamp = Carbon::now()->timestamp;
            $imageName5 = $current_timestamp . '.' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName5);
            // $image->storeAs('images', $imageName5, 'public');
            // $image->storeAs('public/images', $imageName5);
        }
        if (empty($request->seal)) {
            return redirect()->back()->with('message', "Seal of doctor is required");
            // return response()->json(['status'=>'fail','message'=>"Signature is required"]);
        } else {
            $imageseal = $request->file('seal');
            $current_timestamp = Carbon::now()->timestamp;
            $imageNameseal5 = $current_timestamp . '.' . $imageseal->getClientOriginalName();
            $imageseal->move(public_path('images'), $imageNameseal5);
            // $image->storeAs('images', $imageName5, 'public');
            // $image->storeAs('public/images', $imageName5);
        }
        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->mobile_no = $request->mobile_no;
        $doctor->post = $request->post;
        $doctor->sign = $imageName5;
        $doctor->seal_of_doctor = $imageNameseal5;
        $doctor->registration_number = $request->registration_number;
        $doctor->status = "Active";
        $doctor->save();
        return redirect()->back()->with(['message' => "Added Successfully"]);
    }
public function deleteDoctor(Request $req){
    $result=Doctor::where('id',$req->id)->delete();
if($result){
    return redirect()->back()->with('message','Delete Successfully');
}else{
    return redirect()->back()->with('message',' Failed');
}
}
public function updateStatusDoctor($type ,$id){
    if($type=="Pending"){
        Doctor::where('id',$id)->update(['status'=>'Pending']);
    }else if($type=="Active"){
        Doctor::where('id',$id)->update(['status'=>'Active']);
    }else if($type=="Deactive"){
        Doctor::where('id',$id)->update(['status'=>'Deactive']);
    }
    return redirect()->back()->with('message','Updated Successfully');
}
public function updateDoctor(Request $request){
    if(empty($request->sign)){
    $doctor=Doctor::where('id',$request->id)->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'mobile_no'=>$request->mobile_no,
        'post'=>$request->post
    ]);
    //return view('admin.add-doctor')->with('success','Data Updated Successfully');
        return redirect()->back()->with('message','Data Updated Successfully');
        // return response()->json(['status'=>'fail','message'=>"Signature is required"]);
    }else{
        // dd($request->all());
        $image = $request->file('sign');
        $current_timestamp = Carbon::now()->timestamp;
        $imageName5 = $current_timestamp . '.' . $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName5);
        $imageseal = $request->file('seal');
        $current_timestamp = Carbon::now()->timestamp;
        $imageNameseal5 = $current_timestamp . '.' . $imageseal->getClientOriginalName();
        $imageseal->move(public_path('images'), $imageNameseal5);
        // $image->storeAs('images', $imageName5, 'public');
        // $image->storeAs('public/images', $imageName5);
        $doctor=Doctor::where('id',$request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile_no'=>$request->mobile_no,
            'post'=>$request->post,
            'sign'=>$imageName5,
            'seal_of_doctor'=>$imageNameseal5
        ]);
    return redirect()->back()->with(['message','Data Updated Successfully']);
    }
}
}
