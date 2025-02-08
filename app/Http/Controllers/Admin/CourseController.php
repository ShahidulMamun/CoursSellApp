<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{
   
public function __construct()
{
    $this->middleware('admin');
}


public function courses(){
   	 
  $courses = Course::all();
  return view('admin.course.index',compact('courses'));
}


public function store(Request $request)
{

    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price' => 'required|numeric|min:0',
        'status' => 'required|integer|in:0,1,2',
    ]);

    // Handle file upload
     if ($request->hasFile('thumbnail')) {
         $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
    } else {

    	  return redirect()->back()->with('message', 'Thumbnail upload failed!');
    }

    $course = Course::create([
        'title' => $request->title,
        'slug' => Str::slug($request->title),
        'description' => $request->description,
        'thumbnail' => $thumbnailPath ?? null,
        'price' => $request->price,
        'status' => $request->status,
    ]);

      return redirect()->back()->with('success', 'Course created successfully!');
}


public function edit($id)
 {
   $course = Course::findOrFail($id);
   return response()->json(['course' => $course]);
 }

public function update(Request $request, $id)
{
    $course = Course::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'status' => 'required|integer|in:0,1,2',
        'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $course->title = $request->title;
    $course->description = $request->description;
    $course->price = $request->price;
    $course->status = $request->status;
    $course->slug =  Str::slug($request->title);

    if ($request->hasFile('thumbnail')) {

    	// Delete the old thumbnail if it exists
        if ($course->thumbnail && Storage::disk('public')->exists($course->thumbnail)) {
            Storage::disk('public')->delete($course->thumbnail);
        }
        //upload new thumbnail
        $imagePath = $request->file('thumbnail')->store('thumbnails', 'public');
        $course->thumbnail = $imagePath;
    }

    $course->save();

    return response()->json(['success' => true, 'message' => 'Course updated successfully', 'course' => $course]);
}



public function destroy($id)
 {
    $course = Course::findOrFail($id);

    if (!$course) {
        return response()->json(['success' => false, 'message' => 'Course not found'], 404);
    }

    // Delete the thumbnail file if it exists
    if ($course->thumbnail) {
        \Storage::disk('public')->delete($course->thumbnail);
    }

    $course->delete();

    return response()->json(['success' => true, 'message' => 'Course deleted successfully!']);
}
   

}
