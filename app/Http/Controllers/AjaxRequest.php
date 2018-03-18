<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\project;
use App\like;
use App\student;
class AjaxRequest extends Controller
{
    public function modalslug($student,$slug){
      $project = project::where('project_slug', '=', $slug)->first();
      $like = like::where('project_id', '=', $project->id)->count();
      $student = student::where('student_id', '=', $student)->first();
      $sid = $student->user_id;
      $like = like::where('student_id', '=', $sid)->where('project_id','=', $project->id)->count();
      return view('ajax.modal', compact('project', 'like', 'student'));
    }

    public function likeproject($student, $slug){
      $student = student::where('student_id', '=', $student)->first();
      $project = project::where('project_slug', '=', $slug)->first();
      $id = $student->id;
      $like = like::where('student_id', '=', $id)->where('project_id', '=', $project->id);
      if($like->count() > 0){
        $like->delete();
      }else{
        like::create(['student_id' => $id, 'project_id' => $project->id]);
      }
      http_response_code(200);
    }
}
