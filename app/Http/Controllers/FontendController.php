<?php

namespace App\Http\Controllers;
use App\Models\software; 
use Illuminate\Http\Request;

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
public function Courses(){
	return view('/courses');
}

}
