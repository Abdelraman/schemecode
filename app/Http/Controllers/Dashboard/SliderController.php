<?php

namespace App\Http\Controllers\Dashboard;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $sliders = Slider::when($request->search, function($q) use ($request) {

            return $q->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');

        })->latest()->paginate(5);

        return view('dashboard.sliders.index', compact('sliders'));

    }//end of index

    public function create()
    {
        return view('dashboard.sliders.create');

    }//end of create

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $request_data = $request->except(['image']);

        if ($request->image) {

            $request->file('image')->store('/uploads', 'public_uploads');
            $request_data['image'] = $request->image->hashName();

        }//end of if

        Slider::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.sliders.index');

    }//end of store

    public function show(Slider $slider)
    {
        //
    }

    public function edit(Slider $slider)
    {
        return view('dashboard.sliders.edit', compact('slider'));

    }//end of edit

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $request_data = $request->except(['image']);

        if ($request->image) {

            Storage::disk('public_uploads')->delete('/uploads/' . $slider->image);
            $request->file('image')->store('/uploads', 'public_uploads');
            $request_data['image'] = $request->image->hashName();

        }//end of if

        $slider->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.sliders.index');

    }//end of update

    public function destroy(Slider $slider)
    {
        Storage::disk('public_uploads')->delete('/uploads/' . $slider->image);
        $slider->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.sliders.index');

    }//end of delete

}//end of controller
