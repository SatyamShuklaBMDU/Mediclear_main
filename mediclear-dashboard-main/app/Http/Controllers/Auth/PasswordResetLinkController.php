<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users'],
        ]);



        // $status = Password::sendResetLink(
        //     $request->only('email')
        // );

        // return $status == Password::RESET_LINK_SENT
        //     ? back()->with('status', __($status))
        //     : back()->withInput($request->only('email'))
        //         ->withErrors(['email' => __($status)]);

        $token = str::random(64);



        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('resetpassword.forgotpasswordmail', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->to(url('/forgot-password'))->with('success', "We have send and email to reset password");

    }

    public function resetPassword($token)
    {


        return view('resetpassword.new-password', ['token' => $token]);
    }

    public function resetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:users",
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')->where(
            ["email" => $request->email,
                "token" => $request->token,

            ])->first();




        if (!$updatePassword) {
            return redirect()->to(url('/forgot-password'))->with('error', 'Invalid');

        }

        User::where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        DB::table('password_resets')->where([
            'email' => $request->email
        ])->delete();

        return redirect()->to(url('/login'))->with('password-reser-success', "Password Reset Sucessfully");
    }
}
