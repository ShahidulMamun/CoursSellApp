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
    return view('welcome');

});

Route::get('/contact', [App\Http\Controllers\FontendController::class, 'Contact'])->name('contact');

Route::get('/live-courses', [App\Http\Controllers\FontendController::class, 'LiveCourses'])->name('live-courses');

Route::get('/courses-recorded', [App\Http\Controllers\FontendController::class, 'CoursesRecorded'])->name('courses-recorded');
Route::get('/courses', [App\Http\Controllers\FontendController::class, 'Courses'])->name('courses');

/*==========================FontendController==========================*/ 
Route::get('/blog_post', [App\Http\Controllers\FontendController::class, 'blogpost'])->name('blog_post');
/*==========================End FontendController==========================*/ 

Route::get('category/theme/{category}', [App\Http\Controllers\FontendController::class, 'themebyCategory'])->name('category.theme');

Route::get('subcategory/theme/{category}', [App\Http\Controllers\FontendController::class, 'theme'])->name('subcategory.theme');

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/add_blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('add_blog');
// Route::post('/add_blog/create', [App\Http\Controllers\HomeController::class, 'blogcreate'])->name('add_blog.create');
// Route::get('/blog_list', [App\Http\Controllers\HomeController::class, 'bloglist'])->name('blog_list');




