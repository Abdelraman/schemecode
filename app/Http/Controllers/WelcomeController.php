<?php

namespace App\Http\Controllers;

use App\TeamMember;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $team_members = TeamMember::all();
        return view('welcome', compact('team_members'));

    }//end of index

}//end of welcome controller
