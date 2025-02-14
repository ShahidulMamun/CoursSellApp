<?php

// purchased notification 
$admin = Admin::first();
if ($admin) {
    Notification::create([
        'admin_id' => $admin->id,
        'type' => 'course_purchased',
        'message' => "User {$user->name} purchased the course: {$course->title}",
    ]);
}


// <!--  where('admin_id',auth()->guard('admin')->id) -->