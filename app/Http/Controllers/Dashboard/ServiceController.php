<?php

namespace App\Http\Controllers\Dashboard;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::when($request->search, function ($q) use ($request) {

            return $q->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');

        })->latest()->paginate(5);

        return view('dashboard.services.index', compact('services'));


    }//end of index

    public function create()
    {
        return view('dashboard.services.create');

    }//end of create

    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        Service::create($request->all());
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.services.index');

    }//end of store

    public function edit(Service $service)
    {
        return view('dashboard.services.edit', compact('service'));

    }//end of edit

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $service->update($request->all());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.services.index');

    }//end of update

    public function destroy(Service $service)
    {
        $service->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.services.index');

    }//end of destroy

}//end of controller
