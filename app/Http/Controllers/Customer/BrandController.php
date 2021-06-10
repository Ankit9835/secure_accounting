<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Auth;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Brand::where('user_id', Auth::User()->id)->get();
        return view('AdminBackend.brand.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('AdminBackend.brand.create');
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

        $this->validation($request);

    	Brand::create([

            'user_id' => Auth::User()->id,
    		'bname' => $request->bname,
            'manufacturer' => $request->manufacturer,
            'description' => $request->description,
            'status' => $request->status

    	]);

        $notification=array(
            'messege'=>'Brands Data Added SuccessFully!',
            'alert-type'=>'success'
          );

     return redirect()->route('brands.list')->with($notification);

    }

    public function validation($request){

    	$request->validate([

    		'bname' => 'required',
    		'manufacturer' => 'required',
            'description' => 'required',
    		'status' => 'required'


    	]);

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
        $data = Brand::findOrFail($id);
        return view('AdminBackend.brand.edit',compact('data'));
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

        $this->validation($request);

        Brand::where('id', $id)->update([

           
    		'bname' => $request->bname,
            'manufacturer' => $request->manufacturer,
            'description' => $request->description,
            'status' => $request->status

    	]);

        $notification=array(
            'messege'=>'Brands Data Updated SuccessFully!',
            'alert-type'=>'success'
          );

     return redirect()->route('brands.list')->with($notification);
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
        Brand::where('id', $id)->delete();

        $notification=array(
            'messege'=>'Brands Data Deleted SuccessFully!',
            'alert-type'=>'success'
          );

     return redirect()->route('brands.list')->with($notification);

    }

    
}
