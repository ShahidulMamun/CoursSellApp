<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use App\Models\category;   
use App\Models\subcategory; 
use App\Models\software; 
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;



class AdminController extends Controller
{
    
    
    public function Index(){

        return view('admin.admin_login');
    }


    public function Dashboard(){
      
        return view('admin.index');
    }

    public function Login( Request $request){

       // dd($request->all());

        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' =>$check['password'] ])) {
            return redirect()->route('admin.dashboard')->with('error', 'Admin login Successfully');
        }else{
            return back()->with('error', 'Invalid Email or Password');
        }
    }

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login_from')->with('error','Admin Logout Successfully');
    }


    public function AdminRegister(){
        return view('admin.admin_register');
    }

    public function AdminRegisterCreate(Request $request){
        
       //dd($request->all());

         Admin::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
          'created_at' => Carbon::now()

        ]);
         return redirect()->route('login_from')->with('error','Admin Created Successfully');

    }
    
    //show password form
    public function showChangePasswordForm()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.update-profile-password',compact('admin'));
    }

 

    public function updateProfile(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $request->validate([
            'name' => 'required|string|max:255',
            // 'email' => 'required|email|unique:admins,email,' . Auth::id(),
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'current_password' => 'nullable|required_with:new_password',
            'new_password' => 'nullable|min:6|confirmed',
        ]);

        $admin = Auth::guard('admin')->user();

        // Validate current password if changing password
        if ($request->filled('current_password')) {
            if (!Hash::check($request->current_password, $admin->password)) {
                return back()->withErrors(['current_password' => 'Current password is incorrect']);
            }
            $admin->password = Hash::make($request->new_password);
        }

        // Update name and email
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();

        return back()->with('success', 'Profile updated successfully!');
    }

    // category

    public function addcategory(){
      $allcategory = category::all();
      return view('admin/category/add', compact('allcategory'));
    }

// add category data 
      public function categoryadd(Request $request){
         $this->validate($request,[
              'category_title' => 'required',
          ]);

          category::create([
              'category_title' => $request->category_title,
              'created_at' => Carbon:: now()
             ]);
          return back()->with("status_addcategory" , "Add Category !");
    }


    public function subcategory(){
         $subcategory = subcategory::all();
          $category = category::all();
      return view('admin/category/sub/category', compact('subcategory','category'));
    }


      public function subaddcategory(Request $request){
         $this->validate($request,[
              'sub_category' => 'required',
              'category'=>'required'
          ]);

         // return $request->all();
        // $string = str_replace(" ", "_", $request->sub_category);
        //    return $string;
          subcategory::create([
              'sub_category' => $request->sub_category,
              'category_id' => $request->category,
              'created_at' => Carbon:: now()
             ]);
          return back()->with("status_subcategory" , "Add sub Category !");
        }
    


    

   

}

