<?php

namespace App\Http\Controllers\Dashboard;

use App\TeamMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    public function index(Request $request)
    {
        $team_members = TeamMember::when($request->search, function($q) use ($request) {

            return $q->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('title', 'like', '%' . $request->search . '%');

        })->paginate(5);

        return view('dashboard.team_members.index', compact('team_members'));
    
    }//end of index
    
    public function create()
    {
        return view('dashboard.team_members.create');
    
    }//end of store
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'facebook_link' => 'required|active_url',
            'twitter_link' => 'required|active_url',
            'linkedin_link' => 'required|active_url',
        ]);

        $request_data = $request->all();

        if ($request->image) {

            $request->image->store('/uploads', 'public_uploads');
            $request_data['image'] = $request->image->hashName();

        }//end of if

        TeamMember::create($request_data);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.team_members.index');
    
    }//end of store
    
    public function edit(TeamMember $team_member)
    {
        return view('dashboard.team_members.edit', compact('team_member'));

    }//end of edit
    
    public function update(Request $request, TeamMember $team_member)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'facebook_link' => 'required|active_url',
            'twitter_link' => 'required|active_url',
            'linkedin_link' => 'required|active_url',
        ]);

        $request_data = $request->all();

        if ($request->image) {

            Storage::disk('public_uploads')->delete('uploads/' . $team_member->image);
            $request->image->store('/uploads', 'public_uploads');
            $request_data['image'] = $request->image->hashName();

        }//end of if

        $team_member->update($request_data);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.team_members.index');
    
    }//end of update
    
    public function destroy(TeamMember $team_member)
    {
        Storage::disk('public_uploads')->delete('uploads/' . $team_member->image);

        $team_member->delete();

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.team_members.index');
    
    }//end of destroy
    
}//end of controller
