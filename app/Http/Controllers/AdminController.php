<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use\App\Models\Admin;
use\App\Models\category;   
use\App\Models\subcategory; 
use\App\Models\software; 
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
    

    // add scripts

    public function addscripts(){
        $allcategory = category::all();
        $subcategory = subcategory::all();
      return view('admin/add/scripts_all', compact('allcategory', 'subcategory'));
    }

    // add software

    public function addsoftware(Request $request){
     $this->validate($request,[
              'title' => 'required',
              'product_category' => 'required',
              'product_subcategory' => 'required',
              'images' => 'required|mimes:jpeg,png,jpg',
              'text' => 'required',
              'rating' => 'required',
              'preview_images' => 'required|mimes:jpeg,png,jpg',
              'software_features' => 'required',
          ]);
    // add product image
    $images = $request->file('images');
    $product = time() . $images->getClientOriginalName();
    $images->move('upload/productimage', $product);
// preview image
    $preview_images = $request->file('preview_images');
    $preview = time() . $preview_images->getClientOriginalName();
    $preview_images->move('upload/previewimage', $preview);

      software::create( [
       'title' => $request->title,
       'product_category' => $request->product_category,
       'product_subcategory' => $request->product_subcategory,
       'images'  =>$product,
       'text' => $request->text,
       'rating' => $request->rating,
       'preview_images'  =>$preview,
       'software_features' => $request->software_features,
       //you can put other insertion here
    ]);
 
     return back()->with("add_product" , "Add Product Successfully !");
    }

}

