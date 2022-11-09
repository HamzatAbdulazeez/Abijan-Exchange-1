<?php

namespace App\Http\Controllers;

use App\Models\NairaTransaction;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use Mail;

class NairaTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\NairaTransaction  $nairaTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(NairaTransaction $nairaTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NairaTransaction  $nairaTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(NairaTransaction $nairaTransaction)
    {
        //
    }

    public function deposit(Request $request)
    {
        $d = new NairaTransaction();
        $d->deposit_method = "Bank Transfer";
        $d->trf_amount = $request->trf_amount;
        $d->deposit_fee = $request->depfee;
        $d->fee_method = $request->fee_method;
        $d->user_id = Auth::user()->id;
        $d->save();
        Mail::to(Auth::user()->email)->send(new \App\Mail\depositNara($d));
        return response()->json(["status"=>"success",
            "msg"=>"Deposit instruction will be sent to your email shortly!"
        ]);
    }

    public function sendnaira(Request $request)
    {
        $totalFee = $request->withfee*10;
        $user = UserWallet::where('user_id', Auth::user()->id)->first();
        $naira = $user->naira;
        $new_fee = $request->trf_amount + $totalFee;
        if($new_fee > $naira){
            return response()->json(["status"=>"error",
            "msg"=>"Insufficient balance in Naira Wallet!"
            ]);
        }
        $d = new NairaTransaction();
        $d->deposit_method = "Withdraw Naira";
        $d->trf_amount = $request->trf_amount;
        $d->deposit_fee = $request->withfee;
        $d->fee_method = 'Bank Transfer';
        $d->user_id = Auth::user()->id;
        $d->save();
        return response()->json(["status"=>"success",
            "msg"=>"Yow will get you withdraw in your account once it's been approved!"
        ]);
    }

    public function updateDepositNaira(Request $request)
    {
        $naira = NairaTransaction::where('id', $request->id)->first();
        $naira->status = 1;
        $user = UserWallet::where('user_id', $request->user_id)->first();
        $camount = $user->naira;
        $user->naira = $camount + ($request->amount - $request->charges);
        if($naira->update() AND $user->update()){
            Alert::success('Success', 'Your Approved Transaction!');
            return back();
        }
        
    }
    public function updateWithdrawNaira(Request $request)
    {
        $naira_withdraw = NairaTransaction::where('id', $request->id)->first();
        $naira_withdraw->status = 1;
        $user = UserWallet::where('user_id', $request->user_id)->first();
        $naira = $user->naira;
        $new_fee = $request->amount + $request->charges;
        $user->naira = $naira - $new_fee;
        if($naira_withdraw->update() AND $user->update()){
            Alert::success('Success', 'Your Approved Transaction!');
            return back();
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NairaTransaction  $nairaTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NairaTransaction $nairaTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NairaTransaction  $nairaTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(NairaTransaction $nairaTransaction)
    {
        //
    }
}
