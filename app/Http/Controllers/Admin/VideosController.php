<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Course;

class VideosController extends Controller
{
  
 
  public function __construct()
	{
	    $this->middleware('admin');
	}

  public function videos(){

    $videos = Video::all();
    $courses = Course::all();
    return view('admin.video.index',compact('videos','courses'));
  }

  public function store(Request $request)
 {
    $request->validate([
        'title' => 'required|string|max:255',
        'video_url' => 'required|url',
        'course_id' => 'required',
    ]);

    // Extract the YouTube Video ID
    $video_id = $this->extractYouTubeId($request->video_url);

    // Save the course with the video ID
    Video::create([
        'title' => $request->title,
        'video_id' => $video_id,
        'course_id'=>$request->course_id,
    ]);

    return back()->with('success', 'Video Added successfully!');
    }

	// Function to extract YouTube Video ID
	private function extractYouTubeId($url)
	{
	    preg_match('/(?:youtu\.be\/|youtube\.com\/(?:.*v=|.*\/v\/|.*\/e\/|.*embed\/|.*watch\?.*v=))([\w-]+)/', $url, $matches);
	    return $matches[1] ?? null;
	}
	public function edit($id)
   {
	  $video = Video::findOrFail($id);
	  return response()->json(['video' => $video]);
   }


public function videoUpdate(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'video_url' => 'required',
        'course_id' => 'required',
    ]);

    // Find the video and update
    $video = Video::findOrFail($id);

    // Check if the URL is changed
    if ($request->video_url !== $video->video_url) {
        $video_id = $this->extractYouTubeId($request->video_url); // Extract new video ID
    } else {
        $video_id = $video->video_id; // Keep existing video ID
    }

    $video->update([
        'title' => $request->title,
        'video_id' => $video_id,
        'course_id' => $request->course_id,
    ]);

    // Return a JSON response
    return response()->json(['success' => 'Video updated successfully!'], 200);
}




	public function destroy($id)
   {
    $video = Video::findOrFail($id);

    if (!$video) {
        return response()->json(['success' => false, 'message' => 'Video not found'], 404);
    }

    $video->delete();

    return response()->json(['success' => true, 'message' => 'Video deleted successfully!']);
  }

 }
