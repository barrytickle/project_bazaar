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
