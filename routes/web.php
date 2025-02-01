<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::prefix('admin')->group(function (){
    Route::get('/login',[AdminController::class, 'Index'])->name('login_from');
    Route::post('/login/owner',[AdminController::class, 'Login'])->name('admin.login');
    Route::get('/dashboard',[AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');
    Route::get('/register',[AdminController::class, 'AdminRegister'])->name('admin.register');
    Route::post('/register/create',[AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');
    Route::get('/category/add',[AdminController::class, 'addcategory'])->name('admin.category.add');
    Route::post('/category/add',[AdminController::class, 'categoryadd'])->name('admin.category.add');
     Route::get('/category/sub/category',[AdminController::class, 'subcategory'])->name('admin.category.sub.category');
      Route::post('/category/sub/category',[AdminController::class, 'subaddcategory'])->name('admin.category.sub.add');
     Route::get('/add/scripts_all',[AdminController::class, 'addscripts'])->name('admin.add.scripts_all');
      Route::post('/add/scripts/software',[AdminController::class, 'addsoftware'])->name('admin.add.software');

});

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

