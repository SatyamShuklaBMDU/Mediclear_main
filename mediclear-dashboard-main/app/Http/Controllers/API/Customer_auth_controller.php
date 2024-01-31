<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CorporateID;
use App\Models\Customer;
use Illuminate\Http\Request, Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use \stdClass;

// use Auth;
class Customer_auth_controller extends Controller
{


    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'mobile_no' => 'required',
                'password' => 'required',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }


        $credentials = $request->only('mobile_no', 'password');



        $adminauthentication = Auth::guard('customer-api')->attempt($credentials, $request->get('remember'));
        $admin = Auth::guard('customer-api')->user();







        if (!isset($admin) || !Hash::check($request->password, $admin->password)) {

            return response()->json(['Unauthorized' => ['error' => 'The provided credentials are incorrect.']], 401);

        } else {
            $status = $admin->status;
            if ($status == 'Deactive') {
                return response()->json([
                    "message" => "Your account is  Deactive!"
                ], 401);
                ;
            }


            $success['token'] = $admin->createToken('mobile', ['role:customer'])->plainTextToken;
            $success['name'] = $admin->name;
            $success['mobile_no'] = $admin->mobile_no;
            $success['id'] = $admin->id;
            $success['user_id'] = $admin->user_id;

            return response()->json([
                'data' => $success,
                'status' => true,
                'message' => 'User login successfully'
            ], 200);



        }




    }






    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
            'mobile_no' => 'required|numeric|digits:10',
            'email' => 'required',
            'address' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $input = $request->all();

        // Check if the mobile number is unique
        if (!$this->isMobileNumberUnique($input['mobile_no'])) {
            return response()->json(['error' => 'This mobile number is already registered.'], 422);
        }

        if (!$this->isEmailUnique($input['email'])) {
            return response()->json(['error' => 'This Email is already registered.'], 422);
        }



        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        $input['user_id'] = $this->generateUniqId();
        $input['status'] = 'Pending';
        $user = Customer::create($input);
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;
        $success['user_id'] = $user->user_id;
        return response()->json(['data' => $success, 'message' => 'User register successfully.', 'status' => true], 200);
    }

    private function generateUniqId()
    {
        // Determine the code based on the profession
        $code = 'CUST';
        // Generate a unique ID (e.g., incrementing number)
        $nextId = Customer::all()->count();
        $$nextId = $nextId + 5;

        // Pad the ID with leading zeros
        $code .= str_pad($nextId, 6, '0', STR_PAD_LEFT);

        return $code;
    }
    private function isMobileNumberUnique($mobileNumber)
    {
        return !Customer::where('mobile_no', $mobileNumber)->exists();
    }


    private function isEmailUnique($email)
    {
        return !Customer::where('email', $email)->exists();
    }


    public function addcustomerprofiledata(Request $request)
    {

        try {





            if ($request->isMethod('get')) {
                if (Auth::check()) {
                    $userdata = new stdClass();
                    $userdata->name = Auth::user()->name;
                    $userdata->email = Auth::user()->email;
                    $userdata->mobile_no = Auth::user()->mobile_no;
                    $userdata->pincode = Auth::user()->pin_code;
                    $userdata->state = Auth::user()->state;
                    $userdata->city = Auth::user()->city;
                    $userdata->customer_profile_image = asset(Auth::user()->customer_profile_image_name);
                    return response()->json([

                        'status' => 'sucess',
                        'code' => 200,
                        'Userdata' => $userdata

                    ], 200);
                }



            } elseif ($request->isMethod('post')) {
                if (Auth::check()) {
                    $user_name = Auth::user()->name;
                    $user_email = Auth::user()->email;
                    $user_mob = Auth::user()->mobile_no;
                    $user_id = Auth::user()->id;
                }



                $image = $request->file('customer_profile_image');

                $current_timestamp = Carbon::now()->timestamp;
                $imageName = $current_timestamp . '.' . $image->getClientOriginalName();


                $image->move(public_path('/customer'), $imageName);

                $updatedCustomer = Customer::where('id', $user_id)
                    ->update([
                        'customer_profile_image_name' => $imageName,
                        'state' => $request->state,
                        'city' => $request->city,
                        'pin_code' => $request->pincode


                    ]);

                return response()->json([

                    'status' => 'sucess',
                    'code' => 200,
                    'message' => 'Customer Profile Complete',


                ], 200);

            }



        } catch (\Exception $e) {
            return Response::json(
                array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => $e->getmessage()
                ),
                404
            );



        }





    }







}
