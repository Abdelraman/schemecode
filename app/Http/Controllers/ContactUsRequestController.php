<?php

namespace App\Http\Controllers;

use App\ContactUsRequest;
use Illuminate\Http\Request;

class ContactUsRequestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        
        ContactUsRequest::create($request->all());
        session()->flash('success', __('site.message_sent_successfully'));
        return redirect()->back();

    }//end of request

}//end of controller
