<?php

namespace App\Http\Controllers;

use App\Mail\SendCodeResetPassword;
use App\Models\ResetCodePassword;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\SendVerificationCode;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function post_register(Request $request) 
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $user = User::create([
            'user_type' => 'Client',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $code = mt_rand(100000, 999999);

        $user->update([
            'code' => $code
        ]);

        // Send email to user
        $user->notify(new SendVerificationCode($user));

        return redirect()->route('verify.account', Crypt::encrypt($user->email))->with('success_report', 'Registration Succesful, Please verify your account!'); 
    
    }

    public function verify_account($email)
    {
        $userFinder = Crypt::decrypt($email);

        $user = User::where('email', $userFinder)->first();

        return view('auth.verify_account', [
            'user' => $user
        ]);
    }

    public function email_verify_resend($email)
    {
        $email = Crypt::decrypt($email);

        $user = User::where('email', $email)->first();

        $code = mt_rand(100000, 999999);

        $user->update([
            'code' => $code
        ]);

        // Send email to user
        $user->notify(new SendVerificationCode($user));

        return back()->with('success_report', 'A fresh verification code has been sent to your email address.');
    }

    public function registerConfirm($token, Request $request)
    {
        $userfinder = Crypt::decrypt($token);

        $user = User::find($userfinder);

        $this->validate($request, [
            'code' => ['required', 'numeric']
        ]);

        if($user->code == $request->code)
        {
            $user->email_verified_at = now();
            $user->code = null;
            $user->save();

            return redirect()->route('login')->with('success_report', 'Account Verified, proceed to login!');
        }

        return back()->with('failure_report', 'Incorrect Code');
    }

    public function login()
    {
        Auth::logout();

        return view('auth.login');
    }

    public function user_login(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'g-recaptcha-response' => 'required|captcha',
        ]);
        
        $input = $request->only(['email', 'password']);
        
        $user = User::query()->where('email', $request->email)->first();

        if ($user && !Hash::check($request->password, $user->password)){
            return back()->with('failure_report', 'Incorrect Password!');
        }

        if(!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('failure_report', 'Email does\'nt exist');
        }

        // authentication attempt
        if (auth()->attempt($input)) {

            if(!$user->email_verified_at){
                // Send email to user
                $user->notify(new SendVerificationCode($user));

                return redirect()->route('verify.account', Crypt::encrypt($user->email))->with('success_report', 'Registration Succesful, Please verify your account!'); 
            }

            if($user->user_type == 'Client'){
                return redirect()->route('home');
            }
            
            Auth::logout();

            return back()->with('failure_report', 'You are not a Client User.');
        } else {
            return back()->with('failure_report', 'User authentication failed.');
        }
    }

    public function forget()
    {
        return view('auth.forget');
    }

    public function forget_password(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users',
        ]);

        $user = User::where('email', $request->email)->first();

        // Delete all old code that user send before.
        ResetCodePassword::where('email', $request->email)->delete();

        // Generate random code
        $code = mt_rand(100000, 999999);

        // Create a new code
        $codeData = ResetCodePassword::create([
            'email' => $request->email,
            'code' => $code
        ]);

        // Send email to user
        Mail::to($request->email)->send(new SendCodeResetPassword($codeData->code));

        return redirect()->route('user.reset.password')->with('success_report', 'We have emailed your password reset code!');
    }

    public function password_reset_email() 
    {
        return view('auth.reset_password');
    }

    public function reset_password(Request $request)
    {
        $request->validate([
            'code' => 'required|string|exists:reset_code_passwords',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if (ResetCodePassword::where('code', '=', $request->code)->exists()) {
            // find the code
            $passwordReset = ResetCodePassword::firstWhere('code', $request->code);

            // check if it does not expired: the time is one hour
            if ($passwordReset->created_at > now()->addHour()) {
                $passwordReset->delete();

                return back()->with('failure_report', 'Password reset code expired');
            }

            // find user's email 
            $user = User::firstWhere('email', $passwordReset->email);

            // update user password
            $user->update([
                'password' => Hash::make($request->password)
            ]);

            // delete current code 
            $passwordReset->delete();

            return redirect()->route('login')->with('success_report', 'Password has been successfully reset, Please login');
        } else {
            return back()->with('failure_report', 'Code does\'nt exist in our database');
        }
    }


    public function admin_login()
    {
        return view('auth.admin_login');
    }

    public function post_admin_login(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        
        $input = $request->only(['email', 'password']);
        
        $user = User::query()->where('email', $request->email)->first();

        if ($user && !Hash::check($request->password, $user->password)){
            return back()->with('failure_report', 'Incorrect Password!');
        }

        if(!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('failure_report', 'Email does\'nt exist');
        }

        // authentication attempt
        if (auth()->attempt($input)) {
            if($user->user_type == 'Administrator'){
                return redirect()->route('admin.dashboard');
            }
           
            return back()->with('failure_report', 'You are not an Administrator');
                    
        } else {
            return back()->with('failure_report', 'User authentication failed.');
        }
    }
}
