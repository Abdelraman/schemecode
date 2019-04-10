<?php

namespace App\Http\Controllers\Dashboard;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::when($request->search, function($q) use ($request) {

            return $q->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');

        })->latest()->paginate(5);

        return view('dashboard.projects.index', compact('projects'));

    }//end of index

    public function create()
    {
        return view('dashboard.projects.create');

    }//end of create

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required|url',
            'image' => 'required|image',
        ]);

        $request_data = $request->except(['image']);

        if ($request->image) {

            $request->file('image')->store('/uploads', 'public_uploads');
            $request_data['image'] = $request->image->hashName();

        }//end of if

        Project::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.projects.index');

    }//end of store

    public function show(Project $project)
    {
        //
    }

    public function edit(Project $project)
    {
        return view('dashboard.projects.edit',compact('project'));

    }//end of edit

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required|url',
            'image' => 'required|image',

        ]);

        $request_data = $request->except(['image']);

        if ($request->image) {

            Storage::disk('public_uploads')->delete('/uploads' . $project->logo);
            $request->file('image')->store('/uploads', 'public_uploads');
            $request_data['image'] = $request->image->hashName();

        }//end of if

        $project->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.projects.index');

    }//end of update

    public function destroy(Project $project)
    {
        Storage::disk('public_uploads')->delete('/uploads' . $project->image);
        $project->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.projects.index');

    }//end of delete

}//end of controller
