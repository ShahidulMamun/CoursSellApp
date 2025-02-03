<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    

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
}
