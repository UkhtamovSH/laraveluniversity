<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Lecture;
use App\Models\Lesson;
use App\Models\Teacher;
use App\Models\Group;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index()
    {
        $lectures = Lecture::with('classroom', 'teacher', 'group', 'lesson')->get();
        return view('admin.lecture.index', ['lectures' => $lectures]);
    }

    public function create()
    {
        $classrooms = ClassRoom::all();
        $teachers = Teacher::all();
        $groups = Group::all();
        $lessons = Lesson::all();
        $weekdays = Lecture::WEEK_DAYS;
        return view('admin.lecture.create', ['classrooms' => $classrooms, 'teachers' => $teachers, 'groups' => $groups, 'lessons' => $lessons, 'weekdays' => $weekdays]);
    }

    public function store(Request $request)
    {
        $lecture = new Lecture;

        $lecture->classroom_id = $request->input('classroom_id');
        $lecture->teacher_id = $request->input('teacher_id');
        $lecture->group_id = $request->input('group_id');
        $lecture->lesson_id = $request->input('lesson_id');
        dd($lecture::WEEK_DAYS);

        $lecture->save();

        return redirect('/dashboard/lecture');
    }
}
