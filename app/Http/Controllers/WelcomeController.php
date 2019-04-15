<?php

namespace App\Http\Controllers;

use App\Project;
use App\Service;
use App\Slider;
use App\TeamMember;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $services = Service::all();
        $team_members = TeamMember::all();
        $projects = Project::all();

        return view('welcome', compact('sliders', 'services', 'team_members','projects'));

    }//end of index

}//end of welcome controller
