<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    public function index()
    {
        $classrooms = ClassRoom::all();
        return view('admin.classroom.index', ['classrooms' => $classrooms]);
    }

    public function create()
    {
        return view('admin.classroom.create');
    }

    public function store(Request $request)
    {
        $classroom = new ClassRoom;

        $classroom->room_name = $request->input('room_name');

        $classroom->save();

        return redirect('/dashboard/classroom');
    }

    public function edit($classroom)
    {
        $classroom = ClassRoom::find($classroom);
        return view('admin.classroom.edit', ['classroom' => $classroom]);
    }

    public function update(Request $request, $classroom)
    {
        $classroom = ClassRoom::find($classroom);
        $classroom->room_name = $request->input('room_name');

        $classroom->update();

        return redirect('/dashboard/classroom');
    }

    public function delete($classroom)
    {
        ClassRoom::find($classroom)->delete();

        return redirect()->back();
    }
}
