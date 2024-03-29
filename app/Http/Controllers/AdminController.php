<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Buyer;
use App\Models\Expense;
use App\Models\Seller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Role;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Subscription;
use Validator;
use File;
use Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $category = Category::where('user_id', Auth::User()->id)->count();
        $buyer = Buyer::where('user_id', Auth::User()->id)->count();
        $expense = Auth::user()->expenses()->sum('amount');
        //dd($expense);
        $seller = Auth::user()->sellers()->count();
        $brand = Auth::user()->brands()->count();
        $product = Auth::user()->products()->count();

        return view('AdminBackend.dashboard',compact('category','buyer','expense','seller','brand','product'));
    }
    public function chpwd()
    {
        return view('AdminBackend.chpwd');
    }

    public function admin_home(){
        $user = User::where('role_id', 2)->count();
        $roles = Role::all()->count();
        $contacts = Contact::all()->count();
        $banner = Banner::all()->count();
        $subsription = Subscription::all()->count();
        return view('AdminPanel.dashboard',compact('user','roles','contacts','banner','subsription'));
    }

     public function banner()
    {
        $datas = Banner::all();
        return view('AdminPanel.banner.index',compact('datas'));
    }

    public function storebanner(Request $req)
    {
        $data = new Banner();
        $validator = Validator::make($req->all(),[
            'bimage' => 'required|file|image',
        ]);
        if($validator->fails()){
            return \Response::json([
                'status' => false,
                'message' => 'error',
                'error' => $validator->errors()
            ]);
        }
         $data->bimage = $req->bimage->store('Banner','public');
         $data->save();
          $notification=array(
              'messege'=>'Banner Inserted SuccessFully!',
              'alert-type'=>'success'
            );
         return redirect()->back()->with($notification); 
    }

     public function editbanner($id)
    {
        $data = Banner::where('id','=',$id)->first();
        return view('AdminPanel.banner.editbanner')->with('datas',$data);
    }

     public function editBannerstore(Request $req,$id)
    {
        $data = new Banner;
        $validator = Validator::make($req->all(),[
            'bimage' => 'required|file|image',
        ]);
        if($validator->fails()){
            return \Response::json([
                'status' => false,
                'message' => 'error',
                'error' => $validator->errors()
            ]);
        }
        $data = Banner::where('id','=',$id)->first();
        $pic = $data->bimage;
        if($req->bimage){
            if(File::exists("storage/".$pic)) {
                File::delete("storage/".$pic);
            }
         $data->bimage = $req->bimage->store('Banner','public');
         $data->save();
         return redirect('admin/banner');
        }
    }

    public function deleteBanner($id)
    {
        $data = Banner::where('id', '=', $id)->first();
        $pic = $data->bimage;
        if (File::exists("public/storage/" . $pic)) {
            File::delete("public/storage/" . $pic);
        }
        $data->delete();
        return redirect('admin/banner');
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
