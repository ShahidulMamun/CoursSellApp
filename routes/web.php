<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*===================Admin Route===========================*/

require_once __DIR__. '/admin.php';

Route::get('/', function () {
    $courses = App\Models\Course::where('status',1)->limit(5)->get();
    return view('welcome',compact('courses'));

});

Route::get('/contact', [App\Http\Controllers\FontendController::class, 'Contact'])->name('contact');

Route::get('/live-courses', [App\Http\Controllers\FontendController::class, 'LiveCourses'])->name('live-courses');

Route::get('/courses-recorded', [App\Http\Controllers\FontendController::class, 'CoursesRecorded'])->name('courses-recorded');
Route::get('/course-details/{slug}', [App\Http\Controllers\FontendController::class, 'coursesDetails'])->name('course-detail');

/*==========================FontendController==========================*/ 
Route::get('/blog_post', [App\Http\Controllers\FontendController::class, 'blogpost'])->name('blog_post');
/*==========================End FontendController==========================*/ 

Route::get('category/theme/{category}', [App\Http\Controllers\FontendController::class, 'themebyCategory'])->name('category.theme');

Route::get('subcategory/theme/{category}', [App\Http\Controllers\FontendController::class, 'theme'])->name('subcategory.theme');

Auth::routes();
Route::get('/my-dashboard', [App\Http\Controllers\UserController::class, 'Dashboard'])->name('dashboard');

Route::get('/user-dashboard', [App\Http\Controllers\FontendController::class, 'UserDashboard'])->name('user-dashboard');

Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');



