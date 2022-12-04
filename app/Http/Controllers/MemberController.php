<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Link;
use App\Models\Position;
use App\Models\Project;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::with('position','link')->get();
       // $members = Member::find(2)->link;

      //return $members;
        return view('pages.members',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = Position::all();
        return view('pages.add-member',compact('positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = Member::create([
            'name' => $request->name,
            'position_id' => $request->position,
            'image' => $request->image,
           
        ]);

        Link::createMany(
            [
            'member_id' => $member->id,
            'url' => $request->facebook
            ],

           [
            'member_id' => $member->id,
            'url' => $request->instagram
           ],

           [
            'member_id' => $member->id,
            'url' => $request->linkedin
           ],

           [
            'member_id' => $member->id,
            'url' => $request->twitter
           ]
        
        );

        return redirect()->back()->with('message', 'a new member has been added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
