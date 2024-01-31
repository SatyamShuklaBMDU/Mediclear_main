<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminManagesController extends Controller
{
    public function adduser(Request $request)
    {
        if ($request->isMethod('get')) {
            $users = User::select('id', 'name', 'role', 'permissions')->whereNotNull('role')->get();
            return view('admin.adduser', ['users' => $users]);
        }
        if ($request->isMethod('post')) {
            $validate = Validator::make($request->all(), [
                'name' => ['required'],
                'email' => ['required', 'email', 'unique:users'],
                'password' => ['required'],
                'role' => ['required'],
            ]);
            if ($validate->fails()) {
                return back()->withErrors($validate)->withInput();
            }
            $input = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'permissions' => $request->permission,
            ];
            $item = User::create($input);
            return back()->with('message', 'User Added Successfully');
        }
    }

    public function viewUserList()
    {
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.userlist', ['users' => $users]);

    }

    public function editUser(Request $request)
    {
        $userData = User::where('id', $request->id)->first();
        return $userData;


    }

    public function updateUser(Request $request)
    {
        $update = [
            'name' => $request->userName,
            'status' => $request->userStatus,
            'role' => $request->userRole,
            'permissions' => $request->userPermission,
        ];
        $userDataUpdate = User::where('id', $request->userId)->update($update);

        $updatedUserData = User::where('id', $request->userId)->first();

        if ($userDataUpdate) {
            return response()->json([
                'updatedUserData' => $updatedUserData,
                'message' => 'User Data Update Sucessfully'
            ]);
        }



    }
}
