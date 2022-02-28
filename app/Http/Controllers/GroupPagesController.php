<?php

namespace App\Http\Controllers;

use App\Models\Group;

class GroupPagesController extends Controller
{
    public function general() {
        $groups = Group::all();
        return view('pages.speltakken.algemeen')->with('groups', $groups);
    }

    public function group(Group $group)
    {
        return view('pages.speltakken.group')->with('group', $group);
    }
}
