<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Expense;
use Auth;

class ExpenseController extends Controller
{
    //
    public function index(){
        $expenses = Expense::where('user_id', Auth::User()->id)->get();
        return view('AdminBackend.expense.index',compact('expenses'));
    }

    public function create(){

    	$category = Category::where('user_id', Auth::User()->id)->get();
    	return view('AdminBackend.expense.create',compact('category'));
    }

    public function store(Request $request){

    	//dd($request->all());
    	$this->validation($request);

    	Expense::create([

    		'user_id' => Auth::User()->id,
    		'expense_detail' => $request->expense_detail,
    		'amount' =>  $request->amount,
    		'category_id' => $request->category_id,
    		'payment_mode' => $request->payment_mode,
    		'date' => $request->date


    	]);

    	$notification=array(
              'messege'=>'Expense Added SuccessFully!',
              'alert-type'=>'success'
            );

       return redirect()->route('expense.list')->with($notification);

    	

    }

    public function edit($id){
        $expense = Expense::find($id);
        $category = Category::where('user_id', Auth::User()->id)->get();
        return view('AdminBackend.expense.edit',compact('expense','category'));
    }

    public function update(Request $request, $id){

        $this->validation($request);

        Expense::where('id', $id)->update([

            'expense_detail' => $request->expense_detail,
            'amount' =>  $request->amount,
            'category_id' => $request->category_id,
            'payment_mode' => $request->payment_mode,
            'date' => $request->date

        ]);

        $notification=array(
              'messege'=>'Expense Updated SuccessFully!',
              'alert-type'=>'success'
            );

       return redirect()->route('expense.list')->with($notification);

    }

    public function remove($id){
        Expense::where('id', $id)->delete();
         $notification=array(
              'messege'=>'Expense Deleted SuccessFully!',
              'alert-type'=>'success'
            );

       return redirect()->back()->with($notification);
    }

    public function validation($request){

    	$request->validate([

    		'expense_detail' => 'required',
    		'amount' => 'required',
    		'category_id' => 'required',
    		'payment_mode' => 'required',
    		'date' => 'required'


    	]);

    }
}
