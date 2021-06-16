<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Company::where('user_id', Auth::User()->id)->first();
        //dd($data);
        return view('AdminBackend.company.index',compact('data'));
    }

    public function updateCompany(Request $request){

      $profile =  Company::where('user_id', Auth::User()->id)->first();
      
      if($profile == NULL){

        Company::create([

        'user_id' => Auth()->User()->id,
        'cmpnyname' => $request->cmpnyname,
        'cntryname' => $request->cntryname,
        'pin' => $request->pin,
        'mobile' => $request->mobile,
        'state' => $request->state,
        'mailname' => $request->mailname,
        'tin' => $request->tin,
        'pan' => $request->pan,
        'email' => $request->email,
        'website' => $request->website,
        'fyearfrom' => $request->fyearfrom,
        'fyearto' => $request->fyearto,
        'phone' => $request->phone,
        'cst' => $request->cst,
        'cdate' => $request->cdate,
        'bkbeginfrom' => $request->bkbeginfrom,
        'address' => $request->address,
        'description' => $request->description,

        ]);

         $notification=array(
                    'messege'=>'Company detail inserted successfully!',
                    'alert-type'=>'success'
                  );
               return redirect()->back()->with($notification);

      } else {

        Company::where('user_id', Auth::User()->id)->update([



        'cmpnyname' => $request->cmpnyname,
        'cntryname' => $request->cntryname,
        'pin' => $request->pin,
        'mobile' => $request->mobile,
        'state' => $request->state,
        'mailname' => $request->mailname,
        'tin' => $request->tin,
        'pan' => $request->pan,
        'email' => $request->email,
        'website' => $request->website,
        'fyearfrom' => $request->fyearfrom,
        'fyearto' => $request->fyearto,
        'phone' => $request->phone,
        'cst' => $request->cst,
        'cdate' => $request->cdate,
        'bkbeginfrom' => $request->bkbeginfrom,
        'address' => $request->address,
        'description' => $request->description,

        ]);

          $notification=array(
                    'messege'=>'Company detail updated successfully!',
                    'alert-type'=>'success'
                  );
               return redirect()->back()->with($notification);

      }



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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
