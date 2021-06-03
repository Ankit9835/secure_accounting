<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\User;
use Auth;

class SellerController extends Controller
{
    //
    public function index(){
    	$sellers = Seller::where('id', Auth::User()->id)->orderBy('id','desc')->get();
    	return view('AdminBackend.seller.index',compact('sellers'));
    }

    public function create(){
    	return view('AdminBackend.seller.create');
    }

    public function store(Request $request){

    	$this->validation($request);

    	Seller::create([

    		'user_id' => Auth()->User()->id,
    		'cname' => $request->cname,
    		'cname' => $request->cname,
    		'gstin' => $request->gstin,
    		'ccity' => $request->ccity,
    		'pincode' => $request->pincode,
    		'state' => $request->state,
    		'pan_card' => $request->pan_card,
    		'email' => $request->email,
    		'mobile' => $request->mobile,
    		'address' => $request->address

    	]);

    	$notification=array(
              'messege'=>'Seller Inserted SuccessFully!',
              'alert-type'=>'success'
            );

       return redirect()->route('sellers.add')->with($notification);

    }

    public function edit($id){

        $seller = Seller::find($id);
        return view('AdminBackend.seller.edit',compact('seller'));
    }


    public function update(Request $request, $id){
        
        $this->validationUpdate($request,$id);

        Seller::where('id', $id)->update([

            'cname' => $request->cname,
            'cname' => $request->cname,
            'gstin' => $request->gstin,
            'ccity' => $request->ccity,
            'pincode' => $request->pincode,
            'state' => $request->state,
            'pan_card' => $request->pan_card,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address            

        ]);

        $notification=array(
              'messege'=>'Seller Updated SuccessFully!',
              'alert-type'=>'success'
            );

       return redirect()->route('sellers.list')->with($notification);

    }

     public function remove($id){
        Seller::where('id', $id)->delete();

         $notification=array(
              'messege'=>'Seller Deleted SuccessFully!',
              'alert-type'=>'success'
            );

       return redirect()->back()->with($notification);


    }

     public function validation($request){

    	$request->validate([
    		'cname' => 'required',
    		'gstin' => 'required',
    		'ccity' => 'required',
    		'pincode' => 'required',
    		'state' => 'required',
    		'pan_card' => 'required',
    		'email' => 'required|unique:buyers',
    		'mobile' => 'required|min:10|numeric',
    		'address' => 'required'
    	]);

    }

    public function validationUpdate($request,$id){

        $request->validate([
            'cname' => 'required',
            'gstin' => 'required',
            'ccity' => 'required',
            'pincode' => 'required',
            'state' => 'required',
            'pan_card' => 'required',
            'email' =>  'required|unique:users,email,'.$id,
            'mobile' => 'required|min:10|numeric',
            'address' => 'required'
        ]);

    }


}
