<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\UserProfile;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware(['auth','verified']);
        $this->middleware(['auth']);
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.dashboard');
    }

    public function naira()
    {
        return view('dashboard.naira');
    }

    public function settings(Request $request)
    {
        $type = $request->query('type');
        if ($type == 'name') {
            return view('dashboard.complete_profile');
        }

    }

    public function updateProfile(Request $request){
        $user = new UserProfile();
        $user->user_id = Auth::user()->id;
        $user->firstname = $request->firstname;
        $user->middlename = $request->middlename;
        $user->surname = $request->surname;
        if($user->save()){
            Alert::success('Success', 'Profile Updated Successfully');
            return redirect()->route('home');
        }
    }

    public function deposit()
    {
        return view('dashboard.naira-deposit');
    }

    public function transaction()
    {
        return view('dashboard.transaction');
    }

    public function buynsell()
    {
        return view('dashboard.buy-and-sell');
    }

    public function kyc()
    {
        return view('dashboard.kyc');
    }


    public function profile()
    {
        return view('dashboard.profile');
    }

    public function referral()
    {
        return view('dashboard.referral');
    }
}
