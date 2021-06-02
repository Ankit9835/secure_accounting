<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Role;
use Validator;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('AdminBackend.dashboard');
    }
    public function chpwd()
    {
        return view('AdminBackend.chpwd');
    }
    public function sellers()
    {
        return view('AdminBackend.sellers');
    }
    ///Category Module
    public function storecategory(Request $req)
    {
        $data = new Category;
        $validator = Validator::make($req->all(),[
            'name' => 'required|unique:categories',
            
        ]);
            if ($validator->fails()){
                return \Response::json([
                'status' =>false,
                'message' => 'error',
                'error' => $validator->errors()
             ]);
            }
        $data->name = $req->name;
        $data->user_id = '1';
        $data->save();

        $notification=array(
              'messege'=>'Category Inserted SuccessFully!',
              'alert-type'=>'success'
            );

       return redirect()->back()->with($notification);
    }
    public function category()
    {
        $data = category::all();
        return view('AdminBackend.category')->with('datas',$data);
    }
    public function editCategory($id)
    {
        $data = Category::where('id',$id)->first();
        return view('AdminBackend.editcategory')->with('datas',$data);
    }
    public function editCategorystore(Request $req,$id)
    {
        $data = new Category;
        $validator = Validator::make($req->all(),[
            'name' => 'required',
            
        ]);
            if ($validator->fails()){
                return \Response::json([
                'status' =>false,
                'message' => 'error',
                'error' => $validator->errors()
             ]);
            }
            $data = Category::where('id','=',$id)->first();
            $data->name = $req->name;
            $data->save();

             $notification=array(
              'messege'=>'Category Inserted SuccessFully!',
              'alert-type'=>'success'
            );

            return redirect()->to('/customer/category')->with($notification);
    }
    public function deleteCategory($id)
    {
        $data = Category::where('id','=',$id)->first();
        $data->delete();
         $notification=array(
              'messege'=>'Category Inserted SuccessFully!',
              'alert-type'=>'success'
            );

        return redirect()->back()->with($notification);
    }
    // Role Module
    public function storerole(Request $req)
    {
        $data = new Role;
        $validator = Validator::make($req->all(),[
            'name' => 'required|unique:roles',
            
        ]);
            if ($validator->fails()){
                return \Response::json([
                'status' =>false,
                'message' => 'error',
                'error' => $validator->errors()
             ]);
            }
        $data->name = $req->name;
        $data->save();
         $notification=array(
              'messege'=>'Category Inserted SuccessFully!',
              'alert-type'=>'success'
            );

       return redirect('admin/role')->with($notification);
    }
    public function role()
    {
        $data = Role::all();
        return view('AdminBackend.role')->with('datas',$data);
    }
    public function editRole($id)
    {
        $data = Role::where('id',$id)->first();
        return view('AdminBackend.editrole')->with('datas',$data);
    }
    public function editRolestore(Request $req,$id)
    {
        $data = new Role;
        $validator = Validator::make($req->all(),[
            'name' => 'required',
            
        ]);
            if ($validator->fails()){
                return \Response::json([
                'status' =>false,
                'message' => 'error',
                'error' => $validator->errors()
             ]);
            }
            $data = Role::where('id','=',$id)->first();
            $data->name = $req->name;
            $data->save();
             $notification=array(
              'messege'=>'Category Inserted SuccessFully!',
              'alert-type'=>'success'
            );

            return redirect('admin/role')->with($notification);
    }
    public function deleteRole($id)
    {
        $data = Role::where('id','=',$id)->first();
        $data->delete();
         $notification=array(
              'messege'=>'Category Inserted SuccessFully!',
              'alert-type'=>'success'
            );

        return redirect('admin/role')->with($notification);
    }
}
