<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('group')->get();
        return view('admin.student.index', ['students' => $students]);
    }

    public function create()
    {
        $groups = Group::all();
        return view('admin.student.create', ['groups' => $groups]);
    }

    public function store(Request $request)
    {
        $student = new Student;

        $student->full_name = $request->input('full_name');
        $student->group_id = $request->input('group_id');

        $student->save();

        return redirect('/dashboard/student');
    }

    public function edit($student)
    {
        $groups = Group::all();
        $student = Student::find($student);
        return view('admin.student.edit', ['student' => $student, 'groups' => $groups]);
    }

    public function update(Request $request, $student)
    {
        $student = Student::find($student);

        $student->full_name = $request->input('full_name');
        $student->group_id = $request->input('group_id');

        $student->update();

        return redirect('/dashboard/student');
    }

    public function delete($student)
    {
        Student::find($student)->delete();

        return redirect()->back();
    }
}
