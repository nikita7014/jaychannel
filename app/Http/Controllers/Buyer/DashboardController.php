<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CardDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        try{
            $you = auth()->user();
            return view('buyer.dashboard', compact( 'you'));
        }catch(\Exception $e){
        return $e->getMessage();
        }
        
    }
    public function memberManageClass()
    {
    
        try{
            $you = auth()->user();
            $classBookedDetails = DB::table('class_booked')->join('courses', 'courses.id', '=', 'class_booked.course_id')
            ->where('class_booked.user_id', '=', $you->id)->get();
            $totalCount=count($classBookedDetails)-1;
            $creditsAvailable=$classBookedDetails[$totalCount]->credit_available;
           
            return view('buyer.manage_classes', compact( 'you','classBookedDetails','creditsAvailable'));
        }catch(\Exception $e){
        return $e->getMessage();
        }
  }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addCardDetails(Request $request)
    {
        //print_r($request->all());die;
        try{
            $validator = Validator::make($request->all(), [
                'user_name' => ['required', 'string', 'max:255'],
                'address' => ['required'],
                'tel' => ['required'],
                'email' => ['required'],
                'credit_amount' => ['required'],
                'auto_refill' => ['required'],      
                'card_no' => ['required'],      
                'exp_from' => ['required'],      
                'exp_to' => ['required'],      
                'ccv_no' => ['required'],      
                'flightdeck_login' => ['required'],      
            ]);
    
    
            if ($validator->fails()) {
               
                return redirect('member_dashboard')->withInput()->withErrors($validator);
    
            }else{
               
                    $card = new CardDetail;
                    $card->user_id =  auth()->user()->id;
                    $card->user_name = $request['user_name'];
                    $card->address = $request['address'];
                    $card->tel = $request['tel'];
                    $card->email = $request['email'];
                    $card->credit_amount = $request['credit_amount'];                                    
                    $card->card_no = $request['card_no'];                                    
                    $card->exp_from = $request['exp_from'];                                    
                    $card->exp_to = $request['exp_to'];                                    
                    $card->ccv_no = $request['ccv_no'];                                    
                    $card->flightdeck_login = $request['flightdeck_login'];                                    
                   
                  
                    $status = $card->save();
                    session()->flash('success_message', 'Success');
                    return redirect()->back();
                
            }
        }catch(\Exception $e){
        return $e->getMessage();
        }
       
    }
  
   
    
}
