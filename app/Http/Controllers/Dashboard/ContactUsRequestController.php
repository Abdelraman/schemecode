<?php

namespace App\Http\Controllers\Dashboard;

use App\ContactUsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsRequestController extends Controller
{
    public function index(Request $request)
    {
        $contact_us_requests = ContactUsRequest::when($request->search, function ($q) use ($request) {

            return $q->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->orWhere('subject', 'like', '%' . $request->search . '%');

        })->paginate(5);

        return view('dashboard.contact_us_requests.index', compact('contact_us_requests'));

    }//end of index
    
    public function destroy(ContactUsRequest $contact_us_request)
    {
        $contact_us_request->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.contact_us_requests.index');

    }//end of delete

}//end of controller
