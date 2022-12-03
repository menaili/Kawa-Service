<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Link;
use App\Models\Notification;
use App\Models\Picture;
use App\Models\Position;
use App\Models\Project;
use App\Models\Team;

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
        Team::where('project_id',$request->deleteme)->delete();

        Project::findorFail($request->deleteme)->delete();

      return back();
    }

    public function editM($id)
    {
        $members = Member::with('position','link')->where('id',$id)->first();
        $positions = Position::all();
       // $members = Member::find(2)->link;

      //return $members;
        return view('pages.editM',compact('members','positions'));
    }

    public function updateM(Request $request, $id)
    {
        $member = Member::findorFail($id);
 
        $member->name = $request->name;
        $member->position_id = $request->position;
        if($request->file('image') != null){
        $member->image = $request->file('image')->store('/images/resource', ['disk' =>   'my_files']);
        }
        $member->save();

        Link::where('member_id',$member->id)->delete();

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
       

        return redirect('/Projects');
    }

    public function kawa(){
        $members = Member::with('position','link')->get();
        $projects = Project::with('member','picture')->get();
        $notifcounts = Notification::where('status','pending')->count();

      //return $members;
        return view('index',compact('members','projects','notifcounts'));
    }

    public function counter(){

      //return $members;
        //return view('pages.header',compact('notifcount'));
    }



    public function deletememb(Request $request)
    {
        Link::where('member_id',$request->deleteme)->delete();

        Member::findorFail($request->deleteme)->delete();

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
