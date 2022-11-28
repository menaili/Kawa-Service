<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Picture;
use App\Models\Project;
use App\Models\Team;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::all();
        return view('pages.add-project',compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return $request->file('images')->st;
        
        $project = new Project;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->image = $request->file('pic')->store('/images/resource', ['disk' =>   'my_files']);
        $project->URL = $request->link;
        $project->save();

        foreach($request->check as $members ) {
            $team = new Team;
            $team->member_id = $members;
            $team->project_id = $project->id;
            $team->save();
        }

        foreach($request->file('images') as $imagefile ) {
        $image = new Picture;
        $image->path = $imagefile->store('/images/resource', ['disk' =>   'my_files']);
        $image->project_id = $project->id;
        $image->save();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
