<?php

namespace App\Http\Controllers;

use App\Project;
use App\Slider;
use App\TeamMember;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $team_members = TeamMember::all();
        $sliders = Slider::all();
        $projects = Project::all();
        return view('welcome', compact('team_members','sliders','projects'));

    }//end of index

}//end of welcome controller
