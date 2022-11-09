<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\UserWallet;
use App\Models\User;
use App\Models\Invoice;
use Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        return view('dashboard.order-history', compact('order'));
    }

    public function orderInfo(Request $request)
    {
        $order = Order::where('id', $request->query('i'))->first();
        return view('dashboard.order-info', compact('order'));
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
        if($request->currency_option == "Bitcoin" AND $request->unit == "USD" AND $request->amount < 5){
            return response()->json([
                "status"=>"error",
                "msg"=>"The bitcoin you want to buy must be up to $5"
            ]);
        }
        if($request->currency_option == "Bitcoin" AND $request->unit == "NGN" AND $request->amount < (5*rates()[0]['buy_rate'])){
            return response()->json([
                "status"=>"error",
                "msg"=>"The bitcoin you want to buy must be up to $5"
            ]);
        }
        if($request->currency_option == "Bitcoin" AND $request->unit == "BTC" AND $request->amount < (5*rates()[0]['buy_rate'])){
            return response()->json([
                "status"=>"error",
                "msg"=>"The bitcoin you want to buy must be up to $20"
            ]);
        }
        if ($request->currency_option == "Bitcoin" AND $request->unit == "USD" AND ($request->amount*rates()[0]['buy_rate']) > Auth::user()->wallet->naira) {
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient balance to buy Bitcoin"
            ]);
        }
        if($request->currency_option == "Bitcoin" AND $request->unit == "NGN" AND ($request->amount*1) > Auth::user()->wallet->naira){
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient balance to buy Bitcoin"
            ]);
        }
        if($request->currency_option == "Bitcoin" AND $request->unit == "BTC" AND ($request->amount*getCurrentBtcDollar()) > Auth::user()->wallet->naira){
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient balance to buy Bitcoin"
            ]);
        }

        //Ethereum
        if($request->currency_option == "Ethereum" AND $request->unit == "USD" AND $request->amount < 20){
            return response()->json([
                "status"=>"error",
                "msg"=>"The ethereum you want to buy must be up to $20"
            ]);
        }
        if($request->currency_option == "Ethereum" AND $request->unit == "NGN" AND $request->amount < (20*rates()[2]['buy_rate'])){
            return response()->json([
                "status"=>"error",
                "msg"=>"The ethereum you want to buy must be up to $20"
            ]);
        }
        if ($request->currency_option == "Ethereum" AND $request->unit == "USD" AND ($request->amount*rates()[2]['buy_rate']) > Auth::user()->wallet->naira) {
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient balance to buy Ethereum"
            ]);
        }
        if($request->currency_option == "Ethereum" AND $request->unit == "NGN" AND ($request->amount*1) > Auth::user()->wallet->naira){
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient balance to buy Ethereum"
            ]);
        }
        //USDT
        if($request->currency_option == "USDT TRC20" AND $request->unit == "USD" AND $request->amount < 10){
            return response()->json([
                "status"=>"error",
                "msg"=>"The USDT TRC20 you want to buy must be up to $10"
            ]);
        }
        if($request->currency_option == "USDT TRC20" AND $request->unit == "NGN" AND $request->amount < (10*rates()[3]['buy_rate'])){
            return response()->json([
                "status"=>"error",
                "msg"=>"The USDT TRC20 you want to buy must be up to $10"
            ]);
        }
        if ($request->currency_option == "USDT TRC20" AND $request->unit == "USD" AND ($request->amount*rates()[3]['buy_rate']) > Auth::user()->wallet->naira) {
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient balance to buy USDT TRC20"
            ]);
        }
        if($request->currency_option == "USDT TRC20" AND $request->unit == "NGN" AND ($request->amount*1) > Auth::user()->wallet->naira){
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient balance to buy USDT TRC20"
            ]);
        }
        //PM
        if($request->currency_option == "Perfect Money" AND $request->unit == "USD" AND $request->amount < 5){
            return response()->json([
                "status"=>"error",
                "msg"=>"The Perfect Money you want to buy must be up to $5"
            ]);
        }
        if($request->currency_option == "Perfect Money" AND $request->unit == "NGN" AND $request->amount < (5*rates()[1]['buy_rate'])){
            return response()->json([
                "status"=>"error",
                "msg"=>"The Perfect Money you want to buy must be up to $5"
            ]);
        }
        if ($request->currency_option == "Perfect Money" AND $request->unit == "USD" AND ($request->amount*rates()[1]['buy_rate']) > Auth::user()->wallet->naira) {
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient balance to buy Perfect Money"
            ]);
        }
        if($request->currency_option == "Perfect Money" AND $request->unit == "NGN" AND ($request->amount*1) > Auth::user()->wallet->naira){
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient balance to buy Perfect Money"
            ]);
        }
        //BTCASH
        if($request->currency_option == "bitcoin Cash" AND $request->unit == "USD" AND $request->amount < 20){
            return response()->json([
                "status"=>"error",
                "msg"=>"The bitcoin cash you want to buy must be up to $20"
            ]);
        }
        if($request->currency_option == "bitcoin Cash" AND $request->unit == "NGN" AND $request->amount < (20*rates()[4]['buy_rate'])){
            return response()->json([
                "status"=>"error",
                "msg"=>"The bitcoin cash you want to buy must be up to $20"
            ]);
        }
        if ($request->currency_option == "bitcoin Cash" AND $request->unit == "USD" AND ($request->amount*rates()[4]['buy_rate']) > Auth::user()->wallet->naira) {
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient balance to buy bitcoin cash"
            ]);
        }
        if($request->currency_option == "bitcoin Cash" AND $request->unit == "NGN" AND ($request->amount*1) > Auth::user()->wallet->naira){
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient balance to buy bitcoin cash"
            ]);
        }
        $d              = new Order();
        $d->type        = 'Buy';
        $d->user_id     = Auth::user()->id;
        $d->currency    = $request->currency_option;
        $d->pay_with    = $request->buy_from;
        $d->amount      = $request->amount;
        $d->unit        = $request->unit;

        $user = UserWallet::where('user_id', Auth::user()->id)->first();
        if($request->currency_option == "bitcoin Cash" AND $request->unit == "USD"){
            $new_amount = $user->naira - ($request->amount*rates()[4]['buy_rate']);
            $d->bch_wallet  = $request->acctnameBuy;
        }
        elseif($request->currency_option == "Perfect Money" AND $request->unit == "USD"){
            $new_amount = $user->naira - ($request->amount*rates()[1]['buy_rate']);
            $d->pm_wallet   = $request->acctnameBuy;
            $d->pm_wallet   = $request->acctnoBuy;
        }
        elseif($request->currency_option == "USDT TRC20" AND $request->unit == "USD"){
            $new_amount = $user->naira - ($request->amount*rates()[3]['buy_rate']);
            $d->usdt_wallet = $request->acctnameBuy;
        }
        elseif($request->currency_option == "Ethereum" AND $request->unit == "USD"){
            $new_amount = $user->naira - ($request->amount*rates()[2]['buy_rate']);
            $d->eth_wallet  = $request->acctnameBuy;
            //dd($new_amount, ($request->amount*rates()[2]['buy_rate']));
        }
        elseif($request->currency_option == "Bitcoin" AND $request->unit == "USD"){
            $new_amount = $user->naira - ($request->amount*rates()[0]['buy_rate']);
            $d->btc_wallet  = $request->acctnameBuy;
        }
        elseif($request->currency_option == "Bitcoin" AND $request->unit == "BTC"){
            $new_amount = $user->naira - ($request->amount*getCurrentBtcDollar());
            $d->btc_wallet  = $request->acctnameBuy;
        }
        else{
            $new_amount = $user->naira - ($request->amount*1);
            $d->wallet  = $request->acctnameBuy;
        }
        $user->naira    = $new_amount;
        $user->update();
        $d->save();

        return response()->json([
            "status"=>"success",
            "msg"=>"You buy e-currency is successful, please wait for admin to approve"
        ]);
        //dd($request);
    }

    public function quicksell(Request $request)
    {
        //
        if($request->currency_option == "Bitcoin" AND $request->unit == "USD" AND $request->amount < 5){
            return response()->json([
                "status"=>"error",
                "msg"=>"The bitcoin you want to buy must be up to $5"
            ]);
        }
        if($request->currency_option == "Bitcoin" AND $request->unit == "NGN" AND $request->amount < (5*rates()[0]['sell_rate'])){
            return response()->json([
                "status"=>"error",
                "msg"=>"The bitcoin you want to buy must be up to $5"
            ]);
        }
        if($request->currency_option == "Bitcoin" AND $request->unit == "BTC" AND $request->amount < (5*rates()[0]['sell_rate'])){
            return response()->json([
                "status"=>"error",
                "msg"=>"The bitcoin you want to buy must be up to $5"
            ]);
        }
        if($request->currency_option == "Bitcoin" AND $request->unit == "BTC" AND $request->sell_from == "Bitcoin Balance" AND $request->amount < Auth::user()->wallet->btc){
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient bitcoin balance to sell Bitcoin"
            ]);
        }

        if($request->currency_option == "Bitcoin" AND $request->unit == "USD" AND $request->sell_from == "Bitcoin Balance" AND ($request->amount*getCurrentBtcDollar()) < Auth::user()->wallet->btc){
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient bitcoin balance to sell Bitcoin"
            ]);
        }
        if($request->currency_option == "Bitcoin" AND $request->unit == "USD" AND $request->sell_from == "Bitcoin Balance" AND (($request->amount/rates()[0]['sell_rate'])*getCurrentBtcDollar()) < Auth::user()->wallet->btc){
            return response()->json([
                "status"=>"error",
                "msg"=>"You have insufficient bitcoin balance to sell Bitcoin"
            ]);
        }

        //Ethereum
        if($request->currency_option == "Ethereum" AND $request->unit == "USD" AND $request->amount < 20){
            return response()->json([
                "status"=>"error",
                "msg"=>"The ethereum you want to buy must be up to $20"
            ]);
        }
        if($request->currency_option == "Ethereum" AND $request->unit == "NGN" AND $request->amount < (20*rates()[2]['sell_rate'])){
            return response()->json([
                "status"=>"error",
                "msg"=>"The ethereum you want to buy must be up to $20"
            ]);
        }
        //USDT
        if($request->currency_option == "USDT TRC20" AND $request->unit == "USD" AND $request->amount < 10){
            return response()->json([
                "status"=>"error",
                "msg"=>"The USDT TRC20 you want to buy must be up to $10"
            ]);
        }
        if($request->currency_option == "Perfect Money" AND $request->unit == "NGN" AND $request->amount < (5*rates()[1]['sell_rate'])){
            return response()->json([
                "status"=>"error",
                "msg"=>"The Perfect Money you want to buy must be up to $5"
            ]);
        }
        //BTCASH
        if($request->currency_option == "bitcoin Cash" AND $request->unit == "USD" AND $request->amount < 20){
            return response()->json([
                "status"=>"error",
                "msg"=>"The bitcoin cash you want to buy must be up to $20"
            ]);
        }
        if($request->currency_option == "bitcoin Cash" AND $request->unit == "NGN" AND $request->amount < (20*rates()[4]['sell_rate'])){
            return response()->json([
                "status"=>"error",
                "msg"=>"The bitcoin cash you want to buy must be up to $20"
            ]);
        }

        $d              = new Order();
        $d->type        = 'Sell';
        $d->user_id     = Auth::user()->id;
        $d->currency    = $request->currency_option;
        $d->pay_with    = $request->sell_from;
        $d->amount      = $request->amount;
        $d->unit        = $request->unit;
        $d->eth_wallet  = $request->acctnameBuy || '';
        $d->btc_wallet  = $request->acctnameBuy || '';
        $d->pm_wallet   = $request->acctnameBuy || '';
        $d->usdt_wallet = $request->acctnameBuy || '';
        $d->save();
        $user = UserWallet::where('user_id', Auth::user()->id)->first();
        if($request->currency_option == "Bitcoin" AND $request->unit == "USD" AND $request->sell_from == "Bitcoin Balance"){
            $new_amount = $user->btc - ($request->amount*getCurrentBtcDollar());
            $user->btc    = $new_amount;
            $user->update();
        }
        elseif($request->currency_option == "Bitcoin" AND $request->unit == "BTC" AND $request->sell_from == "Bitcoin Balance"){
            $new_amount = $user->btc - $request->amount;
            $user->btc    = $new_amount;
            $user->update();
        }

        elseif($request->currency_option == "Bitcoin" AND $request->unit == "NGN" AND $request->sell_from == "Bitcoin Balance"){
            $new_amount = $user->btc - (($request->amount/rates()[0]['sell_rate'])*getCurrentBtcDollar());
            $user->btc    = $new_amount;
            $user->update();
        }
        else{
            $i = new Invoice();
            $i->invoice_id = Str::random(8);
            $i->user_id = Auth::user()->id;
            $i->order_id = $d->id;
            $i->fund_method = $request->sell_from;
            $i->order_amount = $request->amount;
            $i->currency = $request->currency_option;
            $i->unit = $request->unit;
            $i->save();
        }


        return response()->json([
            "status"=>"success",
            "msg"=>"You sell e-currency is successfull"
        ]);
        //dd($request);
    }

    public function cancel_sell(Request $request){
        $id = $request->inv;
        $o = Order::findOrFail($id);
        $o->status = 3;
        $o->save();
        return response()->json([
            "status"=>"success",
        ]);
    }

    public function sendnotice(Request $request)
    {
        $inv = Invoice::where('invoice_id', $request->query('i'))->first();
        return view('dashboard.fund-notice', compact('inv'));
    }

    public function palertz_sell(Request $request)
    {
        $inv = Invoice::where('invoice_id', $request->hiddeninvoice_no)->first();
        $o = Order::where('id', $inv->order_id)->first();
        $inv->amount_sent = $request->amount_sent;
        $inv->fund_date = $request->funding_date;
        $inv->status = 2;
        $o->status = 2;
        $inv->update();
        $o->update();
        Mail::to(Auth::user()->email)->send(new \App\Mail\ExchangeBTC($inv));
        return response()->json([
            "status"=>"success",
            "msg"=>"You sell fund posted successfully, please, wait for te administrator approval!"
        ]);
    }

    public function buyUpdate(Request $request)
    {
        
        if($request->type == "btc" AND $request->unit == "USD"){
            $btc = getCurrentBtcDollar();
            $user = UserWallet::where('user_id', $request->user_id)->first();
            $total = $request->amount/$btc;
            $round = number_format($total, 7);
            $usercurr = $user->btc;
            $user->btc = $usercurr + $round;
            $user->update();
        }
        if($request->type == "btc" AND $request->unit == "BTC"){
            $btc = getCurrentBtcDollar();
            $user = UserWallet::where('user_id', $request->user_id)->first();
            $usercurr = $user->btc;
            $user->btc = $usercurr + $request->amount;
            $user->update();
        }
        if($request->type == "btc" AND $request->unit == "NGN"){
            //dd($request->unit, $request->type);
            $btc = getCurrentBtcDollar();
            $rate = rates()[0]['buy_rate'];
            $pr = $btc*$rate;
            $sp = $request->amount/$pr;
            $round = number_format($sp, 7);
            $user = UserWallet::where('user_id', $request->user_id)->first();
            $usercurr = $user->btc;
            $user->btc = $usercurr + $round;
            $user->update();
        }
        Order::findOrFail($request->id)->update(["status"=>1]);
        Alert::success('Success', 'Your Approved Transaction!');
        return back();
    }

    public function InvoiceUpdate(Request $request)
    {
        $inv = Invoice::where('id', $request->id)->first();
        $inv->update(["status"=>1]);
        //dd($inv);
        Order::findOrFail($inv->order_id)->update(["status"=>1]);
        Alert::success('Success', 'Your Approved Transaction!');
        return back();
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
