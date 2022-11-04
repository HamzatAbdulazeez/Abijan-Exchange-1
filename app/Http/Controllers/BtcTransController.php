<?php

namespace App\Http\Controllers;

use App\Models\BtcTrans;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use Hash;

class BtcTransController extends Controller
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
        $trf_wallet = $request->trf_wallet;
        $bit_amount =  $request->bit_amount;
        $transfee_btc =  $request->transfee_btc;
        $fee_method_btc = $request->fee_method_btc;
        $send_pass = $request->send_pass;
        $user_id = Auth::user()->id;
        $btc_bal =  Auth::user()->wallet->btc;
        $btc_fee =  settings()->btc_trans_fee;
        $new_ammount = $bit_amount + $btc_fee;

        if(!Hash::check($request->send_pass, Auth::user()->password)){
            //Alert::error('Error', 'Your Password is incorrect!');
            return response()->json(['error'=>"Your Password is incorrect!", 'status'=>"password_error"]);
        }
        else if ($new_ammount < $bit_amount) {
            return response()->json(['error'=>"You have enough in your btc wall to complete this transaction!, please fund your btc wallet",
                'status'=>"balance_error"]);
        }
        else{
            $wallet = UserWallet::where('user_id', Auth::user()->id)->first();
            $bal = $wallet->btc;
            //dd($wallet->btc - $new_ammount);
            $wallet->btc = $wallet->btc - $new_ammount;
            $wallet->update();
            $trns = new BtcTrans();
            $trns->trf_wallet = $trf_wallet;
            $trns->btc_amount =  $request->bit_amount;
            $trns->transfer_fee =  $btc_fee;
            $trns->user_id = Auth::user()->id;
            $trns->fee_method = $request->fee_method_btc;
            $trns->save();
            return response()->json(['success'=>"Your Transaction is Pending! Please wait for admin to verify", 'status'=>"success"]);
        }
    }

    public function btcNaira(Request $request)
    {
        BtcTrans::findOrFail($request->id)->update(["status"=>1]);
        Alert::success('Success', 'Your Approved Transaction!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BtcTrans  $btcTrans
     * @return \Illuminate\Http\Response
     */
    public function show(BtcTrans $btcTrans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BtcTrans  $btcTrans
     * @return \Illuminate\Http\Response
     */
    public function edit(BtcTrans $btcTrans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BtcTrans  $btcTrans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BtcTrans $btcTrans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BtcTrans  $btcTrans
     * @return \Illuminate\Http\Response
     */
    public function destroy(BtcTrans $btcTrans)
    {
        //
    }
}
