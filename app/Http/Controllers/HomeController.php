<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('home');
    }
  

    public function member_signin()
    {
        $you = auth()->user();
        if(!empty($you)){
            return $this->redirect_user_to_dashboard();
        }
        else{
            return view('buyer.login');
        }
    }  

    public function vendor_signin()
    {
        $you = auth()->user();
        if(!empty($you)){
            return $this->redirect_user_to_dashboard();
        }
        else{
            return view('vendor.login');
        }
    }  

    public function enterprise_signin()
    {
        $you = auth()->user();
        if(!empty($you)){
            return $this->redirect_user_to_dashboard();
        }
        else{
            return view('enterprise.login');
        }        
    }

    private function redirect_user_to_dashboard()
    {
        $you = auth()->user();
        if($you->user_type == 'Member'){
            return redirect()->route('show_member_dashboard');
        }
        elseif($you->user_type == 'Vendor'){
            return redirect()->route('show_signinvendor_dashboard');
        }
        else{
            return redirect()->route('show_enterprise_dashboard');
        }        
    }              
}
