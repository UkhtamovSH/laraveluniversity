<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Lesson;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('lesson')->get();
        return view('admin.teacher.index', ['teachers' => $teachers]);
    }

    public function create()
    {
        $lessons = Lesson::all();
        return view('admin.teacher.create', ['lessons' => $lessons]);
    }

    public function store(Request $request)
    {
        $teacher = new Teacher;

        $teacher->full_name = $request->input('full_name');
        $teacher->lesson_id = $request->input('lesson_id');

        $teacher->save();

        return redirect('/dashboard/teacher');
    }

    public function edit($teacher)
    {
        $lessons = Lesson::all();
        $teacher = Teacher::find($teacher);
        return view('admin.teacher.edit', ['teacher' => $teacher, 'lessons' => $lessons]);
    }

    public function update(Request $request, $teacher)
    {
        $teacher = Teacher::find($teacher);

        $teacher->full_name = $request->input('full_name');
        $teacher->lesson_id = $request->input('lesson_id');

        $teacher->update();

        return redirect('/dashboard/teacher');
    }

    public function delete($teacher)
    {
        Teacher::find($teacher)->delete();

        return redirect()->back();
    }
}
