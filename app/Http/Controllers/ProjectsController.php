<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $projects= Project::all();
        return view('projects.index',compact('projects'));
    }

    public function view(){

        return view('view',compact('projects'));
    }
}
