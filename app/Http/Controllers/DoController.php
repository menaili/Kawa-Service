<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Link;
use App\Models\Picture;
use App\Models\Project;


class DoController extends Controller
{
    public function membbmem()
    {
        $members = Member::with('position','link')->get();
        return view('pages.members', compact('members'));
    }

    public function deleteP(Request $request)
    {
        Picture::where('project_id',$request->deleteme)->delete();

        Project::findorFail($request->deleteme)->delete();

      return back();
    }

    public function store(Request $request)
    {

        
        $path = $request->file('image')->store('/images/resource', ['disk' =>   'my_files']);

        $member = new Member;
        
        $member->name = $request->name;
        $member->position_id = $request->position;
        $member->image = $path;
        $member->save();

        $link = new Link;
        $link->member_id = $member->id;
        $link->url = $request->facebook;
        $link->icon = 'bi bi-facebook';
        $link->save(); 

        $link = new Link;
        $link->member_id = $member->id;
        $link->url = $request->instagram;
        $link->icon = 'bi bi-instagram';
        $link->save(); 

        $link = new Link;
        $link->member_id = $member->id;
        $link->url = $request->linkedin;
        $link->icon = 'bi bi-linkedin';
        $link->save(); 

        $link = new Link;
        $link->member_id = $member->id;
        $link->url = $request->twitter;
        $link->icon = 'bi bi-twitter';
        $link->save(); 

        return back();
        

        // Link::create(
        //     [
        //     'member_id' => $member->id,
        //     'url' => $request->facebook
        //     ],

        //    [
        //     'member_id' => $member->id,
        //     'url' => $request->instagram
        //    ],

        //    [
        //     'member_id' => $member->id,
        //     'url' => $request->linkedin
        //    ],

        //    [
        //     'member_id' => $member->id,
        //     'url' => $request->twitter
        //    ]
        
        // );
    }
}
