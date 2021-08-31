<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::all();
        return view('admin.lesson.index', ['lessons' => $lessons]);
    }

    public function create()
    {
        return view('admin.lesson.create');
    }

    public function store(Request $request)
    {
        $lesson = new Lesson;

        $lesson->lesson_type = $request->input('lesson_type');

        $lesson->save();

        return redirect('/dashboard/lesson');
    }

    public function edit($lesson)
    {
        $lesson = Lesson::find($lesson);
        return view('admin.lesson.edit', ['lesson' => $lesson]);
    }

    public function update(Request $request, $lesson)
    {
        $lesson = Lesson::find($lesson);
        $lesson->lesson_type = $request->input('lesson_type');

        $lesson->update();

        return redirect('/dashboard/lesson');
    }

    public function delete($lesson)
    {
        Lesson::find($lesson)->delete();

        return redirect()->back();
    }
}
