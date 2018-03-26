<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use App\project;
use App\staff;
use App\degree;

class StaffProjectsController extends Controller
{

    public function __construct(){

      if(Auth::user()->role[0]->name != 'staff'){
        return redirect('/student/dashboard');
      }
    }
    public function index(){
      $staff_name = Auth::user()->staff->staff_name;
      $degree = degree::all();
      $project = project::all();
      $degree_count = $degree->count();
      $staff_count = staff::all()->count();
      $years = array();
      foreach($project as $pro){
        $date = $pro->project_date;
        $newformat = date('Y',strtotime($date));
        if(!in_array($newformat, $years)){
          array_push($years, $newformat);
        }
      }
      return view('staff.dashboard.projects.index', compact('staff_name', 'degree', 'project', 'degree_count', 'years', 'staff_count'));
    }


      public function comments($id){
        $project = project::find($id);
        $comments = $project->comment;
        $staff_name = Auth::user()->staff->staff_name;
        return view('staff.dashboard.projects.comment', compact('project', 'comments', 'staff_name'));
      }

      public function commentpost(Request $request, $id){
        $pro = project::findOrFail($id);
        $user = Auth::user()->id;
        $pro->comment()->attach($user, array('project_comment' => $request->input('project_comment')));

      }

    public function approve($id){
      $project = project::findOrFail($id);
      if($project->is_authorized){
        $project->staff()->detach();
        $project->is_authorized = 0;
        $project->save();
      }else{
        $project->staff()->attach(Auth::user()->staff->id);
        $project->is_authorized = 1;
        $project->save();
      }
    }

    public function approved(){
      $project = project::where('is_authorized', '=', TRUE)->get();
      $staff_name = Auth::user()->staff->staff_name;
      $degree = degree::all();
      $degree_count = $degree->count();
      $staff_count = staff::all()->count();
      $years = array();
      foreach($project as $pro){
        $date = $pro->project_date;
        $newformat = date('Y',strtotime($date));
        if(!in_array($newformat, $years)){
          array_push($years, $newformat);
        }
      }
      return view('staff.dashboard.projects.approved', compact('staff_name', 'degree', 'project', 'degree_count', 'years', 'staff_count'));
    }

}
