<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SiteSettingController extends Controller
{
    public function create()
    {
        return view('dashboard.site_settings.create');

    }//end of create

    public function store(Request $request)
    {
        $request_data = $request->all();

        if ($request->logo) {

            if (setting('logo')) {

                Storage::disk('public_uploads')->delete('/uploads/' . setting('logo'));

            }//end of if

            $request->logo->store('/uploads', 'public_uploads');
            $request_data['logo'] = $request->logo->hashName();

        }//end of if

        if ($request->og_image) {

            if (setting('og_image')) {

                Storage::disk('public_uploads')->delete('/uploads/' . setting('og_image'));
            }

            $request->og_image->store('/uploads', 'public_uploads');
            $request_data['og_image'] = $request->og_image->hashName();

        }//end of og image

        setting($request_data)->save();
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.site_settings.create');

    }//end of store

}//end of controller
