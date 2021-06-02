<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Subscription;

class FrontEndController extends Controller
{
    //
    public function index(){
    	return view('Frontend.index');
    }

    public function storeContact(Request $request){


        $request->validate([

        	'name' => 'required',
            'email' => 'required|unique:contacts',
            'subject' => 'required',
            'message' => 'required',

        ]);

       
         Contact::create([

         	'name' => $request->name,
         	'email' => $request->email,
         	'subject' => $request->subject,
         	'message' => $request->message

         ]);

         //return back()->with('message','Message sent successfully!');

        

    }

    public function storeSubscription(Request $request){

    		 Subscription::create([

    		 	'email' => $request->email

    		 ]);
        
    }

    public function pricing(){
    	return view('Frontend.pricing');
    }

    public function userRegistration(){
    	return view('Frontend.signup');
    }
}
