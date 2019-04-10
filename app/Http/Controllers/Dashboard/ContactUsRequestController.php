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

}//end of controller
