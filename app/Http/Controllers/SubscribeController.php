<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Subscribers;


class SubscribeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required',                       
        ]);

        $subscriber = new Subscribers();
        $subscriber->firstname     = $request->input('firstname');
        $subscriber->lastname   = $request->input('lastname');
        $subscriber->email = $request->input('email');
        $subscriber->created_at = date("Y-m-d H:i:s");        
        $subscriber->save();

        echo "success";
    }

}
