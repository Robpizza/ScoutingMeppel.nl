<?php

namespace App\Http\Controllers;

use App\Models\VolunteerRole;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class VolunteerRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|Application|View
     */
    public function index()
    {
        $roles = VolunteerRole::all();
        return view('admin.roles.index')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VolunteerRole  $volunteerRole
     * @return \Illuminate\Http\Response
     */
    public function show(VolunteerRole $volunteerRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VolunteerRole  $volunteerRole
     * @return \Illuminate\Http\Response
     */
    public function edit(VolunteerRole $volunteerRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VolunteerRole  $volunteerRole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VolunteerRole $volunteerRole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VolunteerRole  $volunteerRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(VolunteerRole $volunteerRole)
    {
        //
    }
}
