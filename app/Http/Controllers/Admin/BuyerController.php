<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buyer;
use Auth;

class BuyerController extends Controller
{
    //
	public function index(){
		$buyers = Buyer::where('user_id', Auth()->User()->id)->get();
		//dd($buyer);
		return view('AdminBackend.buyer.index',compact('buyers'));
	}

    public function create(){
    	return view('AdminBackend.buyer.create');
    }

    public function store(Request $request){

    	$this->validation($request);

    	Buyer::create([

    		'user_id' => Auth()->User()->id,
    		'cname' => $request->cname,
    		'cname' => $request->cname,
    		'gstin' => $request->gstin,
    		'ccity' => $request->ccity,
    		'pincode' => $request->pincode,
    		'state' => $request->state,
    		'country' => $request->country,
    		'email' => $request->email,
    		'mobile' => $request->mobile,
    		'address' => $request->address

    	]);

    	$notification=array(
              'messege'=>'Buyer Inserted SuccessFully!',
              'alert-type'=>'success'
            );

       return redirect()->route('buyer.index')->with($notification);

    	//dd($request->all());

    }

    public function edit($id){

        $buyer = Buyer::find($id);
        return view('AdminBackend.buyer.edit',compact('buyer'));
    }

    public function update(Request $request, $id){
        
        $this->validationUpdate($request,$id);

        Buyer::where('id', $id)->update([

            'cname' => $request->cname,
            'cname' => $request->cname,
            'gstin' => $request->gstin,
            'ccity' => $request->ccity,
            'pincode' => $request->pincode,
            'state' => $request->state,
            'country' => $request->country,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address            

        ]);

        $notification=array(
              'messege'=>'Buyer Updated SuccessFully!',
              'alert-type'=>'success'
            );

       return redirect()->route('buyer.index')->with($notification);

    }

    public function remove($id){
        Buyer::where('id', $id)->delete();

         $notification=array(
              'messege'=>'Buyer Deleted SuccessFully!',
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
    		'country' => 'required',
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
            'country' => 'required',
            'email' =>  'required|unique:users,email,'.$id,
            'mobile' => 'required|min:10|numeric',
            'address' => 'required'
        ]);

    }


}
