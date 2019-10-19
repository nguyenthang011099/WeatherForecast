<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function index(){
        $projects= haiduongs::all();
        return view('projects.index',compact('projects'));
    }

    public function view(){

        return view('view',compact('projects'));
    }

    public function create(){
        return view('projects.create');
    }
    public function store(){
        $project= DB::table('haiduongs');
        $project->Temperature = request('Temperature');
        $project->Humid= request('Humid');
        $project->Wind = request('Wind');
        $project->Description= request('Description');

        $project->save();

        return redirect('/view');

    }
    public function show(){
        $haiduongs=DB::table('haiduongs');
        return view('show',['haiduongs'=>$haiduongs]);
    }
}
