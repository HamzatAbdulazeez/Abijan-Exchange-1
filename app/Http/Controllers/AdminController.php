<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\NairaTransaction;
use App\Models\Setting;
use App\Models\BtcTrans;
use App\Models\Rate;
use App\Models\UserWallet;
use App\Models\MailBox;
use App\Models\Order;
use App\Models\Invoice;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Carbon\Carbon;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('is_admin', 0)->orderBy('id', 'desc')->paginate(10);
        $naira = UserWallet::where('naira', '>' ,'0.00')->orderBy('id', 'desc')->get();
        $btc = UserWallet::where('btc', '>' ,'0')->orderBy('id', 'desc')->get();
        $inv = Invoice::orderBy('id', 'desc')->paginate(8);
        return view('admin.admin-welcome', compact('users','btc', 'naira', 'inv'));
    }

    public function withdraw_request(){
        $naira = NairaTransaction::where('deposit_method', 'Withdraw Naira')->paginate(10);
        return view('admin.withdraw-request', compact('naira'));
    }

    public function deposit_request(){
        $naira = NairaTransaction::where('deposit_method', 'Bank Transfer')->paginate(10);
        return view('admin.deposit-request', compact('naira'));
    }

    public function send_request(){
        $btc = BtcTrans::where('fee_method', 'flat_rate')->paginate(10);
        return view('admin.send-request', compact('btc'));
    }

    public function receive_request(){
        return view('admin.receive-request');
    }

    public function swap_request(){
        return view('admin.send-swap');
    }

    public function adminprofile()
    {
        return view('admin.profile');
    }

    public function UpdateName(Request $request)
    {
        $user = UserProfile::where('user_id', Auth::user()->id)->first();
        $user->firstname = $request->firstname;
        $user->middlename = $request->middlename;
        $user->surname = $request->surname;
        $user->update();
        Alert::success('Success', 'Name Updated Successfully!');
        return back();
    }

    public function UpdateSetting(Request $request)
    {
        $set = Setting::findOrFail(1);
        $set->naira_withdraw_fee = $request->naira_withdraw_fee;
        $set->btc_sell_rate = $request->btc_sell_rate;
        $set->btc_buy_rate = $request->btc_buy_rate;
        $set->btc_trans_fee = $request->btc_trans_fee;
        $set->naira_deposit = $request->naira_deposit;
        $set->referral_comission = $request->referral_comission;
        $set->bank_name = $request->bank_name;
        $set->acct_name = $request->acct_name;
        $set->acct_num = $request->acct_num;
        $set->memo = $request->memo;
        $set->btc_wallet = $request->btc_wallet;
        $set->eth_wallet = $request->eth_wallet;
        $set->receive_btc_wallet = $request->receive_btc_wallet;
        $set->bch_wallet = $request->bch_wallet;
        $set->usdt_wallet = $request->usdt_wallet;
        $set->pm_name = $request->pm_name;
        $set->pm_number = $request->pm_number;
        $response = cloudinary()->upload($request->file('btc_r_qr_code')->getRealPath())->getSecurePath();
        $set->btc_r_qr_code = $response;
        $set->update();

        Alert::success('Success', 'Settings Updated Successfully!');
        return back();
    }

    public function view_referral()
    {
        $refer = User::where('Affiliate_id', '!=', null)->where('referred_by', '!=', null)->get();
        return view('admin.view-referral', compact('refer'));
    }

    public function  buy_sell()
    {
        $buy = Order::where('type', 'Buy')->paginate(5);
        $sell = Order::where('type', 'sell')->paginate(5);
        $inv = Invoice::orderBy('id', 'desc')->paginate(5);
        return view('admin.buy-sell', compact('buy', 'sell', 'inv'));
    }

    public function  message_center()
    {
        $msg = MailBox::orderBy('id', 'desc')->get();
        return view('admin.message-center', compact('msg'));
    }

    public function readMail(Request $request)
    {
        $ids = $request->msg;
        $data = MailBox::findOrFail($ids);
        $data->admin_status = 1;
        $data->update();

        $new_data = (object) [
            "id" => $data->id,
            "message" => $data->message,
            "category" => $data->category,
            "type" => $data->type,
            "status" => $data->status,
            "from" => User::where('id', $data->user_id)->first()->email,
            "user_id" => 4,
            "created_at_date" => Carbon::parse($data->created_at)->format('d-m-Y'),
            "created_at_time" =>  Carbon::parse($data->created_at)->format('H:m:s'),
            "subject" => $data->subject
            ];

        //$mail = MailBox::whereIn('id',explode(",",$ids))->where('user_id', Auth::user()->id)->update(['type' => 0]);
        //dd($data);
        return response()->json(['success'=>$new_data]);
    }

    public function sent_mails()
    {
        return view('admin.sent-mail');
    }

    public function  mailbox_trash()
    {
        return view('admin.mailbox-trash');
    }

    public function  mailbox_archive()
    {
        return view('admin.mailbox_archive');
    }

    public function settings(){
        return view('admin.settings');
    }

    public function createUser(){
        $users = User::where('is_admin', 1)->orderBy('id', 'desc')->get();
        return view('admin.create_user', compact('users'));
    }

    public function setRate(){
        $rates = Rate::orderBy('id', 'desc')->get();
        return view('admin.set_rate', compact('rates'));
    }

    public function createAdminPost(Request $request)
    {
        $role = $request->role;
        $user = new User();
        $profile = new UserProfile();
        $user->email = $request->email;
        $user->is_admin = 1;
        $user->user_type = $role;
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->password = Hash::make($request->password);
        if($user->save()){
            $profile->user_id = $user->id;
            $profile->firstname = $request->firstname;
            $profile->middlename = $request->middlename;
            $profile->surname = $request->surname;
            $profile->save();

            $wallet = new UserWallet();
            $wallet->user_id = $user->id;
            $wallet->save();
        }

        Alert::success('Success', 'Admin account created successfully!');
        return back();
    }

    public function AddRate(Request $request)
    {
        Rate::create([
            'e_currency' => $request->currency,
            'port_short' => $request->port_short,
            'port_type' => 'crypto',
            'buy_rate' => $request->buy_rate,
            'sell_rate' => $request->sell_rate,
            'fee' => $request->charges,
        ]);
        Alert::success('Success', 'Rate Added Successfully!');
        return back();
    }

    public function updateRate(Request $request)
    {
        $rate = Rate::findOrFail($request->id);
        $rate->e_currency = $request->currency;
        $rate->buy_rate = $request->buy_rate;
        $rate->sell_rate = $request->sell_rate;
        $rate->port_short = $request->port_short;
        $rate->fee = $request->charges;
        $rate->save();
        Alert::success('Success', 'Rate Updated Successfully!');
        return back();
    }

    public function UpdatePassword(Request $request)
    {
        $request->validate([
            'curr_password_sett' => 'required',
            'pwrd' => 'required',
        ]);

        if(!Hash::check($request->curr_password_sett, Auth::user()->password)){
            Alert::error('Error', 'Current Password Doesn\'t match!');
            return back();
        }
        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->pwrd)
        ]);
        Alert::success('Status', 'Password changed successfully!');
        return back();
    }

    public function deleteRate(Request $request)
    {
        $rate = Rate::findOrFail($request->id)->delete();
        return response()->json($rate);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
