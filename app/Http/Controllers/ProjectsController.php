<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
       // $projects= Project::all();
        return view('projects.index',compact('projects'));
    }

    public function view(){

        return view('view',compact('projects'));
    }

    public function create(){
        return view('projects.create');
    }
    public function store(){
        $project= new Weather();
        $project->Temperature = request('Temperature');
        $project->Humid= request('Humid');
        $project->Wind = request('Wind');
        $project->Description= request('Description');

        $project->save();

    }
}
