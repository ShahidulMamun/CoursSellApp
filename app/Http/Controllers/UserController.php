<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth');
    }
    

   public function show($id)
    {
    $course = Course::findOrFail($id);

    // Check if the user is enrolled
    $isEnrolled = Enrollment::where('user_id', auth()->id())->where('course_id', $id)->exists();

    if (!$isEnrolled) {
        return redirect()->route('courses')->with('error', 'You need to enroll first!');
    }

    return view('courses.show', compact('course'));
   }

   public function Dashboard(){
    return view('dashboard.index');
}


   public function logout(Request $request)
  {
    Auth::logout();

    // Invalidate the session
    $request->session()->invalidate();

    // Regenerate the CSRF token
    $request->session()->regenerateToken();

    return redirect('/login'); // Redirect to login page
 }
}
