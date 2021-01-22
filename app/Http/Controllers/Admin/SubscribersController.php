<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Subscribers;


class SubscribersController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscribers::paginate( 20 );
        return view('admin.dashboard.subscribers.subscribersList', ['subscribers' => $subscribers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        return view('admin.dashboard.subscribers.create');
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname'             => 'required',
            'lastname'           => 'required',
            'email'              => 'required',                       
        ]);

        $subscriber = new Subscribers();
        $subscriber->firstname     = $request->input('firstname');
        $subscriber->lastname   = $request->input('lastname');
        $subscriber->email = $request->input('email');
        $subscriber->created_at = date("Y-m-d H:i:s");        
        $subscriber->save();
        $request->session()->flash('message', 'Successfully created credit');
        return redirect()->route('home');
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subscriber = Subscribers::find($id);
        return view('admin.dashboard.subscribers.subscribersShow', [ 'subscriber' => $subscriber ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function edit($id)
    {
        $credit = Credits::find($id);
        return view('admin.dashboard.credits.edit', [ 'credit' => $credit ]);
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
        //var_dump('bazinga');
        //die();
        $validatedData = $request->validate([
            'title'             => 'required|min:1|max:64',
            'content'           => 'required',
            'type'              => 'required',
            'cost_amount'       => 'required|numeric',
            'points'            => 'required|numeric',
            'is_for_sale'       => 'required|numeric',
            'is_auto_renewal'   => 'required|numeric', 
        ]);
        $credit = Credits::find($id);
        $credit->title     = $request->input('title');
        $credit->content   = $request->input('content');
        $credit->type = $request->input('type');
        $credit->cost_amount = $request->input('cost_amount');
        $credit->points = $request->input('points');
        $credit->is_for_sale = $request->input('is_for_sale');
        $credit->is_auto_renewal = $request->input('is_auto_renewal');        
        $credit->save();
        $request->session()->flash('message', 'Successfully edited credit');
        return redirect()->route('credits.index');
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subscriber = Subscribers::find($id);
        if($subscriber){
            $subscriber->delete();
        }
        return redirect()->route('subscribers.index');
    }
}
