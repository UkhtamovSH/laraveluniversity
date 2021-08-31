<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('admin.group.index', ['groups' => $groups]);
    }

    public function create()
    {
        return view('admin.group.create');
    }

    public function store(Request $request)
    {
        $group = new Group;

        $group->group_name = $request->input('group_name');

        $group->save();

        return redirect('/dashboard/group');
    }

    public function edit($group)
    {
        $group = Group::find($group);
        return view('admin.group.edit', ['group' => $group]);
    }

    public function update(Request $request, $group)
    {
        $group = Group::find($group);
        $group->group_name = $request->input('group_name');

        $group->update();

        return redirect('/dashboard/group');
    }

    public function delete($group)
    {
        Group::find($group)->delete();

        return redirect()->back();
    }
}
