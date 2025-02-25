<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;

class FontendController extends Controller
{
    


/*==========================================Blog list============================*/
// contct 
public function Contact(){
    return view('/contact');
}  
// live-courses
public function LiveCourses(){
    return view('/live-courses');
} 

// courses-recorded
public function CoursesRecorded(){
	return view('/courses-recorded');
}

// Courses
public function coursesDetails($slug){
     $course = Course::where('slug', $slug)->firstOrFail();

	return view('courses.details',compact('course'));
}



 // StudentRegistration
public function StudentRegistration(){
	return view('/student-registration');
}
 // user dachboard
public function UserDashboard(){
	return view('/user-dashboard');
}

}
