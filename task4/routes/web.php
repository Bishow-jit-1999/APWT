<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

Route::get('/',[LoginController::class,'Home'])->name('Home');

Route::post('/login/adminDash',[LoginController::class,'loginSubmit'])->name('loginSub');

Route::get('/admin/addcourse',[CourseController::class,'addcourse'])->name('addcourse');

Route::post('/admin/addcourse/add',[CourseController::class,'addcourseSubmit'])->name('addcourse.add');

Route::get('/admin/courses/view',[CourseController::class,'viewcourse'])->name('viewcourses');

Route::get('/admin/student/add',[StudentController::class,'addStudent'])->name('admin.addstudent');

Route::post('/admin/student/add/save',[StudentController::class,'addStudentSubmit'])->name('admin.addstudent.save');

Route::get('/view/allstudents',[StudentController::class,'viewStudents'])->name('admin.student.list');

Route::get('/amin/teacher/add',[TeacherController::class,'addTeacher'])->name('admin.addTeacher');

Route::post('/amin/teacher/add/save',[TeacherController::class,'addTeacherSubmit'])->name('admin.addTeacher.save');

Route::get('/view/allteachers',[TeacherController::class,'viewTeachers'])->name('admin.teacher.list');