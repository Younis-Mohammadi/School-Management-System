<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\User;
use App\Mail\ForgotPasswordMail;
use Mail;
use Str;

class AuthController extends Controller
{
    public function login()
    {
        if (!empty(Auth::check())) {
            if (Auth::user()->user_type == 1) {
                return redirect(url('/admin/dashboard'));
            } else if (Auth::user()->user_type == 2) {
                return redirect(url('/teacher/dashboard'));
            } else if (Auth::user()->user_type == 3) {
                return redirect(url('/student/dashboard'));
            } else if (Auth::user()->user_type == 4) {
                return redirect(url('/parent/dashboard'));
            }
        }
        return view('auth.login');
    }
    public function AuthLogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            if (Auth::user()->user_type == 1) {
                return redirect(url('/admin/dashboard'));
            } else if (Auth::user()->user_type == 2) {
                return redirect(url('/teacher/dashboard'));
            } else if (Auth::user()->user_type == 3) {
                return redirect(url('/student/dashboard'));
            } else if (Auth::user()->user_type == 4) {
                return redirect(url('/parent/dashboard'));
            }
        } else {
            return redirect()->back()->with('error', 'Email or Password is incorrect');
        }
    }

    public function forgotpassword()
    {
        return view('auth.forgot');
    }
    public function PostForgotPassword(Request $request)
    {
        $user = User::getEmailSingle($request->email);
        if (!empty($user)) {
            $user->remember_token = Str::random(30);
            $user->save();
            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success', 'Password reset link has been sent to your email');
        } else {
            return redirect()->back()->with('error', 'Email is not found');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }
}
