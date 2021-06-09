<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('id', Auth::User()->id)->get();
        return view('AdminBackend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('id', Auth::User()->id)->get();
        //dd($category);
        return view('AdminBackend.product.create', compact('category'));
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

        

        $image = $request->file('image');

        if($image){

            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'public/media/product/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);

           $test =  Product::create([

                'user_id' => Auth::User()->id,
                'name' => $request->name,
                'category_id' => $request->category_id,
                'exdate' => $request->exdate,
                'pcode' => $request->pcode,
                'brand' => $request->brand,
                'size' => $request->size,
                'mstock' => $request->mstock,
                'status' => $request->status,
                'prate' =>$request->prate,
                'srate' => $request->srate,
                'description' => $request->description,
    		    'image' => $image_url
    
    
            ]);

            //dd($test);

            $notification=array(
                'messege'=>'Product Inserted SuccessFully!',
                'alert-type'=>'success'
              );
  
         return redirect()->route('products.list')->with($notification);


        } else{

            Product::create([

                'user_id' => Auth::User()->id,
                'name' => $request->name,
                'category_id' => $request->category_id,
                'exdate' => $request->exdate,
                'pcode' => $request->pcode,
                'brand' => $request->brand,
                'size' => $request->size,
                'mstock' => $request->mstock,
                'status' => $request->status,
                'prate' =>$request->prate,
                'srate' => $request->srate,
                'description' => $request->description
    		    
    
    
            ]);

            $notification=array(
                'messege'=>'Product Inserted SuccessFully!',
                'alert-type'=>'success'
              );
  
         return redirect()->route('products.list')->with($notification);
        }
       
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

    public function validation($request){

    	$request->validate([
    		'name' => 'required',
            'category_id' => 'required',
            'exdate' => 'required',
            'mstock' => 'required',
            'status' => 'required',
            'prate' => 'required',
            'srate' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
            'description' => 'required|max:200',
    	]);

    }
}
