<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Teacher;

class DashboardController extends Controller
{
    public function index()
    {
        $group = Group::get()->count();
        $student = Student::get()->count();
        $classroom = ClassRoom::get()->count();
        $lesson = Lesson::get()->count();
        $teacher = Teacher::get()->count();

        return view(
            'admin.dashboard',
            [
                'group' => $group,
                'student' => $student,
                'classroom' => $classroom,
                'lesson' => $lesson,
                'teacher' => $teacher
            ]
        );
    }
}
