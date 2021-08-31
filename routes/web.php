<?php

use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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

Route::get('/', [DashboardController::class, 'index']);


Route::get('/dashboard/group', [GroupController::class, 'index']);
Route::get('/dashboard/group/create', [GroupController::class, 'create']);
Route::post('/dashboard/group/create', [GroupController::class, 'store']);
Route::get('/dashboard/group/edit/{group}', [GroupController::class, 'edit']);
Route::post('/dashboard/group/edit/{group}', [GroupController::class, 'update']);
Route::get('/dashboard/group/delete/{group}', [GroupController::class, 'delete']);


Route::get('/dashboard/student', [StudentController::class, 'index']);
Route::get('/dashboard/student/create', [StudentController::class, 'create']);
Route::post('/dashboard/student/create', [StudentController::class, 'store']);
Route::get('/dashboard/student/edit/{student}', [StudentController::class, 'edit']);
Route::post('/dashboard/student/edit/{student}', [StudentController::class, 'update']);
Route::get('/dashboard/student/delete/{student}', [StudentController::class, 'delete']);


Route::get('/dashboard/classroom', [ClassRoomController::class, 'index']);
Route::get('/dashboard/classroom/create', [ClassRoomController::class, 'create']);
Route::post('/dashboard/classroom/create', [ClassRoomController::class, 'store']);
Route::get('/dashboard/classroom/edit/{classroom}', [ClassRoomController::class, 'edit']);
Route::post('/dashboard/classroom/edit/{classroom}', [ClassRoomController::class, 'update']);
Route::get('/dashboard/classroom/delete/{classroom}', [ClassRoomController::class, 'delete']);


Route::get('/dashboard/lesson', [LessonController::class, 'index']);
Route::get('/dashboard/lesson/create', [LessonController::class, 'create']);
Route::post('/dashboard/lesson/create', [LessonController::class, 'store']);
Route::get('/dashboard/lesson/edit/{lesson}', [LessonController::class, 'edit']);
Route::post('/dashboard/lesson/edit/{lesson}', [LessonController::class, 'update']);
Route::get('/dashboard/lesson/delete/{lesson}', [LessonController::class, 'delete']);


Route::get('/dashboard/teacher', [TeacherController::class, 'index']);
Route::get('/dashboard/teacher/create', [TeacherController::class, 'create']);
Route::post('/dashboard/teacher/create', [TeacherController::class, 'store']);
Route::get('/dashboard/teacher/edit/{teacher}', [TeacherController::class, 'edit']);
Route::post('/dashboard/teacher/edit/{teacher}', [TeacherController::class, 'update']);
Route::get('/dashboard/teacher/delete/{teacher}', [TeacherController::class, 'delete']);


Route::get('/dashboard/lecture', [LectureController::class, 'index']);
Route::get('/dashboard/lecture/create', [LectureController::class, 'create']);
Route::post('/dashboard/lecture/create', [LectureController::class, 'store']);
