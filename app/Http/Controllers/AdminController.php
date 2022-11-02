<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('is_admin', 0)->orderBy('id', 'desc')->get();
        return view('admin.admin-welcome', compact('users'));
    }

    public function withdraw_request(){
        return view('admin.withdraw-request');
    }

    public function deposit_request(){
        return view('admin.deposit-request');
    }

    public function send_request(){
        return view('admin.send-request');
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

    public function view_referral()
    {
        return view('admin.view-referral');
    }

    public function  buy_sell()
    {
        return view('admin.buy-sell');
    }

    public function  message_center()
    {
        return view('admin.message-center');
    }

    public function sent_mails()
    {
        return view('admin.sent-mail');
    }

    public function  mailbox_trash()
    {
        return view('admin. mailbox-trash');
    }

    public function   mailbox_archive()
    {
        return view('admin.mailbox_archive');
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
