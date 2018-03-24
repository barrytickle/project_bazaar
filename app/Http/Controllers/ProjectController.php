<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\role;
use App\User;
use App\degree;
use App\project;
use App\student;
use App\staff;

class ProjectController extends Controller
{

    public function __construct()
     {
         $this->middleware('auth');
     }
  public function index(){
      $student = Auth::user()->student->id;
      $student_id = Auth::user()->student->student_id;
      $degree = degree::all();
      $project = project::where('project_author', '=', $student)->get();
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
      return view('student.dashboard.projects.index', compact('student_id', 'degree', 'project', 'degree_count', 'years', 'staff_count'));
    }

    public function create(){
      $student_id = Auth::user()->student->student_id;
      $degree = degree::all();
      return view('student.dashboard.projects.create', compact('student_id', 'degree'));
    }

    public function store(Request $request)
    {
      $title = $request->input('project_title');
      $degree = $request->input('degree');
      $description = $request->input('description');
      $date = date('d-m-y');
      $slug = strtolower(str_replace(' ', '-', str_replace('&', 'and', $title)));
          project::create(['project_name' => $title, 'project_description' => $description, 'project_date' => $date, 'project_slug' =>$slug, 'project_degree' => $degree, 'project_author' => Auth::user()->student->id] );
      return redirect('/student/dashboard/projects');
      }

      public function edit($id){
        $project = project::findOrFail($id);
        $user_id = Auth::user()->student->id;
        if($project->project_author == $user_id){
          $student_id = Auth::user()->student->student_id;
          $degree = degree::all();
          return view('student.dashboard.projects.edit', compact('student_id', 'degree', 'project'));
        }else{
          return redirect('/student/dashboard/projects');
        }
      }

      public function update(Request $request, $id)
     {
         $pro = project::findOrFail($id);
         $title = $request->input('project_title');
         $degree = $request->input('degree');
         $description = $request->input('description');
         $date = date('d/m/y');
         $slug = strtolower(str_replace(' ', '-', str_replace('&', 'and', $title)));
         $pro->update(['project_name' => $title, 'project_description' => $description, 'project_date' => $date, 'project_slug' =>$slug, 'project_degree' => $degree, 'project_author' => Auth::user()->student->id]);
         return redirect('/student/dashboard/projects');

     }

     public function destroy($id)
    {
        $project = project::find($id);
        $project->delete();
        return redirect('/student/dashboard/projects');
    }


    public function comments($id){
      $project = project::find($id);
      $comments = $project->comment;
      $student_id = Auth::user()->student->student_id;
      return view('student.dashboard.projects.comment', compact('project', 'comments', 'student_id'));
    }

    public function commentpost(Request $request, $id){
      $pro = project::findOrFail($id);
      $user = Auth::user()->id;
      $pro->comment()->attach($user, array('project_comment' => $request->input('project_comment')));
      return redirect('/student/dashboard/projects');
    }
}
