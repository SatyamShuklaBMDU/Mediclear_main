<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    //

    public function showDocter()
    {

        $doctor = Doctor::orderBy('created_at', 'desc')->get();


        return view('dashboard.add-doctor', compact('doctor'));
    }



    public function addDocter(Request $request)
    {

        if (!$request->sign) {
            throw new \Exception('No file uploaded.');
        }
        if (empty($request->sign)) {
            return redirect()->back()->with('message', "Signature is required");
            // return response()->json(['status'=>'fail','message'=>"Signature is required"]);
        } else {
            $image = $request->file()['sign'];




            $current_timestamp = Carbon::now()->timestamp;




            $imageName = $current_timestamp . '.' . $image->getClientOriginalName();


            $image->move(public_path('/images'), $imageName);






            // $image->storeAs('images', $imageName5, 'public');

        }

        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->mobile_no = $request->mobile_no;
        $doctor->post = $request->post;
        $doctor->sign = $imageName;
        $doctor->status = "Active";
        $doctor->save();

        return redirect()->back()->with(['message' => "Added Successfully"]);

    }



    public function deleteDoctor(Request $req)
    {

        $result = Doctor::where('id', $req->id)->delete();

        if ($result) {
            return redirect()->back()->with('message', 'Delete Successfully');
        } else {
            return redirect()->back()->with('message', ' Failed');

        }

    }



    public function updateStatusDoctor($type, $id)
    {

        if ($type == "Pending") {

            Doctor::where('id', $id)->update(['status' => 'Pending']);
        } else if ($type == "Active") {

            Doctor::where('id', $id)->update(['status' => 'Active']);
        } else if ($type == "Deactive") {

            Doctor::where('id', $id)->update(['status' => 'Deactive']);
        }

        return redirect()->back()->with('message', 'Updated Successfully');

    }









}
