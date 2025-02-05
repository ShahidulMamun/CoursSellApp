<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;

/*===================Admin Route===========================*/

Route::prefix('admin')->group(function (){
    Route::get('/login',[AdminController::class, 'Index'])->name('login_from');
    Route::post('/login/owner',[AdminController::class, 'Login'])->name('admin.login');
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






});