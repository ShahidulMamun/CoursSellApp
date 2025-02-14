<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SocialMediaController;

/*===================Admin Route===========================*/

Route::prefix('admin')->group(function (){
    Route::get('/login',[AdminController::class, 'Index'])->name('login_from');
    Route::post('/login/owner',[AdminController::class, 'Login'])->name('admin.login');
    // password change
   Route::get('/profile-and/or/password/',[AdminController::class, 'showChangePasswordForm'])->name('admin.password.form')->middleware('admin');
   //profile update
   Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('admin.update-profile');
   
   //setting
   Route::get('/settings', [SettingController::class, 'index'])->name('setting');
   Route::post('/settings/update', [SettingController::class, 'update'])->name('settings.update');
   //social media 

   Route::get('/admin/social-media', [SocialMediaController::class, 'index'])->name('social');
   Route::post('/admin/social-media/update', [SocialMediaController::class, 'update'])->name('social.update');


   //transaction 
   Route::get('/transaction-history', [AdminController::class, 'transaction'])->name('transaction');

   //notification
    Route::get('/all-notification', [AdminController::class, 'notifications'])->name('notification');


    

    Route::get('/dashboard',[AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');
    Route::get('/register',[AdminController::class, 'AdminRegister'])->name('admin.register')->middleware('admin');
    Route::post('/register/create',[AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create')->middleware('admin');
    Route::get('/category/add',[AdminController::class, 'addcategory'])->name('admin.category.add');
    Route::post('/category/add',[AdminController::class, 'categoryadd'])->name('admin.category.add');
     Route::get('/category/sub/category',[AdminController::class, 'subcategory'])->name('admin.category.sub.category');
      Route::post('/category/sub/category',[AdminController::class, 'subaddcategory'])->name('admin.category.sub.add');
     Route::get('/add/scripts_all',[AdminController::class, 'addscripts'])->name('admin.add.scripts_all');
      Route::post('/add/scripts/software',[AdminController::class, 'addsoftware'])->name('admin.add.software');

    //courses
    Route::get('/courses',[CourseController::class,'courses'])->name('admin.courses');
    Route::post('/courses/store', [CourseController::class, 'store'])->name('courses.store');

    Route::get('/courseedit/{id}', [CourseController::class, 'edit']);
    Route::post('/courses/update/{id}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');
    //videos
    Route::get('/videos',[VideosController::class,'videos'])->name('admin.videos');
    Route::post('/videos/store', [VideosController::class, 'store'])->name('videos.store');
    Route::get('/video/{id}/{edit}', [VideosController::class, 'edit']);

    Route::post('/videoupdate/{id}', [VideosController::class, 'videoUpdate'])->name('video.update');

    Route::delete('/video/{id}', [VideosController::class, 'destroy'])->name('video.destroy');

    //Enrollment 

    Route::get('/enrollment', [VideosController::class, 'enrollment'])->name('admin.enrollment');









});