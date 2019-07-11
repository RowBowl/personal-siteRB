<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PageController extends Controller
{
    public function home(){
      return view('home');
    }

    public function aboutme(){
      return view('aboutme');
    }

    public function contactme(){
      return view('contactme');
    }

    public function projects(){
      $projects = Project::all();
      return view('projects', ['projects' => $projects] );
    }
}
